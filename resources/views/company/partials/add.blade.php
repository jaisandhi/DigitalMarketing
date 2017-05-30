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
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><a href="{{ url('/home') }}">Dashboard</a></div>
                <div class="panel-body">
                    <div class="flex-center position-ref full-height">
                        <div class="content">
                            <div class="links">
                                @if(isset($company))
                                   Update <strong>{{$company->name}}</strong>
                                @else
                                   Register New Company
                                @endif
                            </div>
                        </div>
                    </div><br>
                    <div class="flex-center">
                        @if(isset($company))
                            {{$company->name}} <strong> Users</strong>
                        @else

                        @endif
                    </div>
                    <br>
                    @if(isset($company))

                        <table id="user" class="display" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th>Name</th>
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

                        <form class="form-horizontal" role="form" method="POST" action="/home/company/{{$company->id}}/update">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Name</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ $company->name }}" required placeholder="Company Name">

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">Address</label>

                                <div class="col-md-6">
                                    <input id="email" type="text" class="form-control" name="address" value="{{ $company->address }}" required placeholder="Company Address">

                                    @if ($errors->has('address'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('mobile') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Mobile</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control numbersOnly" name="mobile" value="{{ $company->mobile }}" required maxlength="10" placeholder="9632587410">

                                    @if ($errors->has('mobile'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('mobile') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('land_line') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Land Line</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control numbersOnly" name="land_line" value="{{ $company->land_line }}" required maxlength="8" placeholder="23654178">

                                    @if ($errors->has('land_line'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('land_line') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Mail</label>

                                <div class="col-md-6">
                                    <input id="name" type="email" class="form-control" name="email" value="{{ $company->email }}" required placeholder="@webnotrix.com">

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
                                <label for="type" class="col-md-4 control-label">Industry Type</label>
                                <div class="col-md-6">
                                    <select class="form-control" id="sel1" name="type">
                                        <option value="">Choose Your Type</option>
                                        @foreach($industry_type as $industry)
                                            <option value="{{$industry->id}}" <?php if($company->Industry_Type == $industry->id) echo 'selected="selected"'; ?>>{{$industry->type}}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('type'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('type') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('comments') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Comment</label>

                                <div class="col-md-6">
                                    <textarea id="comments" class="form-control" name="comments" placeholder="Comments">{{ $company->Comments }}</textarea>

                                    @if ($errors->has('comments'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('comments') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Update Company
                                    </button>
                                </div>
                            </div>
                        </form>
                    @else
                    <form class="form-horizontal" role="form" method="POST" action="/home/company/store">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Company Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required placeholder="Company Name">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Company Address</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control" name="address" value="{{ old('address') }}" required placeholder="Company Address">

                                @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('mobile') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Company Contact</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control numbersOnly" name="mobile" value="{{ old('mobile') }}" required maxlength="10" placeholder="9632587410">

                                @if ($errors->has('mobile'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('mobile') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('land_line') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Land Line</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control numbersOnly" name="land_line" value="{{ old('land_line') }}" required maxlength="8" placeholder="23654178">

                                @if ($errors->has('land_line'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('land_line') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Mail</label>

                            <div class="col-md-6">
                                <input id="name" type="email" class="form-control" name="email" value="{{ old('email') }}" required placeholder="@webnotrix.com">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
                            <label for="type" class="col-md-4 control-label">Industry Type</label>
                            <div class="col-md-6">
                                <select class="form-control" id="sel1" name="type">
                                    <option value="">Choose Your Type</option>
                                    @foreach($industry_type as $industry)
                                        <option value="{{$industry->id}}">{{$industry->type}}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('type'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('type') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('comments') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Comment</label>

                            <div class="col-md-6">
                                <textarea id="comments" class="form-control" name="comments" placeholder="Comments">{{ old('comments') }}</textarea>

                                @if ($errors->has('comments'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('comments') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register Company
                                </button>
                            </div>
                        </div>
                    </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


