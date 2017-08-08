@extends('layouts.master')

@section('title')
    Welcome to Social networing app
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-6">
            <h3>Sign Up</h3>
            <form class="form-horizontal" action="{{ url('signup') }}" method="post">
              <div class="form-group"> 
                <label class="control-label col-sm-2" for="email">Email </label>
                <div class="col-sm-10">
                  <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="firstName">FirstName </label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="firstName" placeholder="Enter first name" name="first_name">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="pwd">Password </label>
                <div class="col-sm-10"> 
                  <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
                </div>
              </div>
              <div class="form-group"> 
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-primary">Sign Up</button>
                </div>
              </div>
              <input type="hidden" name="_token" value="{{ Session::token() }}">
            </form>
        </div>
        <div class="col-sm-6">
            <h3>Sign In</h3>
            <form class="form-horizontal" action="#" method="post">
              <div class="form-group">
                <label class="control-label col-sm-2" for="email">Email </label>
                <div class="col-sm-10">
                  <input type="email" class="form-control" id="email" placeholder="Enter email" name="login_email">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="pwd">Password </label>
                <div class="col-sm-10"> 
                  <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="login_password">
                </div>
              </div>
              <div class="form-group"> 
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-primary">Sign In</button>
                </div>
              </div>
            </form>
        </div>
    </div>
@endsection