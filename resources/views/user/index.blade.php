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
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><a href="{{ url('/home') }}">Dashboard</a></div>
                <div class="panel-body">
                    <div class="flex-center position-ref full-height">
                        <div class="content">
                            <div class="links">
                                @if(Request::segment(3) == "allcompanies")
                                    <a href="/home/company/allcompanies" style="color:#fff;background: black;padding:5px;">All Companies</a>
                                    <a href="/home/user/allusers">All Users</a>
                                @else
                                    <a href="/home/company/allcompanies">All Companies</a>
                                    <a href="/home/user/allusers" style="color:#fff;background: black;padding:5px;">All Users</a>
                                @endif
                            </div>
                        </div>
                    </div><br>
                    <table id="user" class="display" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>User name</th>
                            <th>Email</th>
                            <th>Mobile</th>
                            <th>Joined date</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($user as $alluser)
                        <tr>
                            <td style="text-align: center">{{ ucwords($alluser->name) }}</td>
                            <td style="text-align: center">{{$alluser->email}}</td>
                            <td style="text-align: center">{{$alluser->mobile}}</td>
                            <td style="text-align: center"><?php echo date_format($alluser->updated_at,'m-d-Y');?></td>
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


