@extends('layouts.app')
<!-- Styles -->
<style>
    .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
    }
    .position-ref {
        position: relative;
    }
    .content {
        text-align: center;
    }
    .links > a {
        color: #636b6f;
        padding: 0 25px;
        font-size: 12px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }
</style>
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"><a href="{{ url('/home') }}">Dashboard</a></div>
                <div class="panel-body">
                    <div class="flex-center position-ref full-height">
                        <div class="content">
                            <div class="links">
                                @if(Request::segment(3) == "allcompanies")
                                    <a href="/home/company/allcompanies" style="color:#fff;background: black;padding:5px;">All Companies</a>
                                    <a href="/home/reports/show">Reports</a>
                                    {{--<a href="/home/user/allusers">All Users</a>--}}
                                @else
                                    <a href="/home/company/allcompanies">All Companies</a>
                                    <a href="/home/reports/show" style="color:#fff;background: black;padding:5px;">Reports</a>
                                    {{--<a href="/home/user/allusers" style="color:#fff;background: black;padding:5px;">All Users</a>--}}
                                @endif
                            </div>
                        </div>
                    </div><br>
                    <a href="/home/company/add/newcompany" class="btn btn-success">Add Company</a>
                    <div class="col-md-3">
                        <select class="form-control client_comp" id="client_comp" name="type">
                            <option value="">Choose Client</option>
                            @foreach($companybase as $allcompany)
                                <option value="{{$allcompany->name}}">{{$allcompany->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                    @endif
                    <table id="company" class="display" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th style="text-align: center">Name</th>
                            <th style="text-align: center">Address</th>
                            <th style="text-align: center">Contact</th>
                            <th style="text-align: center">Mail</th>
                            <th style="text-align: center">Comments</th>
                            <th style="text-align: center">Started date</th>
                            <th style="text-align: center">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($company as $allcompany)
                            <tr>
                                <td style="text-align: center">{{ ucwords($allcompany->name) }}</td>
                                <td style="text-align: center">{{$allcompany->address}}</td>
                                <td style="text-align: center">{{$allcompany->mobile}} / {{$allcompany->land_line}}</td>
                                <td style="text-align: center">{{$allcompany->email}}</td>
                                <td style="text-align: center">{{$allcompany->Comments}}</td>
                                <td style="text-align: center"><?php echo date_format($allcompany->updated_at,'m-d-Y');?></td>
                                <td>
                                    <a href="/home/company/{{$allcompany->id}}/edit" class="btn btn-primary">Edit</a>
                                    <a href="/home/company/{{$allcompany->id}}/delete" class="btn btn-danger">Remove</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


