@extends('layout.app')

    @section('nav_bar') 
    Show List
    @endsection

    @section('content')
        <div class=" card bg-secondary text-center">
            <div>
            <a class="btn btn-outline-dark"   href="/">Go Back</a>
            <a class="btn btn-warning"        href="{{$todo->id}}/edit">Edit</a>
            <form method="POST" action="/Todo/{{$todo->id}}">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Delete</button>
            </form>
            </div>
            <h1>
                ID : {{$todo->id}} <br>
                Title :{{$todo->title}} <br>
                Content :{{$todo->content}} <br>
                Due :{{$todo->due}}
            </h1>
        </div>
    @endsection
