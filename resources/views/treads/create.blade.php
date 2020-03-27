@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create a New Tread</div>

                <div class="card-body">
                    <form action="/treads" method="POST">
                        @csrf
                        <div class="form-group">
                          <label for="title">Title</label>
                          <textarea class="form-control" name="title" id="title" rows="1"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="body">Body</label>
                            <textarea class="form-control" name="body" id="body" rows="8"></textarea>
                          </div>
                          <button type="post" class="btn btn-primary">Post</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
