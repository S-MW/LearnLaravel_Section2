@extends('layout.app')

    @section('bold_text')
    Todo List
    @endsection

    @section('content')

    @include('messages.success')
    
        @foreach($todoList as $todo)
        <div class="card m-2 p-2">
            <h1><a href="Todo/{{$todo->id}}">{{$todo->title}}</a></h1>
            <p>{{$todo->due}}</p>
        </div>
        @endforeach
        
    @endsection