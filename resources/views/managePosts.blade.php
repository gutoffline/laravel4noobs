@extends('templates.layout')
@section('content')
<h1>POSTS</h1>

<table class="table table-striped">
    @foreach ($posts as $post)
        <tr>
            <td>{{$post->id}}</td>
            <td>{{substr($post->title,0,25)}}</td>
            <td>{{$post->user->name}}</td>
            <td>{{$post->published ? 'Yes' : 'No'}}</td>
            <td>
                <a href="#" class="btn btn-warning">Edit</a>
                <a href="#" class="btn btn-danger">Delete</a>
            </td>
        </tr>
        
    @endforeach
</table>

{{ $posts->links('pagination::bootstrap-5') }}

<hr>
<form method="POST" action="{{url('/new-post')}}">
    @csrf
    Autor:
    <select id="author" name="user_id">
        @foreach ($users as $user)
            <option value="{{$user->id}}">{{$user->name}}</option>
        @endforeach
    </select>
    <br>
    Título<input name="title"> <br>
    Conteúdo<br><textarea name="content"></textarea>
    <br>
    Publicado
    <input type="checkbox" value="1" name="published">
    <br>
    <button type="submit">Salvar</button>
</form>


@endsection
