@extends('adminlte::page')
@section('title','User profile')
@section('content_header')
@include('error')
<i class="fas fa-user-circle fa-2x text-info"></i>
  <h1 class="d-inline">User profile:</h1>
@endsection
@section('content')
<table class="table " style="margin-bottom:5px">
  <tbody>
    @if($user->image!= asset('images/users/'))
    <i class="fas fa-image mr-1 text-info "></i>
    <label>User Image:</label>
    <br>  
    <tr>
      <td><a href="{{$user->image}}"><img src="{{$user->image}}" alt="User profile image" style="border-radius:50%" height="120" width="200"></a></td>
    </tr>
    @endif
    <tr>
      <td >
        <i class="fas fa-signature text-info"></i>
        <label for="">User Name:</label>
        {{ $user->name }}
      </td>
    </tr>
    <tr>
      <td>
        <i class="fas fa-envelope text-info"></i>
        <label for="">User Email:</label>
         {{ $user->email }}</td>
     </tr>
      
        @if(\Auth::user()->role == 0 )
          <tr>
            @if($user->role == 0)
                <td>
                  <i class="fas fa-fingerprint text-info"></i>
                  <label for=""> User role:Admin </label>
                  </td>
            @endif
            @if($user->role == 1)
              <td>
                  <i class="fas fa-fingerprint text-info"></i>
                  <label for=""> User role:</label> Employee  
              </td>
              {{-- @if(\Auth::user()->role==0)
                <tr>
                  <td>
                    @if(!$user->rate->number_rate)
                    <label ><i class="fas fa-star text-info"></i> User rate:</label>No Rate Yet
                    @else
                    <label ><i class="fas fa-star text-info"></i> User rate:</label>   {{($user->rate->rate / $user->rate->number_rate) *10}}%
                    @endif
                  </td>
                </tr>
              @endif --}}
            @endif
            @if($user->role == 2)
              
              <td><i class="fas fa-fingerprint text-info"></i> User role: Customer </td>
              
              {{-- @if(\Auth::user()->role==0)
              
                <tr>
                  @if($user->rate->number_rate==0)
                  <td>
                    <i class="fas fa-star text-info"></i> User rate: No Rate Yet
                  </td>
                  @else
                  <td>
                    <i class="fas fa-star text-info"></i> User rate: {{($user->rate->rate /$user->rate->number_rate) *10}}%
                  </td>
                @endif
                </tr>
              @endif--}}
            @endif
          </tr>
        @endif  
      </tbody>
</table>
{{-- @if($user->role!=0 && \Auth::user()->role==0 &&$user->rate->number_rate )

    <div class="row justify-content-center">
      
      <div class="progress mb-4 " style="width:70%;border-radius:50px">
        
      <div class="progress-bar " role="progressbar " style="width:{{($user->rate->rate /$user->rate->number_rate)*10 }}%" aria-valuenow="{{($user->rate->rate /$user->rate->number_rate)*10  }}% " aria-valuemin="0" aria-valuemax="100%"></div>
      </div>
    </div>
@endif
@if(\Auth::user()->id == $user->id)
<div>
  <a href="{!!route('edit.profile')!!}" style="width: 30%" class="btn btn-primary btn-mg " ><i class="fas fa-edit fa-sm"></i> Edit</a>
</div>
@endif --}}
@endsection

