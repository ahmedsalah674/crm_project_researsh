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
              {{-- @if(\Auth::user()->role==1 &&$complain->state!=1)
                @continue
              @endif --}}

              {{-- @if(\Auth::user()->role==2 && $state==3 && !count($complain->replies))
                @continue
              @endif --}}
          <tr>
              <td>{{++$counter}})</td>
              <td class="pl-5">{{$complain->id}}</td>
              <td>{{$complain->title}}</td>
              <td>unassign</td>
              <td>
                {{-- @if(\Auth::user()->role==1||\Auth::user()->role==0)
                  @if($complain->state==0 &&\Auth::user()->role==0)
              <button type="button" style="width:20%" class="btn btn-primary btn-sm mr-1 " data-toggle="modal" data-target="#modalPush{{$counter}}"><i class="fas fa-check"></i> Sign</button>
                    <!--Modal: modalPush-->
              <div class="modal fade" id="modalPush{{$counter}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                      aria-hidden="true" data-backdrop="false" >
                      <div class="modal-dialog modal-notify modal-info" role="document" >
                        <!--Content-->
                        <div class="modal-content text-center" >
                          <!--Header-->
                          <div class="modal-header bg-primary d-flex justify-content-center" >
                          <h5 class="heading m-auto">Hello {{\Auth::user()->name}}</h5>
                          <button type="button"  class="btn text-white" data-toggle="modal" data-target="#modalPush{{$counter}}"><i class="fas fa-times"></i></button>

                          </div>
                          <!--Body-->
                          <div class="modal-body">
                            <i class="fas fa-bell fa-4x animated rotateIn mb-4  "style="color:#33b5e5"></i>
                            <p>please choose Employee</p>
                          </div>
                          <!--Footer-->
                          <div class="modal-footer m-auto">
                          <form action="{!!route('complain.sign')!!}" method="POST">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="ComplainId" value="{{$complain->id}}">
                            <select class="form-control"  name="Empolyee_id">
                              <option selected disabled>Select Employee</option>
                              @foreach ($employees as $employee)
                                <option value="{{$employee->id}}">{{$employee->name}}</option>
                              @endforeach
                            </select>
                            <button type="submit" class="btn btn-primary m-2"><i class="fas fa-check"></i>Sign</button>
                          </form>
                            
                          </div>
                        </div>
                        <!--/.Content-->
                      </div>
                    </div>               
                    @endif
                    @endif --}}
                    <form  class="d-inline">
                      @csrf
                      <button type="submit" class="btn btn-success btn-sm"><i class="fas fa-eye"></i> Show</button>
                    </form>
              </td>
            </tr>
          @endforeach
      </tbody>
    </table>  
@endsection
