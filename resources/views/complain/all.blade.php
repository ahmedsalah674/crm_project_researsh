@extends('adminlte::page')
@section('title','All Complains')
@section('content_header')
@include('error')
  <h1>All Complains</h1>
@endsection
@section('content')

  <table class="table datatable">
    <thead>
      <th>#</th>
      <th>Complain Id</th>
      <th>complain title</th>
      <th>state</th>
    </thead>
    <tbody>
      @php($counter=0)
      
          @foreach ($complains as  $index => $complain)
              
          <tr>
              <td>{{++$counter}})</td>
              <td class="pl-5">{{$complain->id}}</td>
              <td>{{$complain->title}}</td>
              <td>unassign</td>
              <td>
              
                    <form  action="{!! route('complain.details') !!}" method="POST" class="d-inline">
                      @csrf
                      <input type="hidden" name="ComplainId" value="{{$complain->id}}">
                      <button type="submit" class="btn btn-success btn-sm"><i class="fas fa-eye"></i> Show</button>
                    </form>
              </td>
            </tr>
          @endforeach
      </tbody>
    </table>  
@endsection
