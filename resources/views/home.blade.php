@extends('layouts.app')
<!-- Styles -->
<style>
    .full-height {
        /*height: 11vh;*/
    }
    .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
    }
    .position-ref {
        position: relative;
    }
    .top-right {
        position: absolute;
        right: 10px;
        top: 18px;
    }
    .content {
        text-align: center;
    }
    .title {
        font-size: 84px;
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
    .m-b-md {
        margin-bottom: 30px;
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
                            <?php $roles = App\Helpers\Helpers::getrole(Auth::user()->id);?>
                            @if($roles->rolename == "Customer")
                                <div class="links">
                                    <a href="/home/reports/show">Reports</a>
                                </div>
                            @else
                                <div class="links">
                                    <a href="/home/company/allcompanies">All Companies</a>
                                    <a href="/home/reports/show">Reports</a>
                                    {{--<a href="/home/user/allusers">All Users</a>--}}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--MAIL_DRIVER=log--}}
    {{--MAIL_HOST=localhost:8000--}}
    {{--MAIL_PORT=587--}}
    {{--MAIL_USERNAME=null--}}
    {{--MAIL_PASSWORD=null--}}
    {{--MAIL_ENCRYPTION=null--}}
</div>

@endsection


