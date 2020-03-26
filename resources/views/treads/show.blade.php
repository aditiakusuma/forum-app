@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$tread->title}}</div>

                <div class="card-body">
                    {{$tread->body}}
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row justify-content-center">
        <div class="col-md-8">
            @foreach ($tread->replies as $reply)    
            <div class="card-header">
                <a href="">{{$reply->user->name}}</a> said {{$reply->created_at->diffforHumans()}}
            </div>
            <div class="card">
                <div class="card-body">
                    {{$reply->body}}
                </div>
            </div>
            <br>
            @endforeach
        </div>
    </div>
</div>
@endsection
