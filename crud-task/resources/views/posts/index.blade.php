@extends('layout.app')
@section('content')

    <div class="row"  style="margin: 0 0 30px 0; background-color: #845EC2;padding:20px">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 style="color: white">Laravel 6 CRUD Example from scratch </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('posts.create') }}"> Create New Product</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th style=" background-color:#D65DB1; color:white">Title</th>
            <th  style=" background-color:#D65DB1; color:white">Description</th>
            <th  style=" background-color:#D65DB1; color:white">Action</th>
        </tr>
        @foreach ($posts as $post)
        <tr>
            <td>{{ $post->title }}</td>
            <td>{{ $post->description }}</td>
            <td>
                <form action="{{ route('posts.destroy',$post->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('posts.show',$post->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('posts.edit',$post->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

@endsection