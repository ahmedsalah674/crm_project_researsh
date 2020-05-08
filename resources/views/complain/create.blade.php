@extends('adminlte::page')
@section('title','Add Complain')
@section('content_header')
@include('error')
  <h1><i class="fas fa-plus fa-sm text-info"></i> Add New Complain</h1>
@endsection
@section('content') 
<form class="col-md-6" action="{!!route('complain.store')!!}" method="post" enctype="multipart/form-data" id="create_complain">
    @csrf
      <div class="form-group">
        <i class="fas fa-pencil-alt text-info"></i>
        <label>Complain Title</label>
          <input type="text" class="form-control" name="title"placeholder="Write Just Small Title Please " value="{{ old('title') }}">
        </div>
      <div class="form-group">
        <label><i class="fas fa-pencil-alt text-info"></i> Complain Details</label>
        <textarea name="details" class="form-control" form='create_complain' placeholder="Write Your Complain Here With Details Please ">{{ old('details') }}</textarea>
      </div>
          <div class="form-group">   
        <label ><i class="fas fa-image text-info"></i> complain Image <span class="small">(if found): <span></label>  
        <input type="file" name="image" value="{{old('image')}}" class="ml-5 d-block"   >
      </div>
      <div class="form-group">
      <input type="hidden" name="customer_id" name="customer_id" value="{{$customer_id}} "  >
        <button type="submit" style="width:100%"class="btn btn-primary"><i class="fas fa-plus"></i> Create Complain</button>
      </div>
  </form>
@endsection
