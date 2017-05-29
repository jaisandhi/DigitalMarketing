<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        @if(Auth::check())
            Dashboard
        @else
            Panel
        @endif
    </title>

    <!-- Styles -->



    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/datatables/datatables.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        Panel
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <?php $roles = App\Helpers\Helpers::getrole(Auth::user()->id);?>
                                        {{$roles->name}} / {{$roles->rolename}} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/datatables/datatables.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.input-daterange input').each(function() {
                $(this).datepicker('clearDates');
            });
            var dtable = $('#company').DataTable({
                "bLengthChange": false,
                "bFilter": true,
                "paging": true,
                "pageLength": 5
            });
            $('#user').DataTable({
                "bLengthChange": false,
                "bFilter": true,
                "paging": true,
                "pageLength": 5
            });
           var table = $('#reports').DataTable({
                "bLengthChange": false,
                "bFilter": true,
                "paging": true,
                "pageLength": 5
            });
            $('.numbersOnly').keyup(function () {
                this.value = this.value.replace(/[^0-9\.]/g,'');
            });
            $('.datepicker').datepicker({
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                autoclose: true,
                todayHighlight: true,
                clearBtn: true,
                format: 'mm-dd-yyyy'
            });

            $('.datepicker').change(function() {
                $.fn.dataTable.ext.search.push(
                    function(settings, data, dataIndex) {
                        var min = $('#min-date').val();
                        var max = $('#max-date').val();
                        var createdAt = data[3] || 0; // Our date column in the table

                        if (
                            (min == "" || max == "") ||
                            (moment(createdAt).isSameOrAfter(min) && moment(createdAt).isSameOrBefore(max))
                        ) {
                            return true;
                        }
                        return false;
                    }
                );
            });

            $('.datepicker').change(function() {
                table.draw();
            });
            $('.client').on('change',function () {
                table.search($('.client option:selected').val()).draw();
            });
            $('.client_comp').on('change',function () {
                dtable.search($('.client_comp option:selected').val()).draw();
            });
        });
    </script>
</body>
</html>
