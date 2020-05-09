@extends('adminlte::page')
@section('title','Complain Details')
@section('content_header')
  <h1 class="d-inline"><i class="fas fa-align-justify fa-sm text-info"></i>Complain Details:</h1>

@endsection

@section('content')
<table class="table ">
  <tbody>
        @if($complain->image != asset('images/complains/'))
        <label><i class="fas fa-image text-info"></i> Complain Image:</label>
        <br>    
        <tr>
          <td class="w-50">
            <a href="{{$complain->image}}"><img src="{{$complain->image}}" alt="Complain Image" height="200" width="320"> </a>
          </td>
        </tr>
    @endif
    <tr>
      <td ><i class="fas fa-signature text-info"></i> <b> Customer Name: </b>  {{ $user->name }}</td>
    
  </tr>
    <tr>
      <td><i class="fas fa-envelope text-info"></i> <b>Customer Email:</b> {{ $user->email }}</td>
      
    </tr>
    <tr>
        <td><i class="fas fa-info-circle text-info"></i> <b>Complain title: </b>{{ $complain->title }}</td>
    </tr>
    <tr>
      <td><i class="fas fa-align-justify text-info"></i> <b>Complain Details: </b>{{ $complain->details }}</td>
    </tr>
    
  </tbody>
</table>


@endsection
