@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('mobile') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Mobile</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control numbersOnly" name="mobile" value="{{ old('mobile') }}" required maxlength="10">
                                @if ($errors->has('mobile'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('mobile') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <?php $nationalities = App\Helpers\Helpers::getnationality(); $localities = App\Helpers\Helpers::getlocality(); ?>
                        <div class="form-group{{ $errors->has('nationality') ? ' has-error' : '' }}">
                            <label for="type" class="col-md-4 control-label">Nationality</label>
                            <div class="col-md-6">
                                <select class="form-control" id="sel1" name="nationality">
                                    <option value="">Choose Your Nationality</option>
                                    @foreach($nationalities as $nationality)
                                        <option value="{{$nationality->name}}">{{$nationality->name}}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('nationality'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nationality') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('locality') ? ' has-error' : '' }}">
                            <label for="type" class="col-md-4 control-label">Locality</label>
                            <div class="col-md-6">
                                <select class="form-control" id="sel1" name="locality">
                                    <option value="">Choose Your Locality</option>
                                    @foreach($localities as $locality)
                                        <option value="{{$locality->name}}">{{$locality->name}}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('locality'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('locality') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="gender" class="col-md-4 control-label">Gender</label>
                            <div class="col-md-6">
                                    <label class="col-md-6"> Male <input type="checkbox" name="gender" value="M"></label>
                                    <label class="col-md-6"> Female <input type="checkbox" name="gender" value="F"></label>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
