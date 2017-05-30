<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClientBaseCompany;
use App\Models\Sales;
use App\Helpers\Helpers;
use App\Models\IndustryType;
use App\Http\Requests\CompanyFormRequest;
use Auth;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showallcompany()
    {
        $company = ClientBaseCompany::where('is_deleted',0)->get();
        $companybase = ClientBaseCompany::where('is_deleted',0)->paginate(5);
        return view('company.index',compact('company','companybase'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
//    public function showallusers()
//    {
//        $user = User::paginate(5);
//        return view('user.index',compact('user'));
//    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function addcompany(){
        $industry_type = IndustryType::all();
        return view('company.partials.add',compact('industry_type'));
    }

    /**
     * @param CompanyFormRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function storecompany(CompanyFormRequest $request){
        $store = new ClientBaseCompany();
        $store->name = $request->input('name');
        $store->address = $request->input('address');
        $store->mobile = $request->input('mobile');
        $store->land_line = $request->input('land_line');
        $store->email = $request->input('email');
        $store->Comments = $request->input('comments');
        $store->Industry_Type = $request->input('type');
        $store->no_of_employee = 0;
        $store->is_deleted = 0;
        $store->save();
        return redirect('/home/company/allcompanies')->with('message', 'Successfully New Company Registered');
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function removecompany($id){
        $remove = ClientBaseCompany::find($id);
        $remove->is_deleted = 1;
        $remove->update();
        return redirect('/home/company/allcompanies')->with('message', 'Successfully Company Has Been Removed');
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function editcompany($id){
        $company = ClientBaseCompany::find($id);
        $industry_type = IndustryType::all();
        $user = User::where('party_id',$id)->get();
        return view('company.partials.add',compact('company','industry_type','user'));
    }

    /**
     * @param CompanyFormRequest $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updatecompany(CompanyFormRequest $request,$id){
        $update = ClientBaseCompany::find($id);
        $update->name = $request->input('name');
        $update->address = $request->input('address');
        $update->mobile = $request->input('mobile');
        $update->land_line = $request->input('land_line');
        $update->email = $request->input('email');
        $update->Comments = $request->input('comments');
        $update->Industry_Type = $request->input('type');
        $update->update();
        return redirect('/home/company/allcompanies')->with('message', 'Successfully Company Has Been Updated');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showallreports(){
        $roles = Helpers::getrole(Auth::user()->id);
        if($roles->rolename == "Customer"){
            $companyname = Helpers::getcompanyname(Auth::user()->party_id);
            $reports = Sales::leftjoin('users','users.id','=','sales.user_id')
                ->leftjoin('client_base_companies','client_base_companies.id','=','users.party_id')
                ->where('client_base_companies.id',$companyname->id)
                ->where('sales.is_deleted',0)
                ->select('users.*','client_base_companies.name as companyname','sales.is_deleted as deletedsales','sales.hide_flag as salesflag','sales.created_at as recordedddate','sales.id as salesid')
                ->paginate(5);
            return view('reports.index',compact('reports'));
        }else{
            $company = ClientBaseCompany::where('is_deleted',0)->get();
            $reports = Sales::join('users','users.id','=','sales.user_id')
                ->join('client_base_companies','client_base_companies.id','=','users.party_id')
                ->where('sales.is_deleted',0)
                ->select('users.*','client_base_companies.name as companyname','sales.is_deleted as deletedsales','sales.hide_flag as salesflag','sales.created_at as recordedddate','sales.id as salesid')
                ->paginate(5);
            return view('reports.index',compact('reports','company'));
        }
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function validatereports($id){
        $sales = Sales::find($id);
        $sales->hide_flag = 1;
        $sales->update();
        return redirect('/home/reports/show')->with('message', 'Successfully Reports Has Been Closed');
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function notvalidatereports($id){
        $sales = Sales::find($id);
        $sales->hide_flag = 2;
        $sales->update();
        return redirect('/home/reports/show')->with('message', 'Successfully Reports Has Been Cancelled');
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function removereport($id){
        $sales = Sales::find($id);
        $sales->is_deleted = 1;
        $sales->update();
        return redirect('/home/reports/show')->with('message', 'Successfully Reports Has Been Removed');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showopenlead(){
        $roles = Helpers::getrole(Auth::user()->id);
        if($roles->rolename == "Customer"){
            $companyname = Helpers::getcompanyname(Auth::user()->party_id);
            $reports = Sales::leftjoin('users','users.id','=','sales.user_id')
                ->leftjoin('client_base_companies','client_base_companies.id','=','users.party_id')
                ->where('client_base_companies.id',$companyname->id)
                ->where('sales.is_deleted',0)
                ->where('sales.hide_flag',0)
                ->select('users.*','client_base_companies.name as companyname','sales.is_deleted as deletedsales','sales.hide_flag as salesflag','sales.created_at as recordedddate','sales.id as salesid')
                ->paginate(5);
            return view('reports.index',compact('reports'));
        }else{
            $company = ClientBaseCompany::all();
            $reports = Sales::join('users','users.id','=','sales.user_id')
                ->join('client_base_companies','client_base_companies.id','=','users.party_id')
                ->where('sales.is_deleted',0)
                ->where('sales.hide_flag',0)
                ->select('users.*','client_base_companies.name as companyname','sales.is_deleted as deletedsales','sales.hide_flag as salesflag','sales.created_at as recordedddate','sales.id as salesid')
                ->paginate(5);
            return view('reports.index',compact('reports','company'));
        }
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showcloselead(){
        $roles = Helpers::getrole(Auth::user()->id);
        if($roles->rolename == "Customer"){
            $companyname = Helpers::getcompanyname(Auth::user()->party_id);
            $reports = Sales::leftjoin('users','users.id','=','sales.user_id')
                ->leftjoin('client_base_companies','client_base_companies.id','=','users.party_id')
                ->where('client_base_companies.id',$companyname->id)
                ->where('sales.is_deleted',0)
                ->where('sales.hide_flag',1)
                ->select('users.*','client_base_companies.name as companyname','sales.is_deleted as deletedsales','sales.hide_flag as salesflag','sales.created_at as recordedddate','sales.id as salesid')
                ->paginate(5);
            return view('reports.index',compact('reports'));
        }else{
            $company = ClientBaseCompany::all();
            $reports = Sales::join('users','users.id','=','sales.user_id')
                ->join('client_base_companies','client_base_companies.id','=','users.party_id')
                ->where('sales.is_deleted',0)
                ->where('sales.hide_flag',1)
                ->select('users.*','client_base_companies.name as companyname','sales.is_deleted as deletedsales','sales.hide_flag as salesflag','sales.created_at as recordedddate','sales.id as salesid')
                ->paginate(5);
            return view('reports.index',compact('reports','company'));
        }
    }
}
