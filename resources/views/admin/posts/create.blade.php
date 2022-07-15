@extends('layouts.app')

@section('content')

<div class="container">
    <h2>Crea il nuovo Post</h2>
    <form action="{{route('admin.posts.store')}}"
    method="POST">
    @csrf

        <div class="form-group">
          <label for="title" class="form-label">Titolo</label>
          <input type="input"
          class="form-control"
          id="title"
          name="title"
          placeholder="Inserisci il Titolo">
        </div>

        <div class="form-group">
          <label for="title" class="form-label">Descrizione</label>
          <textarea
          class="form-control"
          id="description"
          name="description"
          placeholder="Inserisci una breve Descrizione"
          >
          </textarea>
        </div>

        <div class="form-group">
            <label for="category" class="form-label">Inserisci la categoria:</label>
            <select
            class="form-select d-block"
            name="category_id">
                <option value="">Scegli una categoria</option>
                @foreach ($categories as $category )
                   <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-check">
            <label for="tag">Spunta i tag del post:</label>
            @foreach ( $tags as $tag )
                <div class="d-block">
                    <input
                    type="checkbox"
                    class="form-check-input"
                    id="tag{{$loop->iteration}}"
                    name="tags[]"
                    value="{{$tag->id}}">
                    <label
                    class="form-check-label"
                    for="tag{{$loop->iteration}}">
                      {{$tag->name}}
                    </label>
                </div>
            @endforeach
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

      </form>
</div>

@endsection
