@extends('layout.app')

@section('bold_text')
Edit the todo
@endsection

@section('content')
    @include('messages.error')
    <form action="/Todo/{{$todo->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{$todo->title}}">
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <input type="text" class="form-control" id="content" name="content"  value="{{$todo->content}}">
        </div>
        <div class="mb-3">
            <label for="due" class="form-label">Due</label>
            <select id="due" name="due" class="form-select form-select-sm" aria-label=".form-select-sm example">
                <option disabled selected >Open this select menu</option>
                <option value="Sunday" @if($todo->due == 'Sunday') selected @endif >Sunday</option>
                <option value="Monday" @if($todo->due == 'Monday') selected @endif>Monday</option>
                <option value="Tuesday"@if($todo->due == 'Tuesday') selected @endif>Tuesday</option>
                <option value="Wednesday"@if($todo->due == 'Wednesday') selected @endif>Wednesday</option>
                <option value="Thursday"@if($todo->due == 'Thursday') selected @endif>Thursday</option>
                <option value="Friday"@if($todo->due == 'Friday') selected @endif>Friday</option>
                <option value="Saturday"@if($todo->due == 'Saturday') selected @endif>Saturday</option>
            </select>       
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection