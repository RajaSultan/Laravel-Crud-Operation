@extends('layout.app')
@section('content')

    <div class="row"  style="margin: 0 0 30px 0; background-color: #845EC2;padding:20px">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 style="color: white"> Show Post</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('posts.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $post->title }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                {{ $post->description }}
            </div>
        </div>

    </div>
@endsection