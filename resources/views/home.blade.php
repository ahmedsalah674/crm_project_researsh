@extends('adminlte::page')
@php( $username = \Auth::user()->name)
@php( $userrole = \Auth::user()->role)
@if($userrole==0)
@php($userrole='Admin')
@elseif($userrole==1)
@php ($userrole='Employee')
@else
@php ($userrole='Customer')
@endif

@section('content')

@include('error')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><i class="fas fa-home text-info"></i> Home</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    Welcome at CRM system {{$userrole}} : <b>{{$username}}</b> 
                   {{-- @if(\Auth::user()->role == 0)
                    <br>
                    <br>
                    <label>System Rate: <b>{{App\SystemRate::pluck('rate')->avg()*10}}%</b></label>
                    <div class="progress" style="border-radius:50px">
                        <div class="progress-bar"  role="progressbar" style="width:{{App\SystemRate::pluck('rate')->avg()*10}}%" aria-valuenow="{{App\SystemRate::pluck('rate')->avg()*10}}" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    @endif
                     --}}
                    
            </div>
        </div>
    </div>
</div>

@endsection
