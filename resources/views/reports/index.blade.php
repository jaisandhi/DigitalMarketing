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
                            <?php $roles = App\Helpers\Helpers::getrole(Auth::user()->id);?>
                            @if($roles->rolename == "Customer")
                                <div class="links">
                                    @if(Request::segment(3) == "show")
                                        <a href="/home/reports/show" style="color:#fff;background: black;padding:5px;">Reports</a>
                                        @if(Request::segment(3) == "open_leads")
                                            <a href="/home/reports/open_leads" style="color:#fff;background: black;padding:5px;">Open Leads</a>
                                            <a href="/home/reports/close_leads">Close Leads</a>
                                            <a href="/home/reports/show">Reports</a>
                                        @elseif(Request::segment(3) == "close_leads")
                                            <a href="/home/reports/open_leads">Open Leads</a>
                                            <a href="/home/reports/close_leads" style="color:#fff;background: black;padding:5px;">Close Leads</a>
                                            <a href="/home/reports/show">Reports</a>
                                        @else
                                            <a href="/home/reports/open_leads">Open Leads</a>
                                            <a href="/home/reports/close_leads">Close Leads</a>
                                            <a href="/home/reports/show">Reports</a>
                                        @endif
                                    @else
                                        <a href="/home/reports/show">Reports</a>
                                        @if(Request::segment(3) == "open_leads")
                                            <a href="/home/reports/open_leads" style="color:#fff;background: black;padding:5px;">Open Leads</a>
                                            <a href="/home/reports/close_leads">Close Leads</a>
                                        @elseif(Request::segment(3) == "close_leads")
                                            <a href="/home/reports/open_leads">Open Leads</a>
                                            <a href="/home/reports/close_leads" style="color:#fff;background: black;padding:5px;">Close Leads</a>
                                        @else
                                            <a href="/home/reports/open_leads">Open Leads</a>
                                            <a href="/home/reports/close_leads">Close Leads</a>
                                        @endif
                                    @endif
                                </div>
                            @else
                                <div class="links">
                                    @if(Request::segment(3) == "allcompanies")
                                        <a href="/home/company/allcompanies" style="color:#fff;background: black;padding:5px;">All Companies</a>
                                        <a href="/home/reports/show">Reports</a>

                                    @else
                                        <a href="/home/company/allcompanies">All Companies</a>
                                        @if(Request::segment(3) == "open_leads")
                                            <a href="/home/reports/show">Reports</a>
                                            <a href="/home/reports/open_leads" style="color:#fff;background: black;padding:5px;">Open Leads</a>
                                            <a href="/home/reports/close_leads">Close Leads</a>
                                        @elseif(Request::segment(3) == "close_leads")
                                            <a href="/home/reports/show">Reports</a>
                                            <a href="/home/reports/open_leads">Open Leads</a>
                                            <a href="/home/reports/close_leads" style="color:#fff;background: black;padding:5px;">Close Leads</a>
                                        @else
                                            <a href="/home/reports/show" style="color:#fff;background: black;padding:5px;">Reports</a>
                                            <a href="/home/reports/open_leads">Open Leads</a>
                                            <a href="/home/reports/close_leads">Close Leads</a>
                                        @endif
                                    @endif
                                </div>
                            @endif
                        </div>
                    </div><br>
                    <div class="col-md-4">
                        <div class="input-group input-daterange">
                            <input type="text" id="min-date" class="form-control datepicker" data-date-format="mm-dd-yyyy" placeholder="From:">
                            <div class="input-group-addon">to</div>
                            <input type="text" id="max-date" class="form-control datepicker" data-date-format="mm-dd-yyyy" placeholder="To:">
                        </div>
                    </div>
                    <?php $roles = App\Helpers\Helpers::getrole(Auth::user()->id);?>
                    @if($roles->rolename != "Customer")
                    <div class="col-md-3">
                        <select class="form-control client" id="client" name="type">
                            <option value="">Choose Client</option>
                            @foreach($company as $allcompany)
                                <option value="{{$allcompany->name}}">{{$allcompany->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    @endif
                    <br><br>
                    @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                    @endif
                    <table id="reports" class="display" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th style="text-align: center">Report Id</th>
                            <th style="text-align: center">Customer Name</th>
                            <th style="text-align: center">Company</th>
                            <th style="text-align: center">Recorded Date</th>
                            <th style="text-align: center">Status</th>
                            @if(Request::segment(3) == "show")
                            <th style="text-align: center">Action</th>
                            @endif
                        </tr>
                        </thead>
                        <tbody>
                        <?php $i=1;?>
                        @foreach($reports as $allreports)
                            <?php $createdAt = \Carbon\Carbon::parse($allreports->recordedddate);$recordedddate = $createdAt->format('m-d-Y');?>
                            <tr>
                                <td style="text-align: center">{{$i}}</td>
                                <td style="text-align: center">{{ ucwords($allreports->name) }}</td>
                                <td style="text-align: center">{{ ucwords($allreports->companyname) }}</td>
                                <td style="text-align: center">{{$recordedddate}}</td>
                                <td style="text-align: center">
                                   @if($allreports->salesflag == 0)
                                        Open
                                   @elseif($allreports->salesflag == 1)
                                        Close
                                   @else
                                       Cancel
                                   @endif
                                </td>
                                @if(Request::segment(3) == "show")
                                <td>
                                    @if($allreports->salesflag == 0)
                                        <a href="/home/reports/{{$allreports->salesid}}/validate" class="btn btn-success">Validate</a>
                                        <a href="/home/reports/{{$allreports->salesid}}/notvalidate" class="btn btn-danger">Not Validate</a>
                                        <a href="/home/reports/{{$allreports->salesid}}/delete" class="btn btn-primary">Remove </a>
                                    @else
                                        <a href="/home/reports/{{$allreports->salesid}}/delete" class="btn btn-danger">Remove </a>
                                    @endif
                                </td>
                                @endif
                            </tr>
                         <?php $i++;?>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


