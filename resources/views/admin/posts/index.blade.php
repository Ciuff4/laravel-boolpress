@extends('layouts.app')

@section('content')
<a href="{{route ('admin.posts.create')}}" class="btn btn-success mb-3">CREATE NEW POST</a>
<div>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Title</th>
            <th scope="col">Category</th>
            <th scope="col">Tags</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach ( $posts as $post )
            <tr>
                <th scope="row">{{$post->id}}</th>
                <td>{{$post->title}}</td>
                <td>{{$post->category ? $post->category->name : 'no category'}}</td>
                <td>
                    @forelse ($post->tags as $tag )
                    <span class="badge badge-success">{{$tag->name}}</span>
                    @empty
                    <span class="badge badge-danger">no tags</span>
                    @endforelse
                </td>
                <td class="d-flex">
                    <a href="{{route ('admin.posts.show', $post)}}" class="btn btn-primary">SHOW</a>
                    <a href="{{route ('admin.posts.edit', $post)}}" class="btn btn-warning mx-1">MODIFY</a>
                    <form action="{{route('admin.posts.destroy',$post)}}"
                    method="POST"
                    onsubmit="return confirm('Confermi di eliminare il Post {{ $post->nome }}?')">
                    @csrf
                    @method('DELETE')
                        <button type="sumbit" class="btn btn-danger">DELETE</button>
                    </form>
                </td>
              </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
