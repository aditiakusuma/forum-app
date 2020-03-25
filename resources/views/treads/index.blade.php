@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Forum Treads</div>

                <div class="card-body">
                    @foreach ($treads as $tread)
                        <article>
                            <h4>
                                <a href="{{$tread->path()}}">{{ $tread->title}}</a>
                            </h4>
                            <div class="body">{{$tread->body}}</div>
                        </article>
                        <br>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
