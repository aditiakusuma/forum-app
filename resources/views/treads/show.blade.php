@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$tread->title}} by <a href="http://">{{$tread->user->name}}</a></div>

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

    {{-- //hanya untuk yang login --}}
    @if (auth()->check())
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form action="{{$tread->path().'/replies'}}" method="POST">
                @csrf
                <div class="form-group">
                    <textarea class="form-control" name="body" id="body" rows="5" placeholder="Comment..."></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Post</button>
            </form>
            </div>
        </div>
    @else
        <p>Please <a href="{{route('login')}}">sign in</a> to participate in this discussion</p>
    @endif
</div>
@endsection
