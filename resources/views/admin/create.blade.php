
@extends('adminlte::page')
@section('title','Add User')
@section('content_header')

  <h1><i class="fas fa-plus fa-sm text-info"></i> Add New User</h1>
@endsection
@section('content')
@include('error') 
<form class="col-md-6" action="{!!route('user.store')!!}" method="post" enctype="multipart/form-data">
    @csrf
      <div class="form-group">
        
        <label><i class="fas fa-signature text-info"></i> Name</label>
          <input type="text" class="form-control" name="name" placeholder="Enter Your Full Name" value="{{ old('name') }}">
      </div>
      <div class="form-group">
        <label><i class="fas fa-envelope text-info "></i> Email</label>
        <input type="email" name="email" class="form-control" placeholder="Enter Your Full Name" value="{{ old('email') }}">
      </div>
      <div class="form-group">
        
        <label><i class="fas fa-unlock-alt text-info"></i> Password</label>
        <input type="password" name="password" class="form-control" placeholder="Enter Your Password" >
      </div>
      <div class="form-group">
        <label><i class="fas fa-lock text-info"></i> Confirm Password</label>
        <input type="password" name="password-confirm" placeholder="Confirm Your Password" class="form-control" >
      </div>
      <div class="form-group">
        <label><i class="fas fa-fingerprint text-info"></i> Role</label>
        <select class="form-control" name="role">
            <option selected disabled>Select role</option>
                <option value=0>admin</option>
                <option value=1>employee</option>
                <option value=2>customer</option>
        </select>
    </div>
      <div class="form-group">
        
        <label><i class="fas fa-image text-info"></i> Image:</label>
        <input type="file" name="image" value="{{old('image')}}">
      </div>
      <div class="form-group">
        <button type="submit" style="width:40%"class="btn btn-primary">ADD</button>
      </div>
  </form>
@endsection
