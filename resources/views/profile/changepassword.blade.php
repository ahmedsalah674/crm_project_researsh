@extends('adminlte::page')
@section('title','Change Password')
@section('content_header')
@include('error')
  <h1><i class="fas fa-tools fa-lg text-info fa-sm"></i> Change Your Password</h1>
@endsection
@section('content')

<form class="col-md-6" action="{!!route('password.change')!!}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
<input  type="hidden" name="id" value="{{\Auth::user()->id}}">
      <div class="form-group">
        
        <label><i class="fas fa-unlock-alt text-info"></i> Old Password</label>
        <input type="password" name="password" placeholder="Enter Your Old Password" class="form-control" >
      </div>
      <div class="form-group"> 
        
        <label><i class="fas fa-lock text-info"></i> New Password</label>
        <input type="password" name="newpassword" placeholder="Enter Your New Password"  class="form-control" value="{{ old('quantity') }}">
      </div>
      <div class="form-group">
        
        <label><i class="fas fa-lock text-info m-1"></i><i class="fas fa-lock text-info"></i> Confirm Password</label>
        <input type="password" name="confirmpassword" placeholder="Confirm Your New Password"  class="form-control" value="{{ old('quantity') }}">
      </div>
            <div class="form-group">
        <button type="submit" class="btn btn-primary w-100 mt-3"> <i class="fas fa-tools fa-sm "></i> Change</button>
      </div>
  </form>
@endsection