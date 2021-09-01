@extends('layout.app')

@section('bold_text')
Create new Todo !!!
@endsection

@section('content')
    @include('messages.error')
    <form action="/Todo" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <input type="text" class="form-control" id="content" name="content">
        </div>
        <div class="mb-3">
            <label for="due" class="form-label">Due</label>
            <select id="due" name="due" class="form-select form-select-sm" aria-label=".form-select-sm example">
                <option disabled selected >Open this select menu</option>
                <option value="Sunday">Sunday</option>
                <option value="Monday">Monday</option>
                <option value="Tuesday">Tuesday</option>
                <option value="Wednesday">Wednesday</option>
                <option value="Thursday">Thursday</option>
                <option value="Friday">Friday</option>
                <option value="Saturday">Saturday</option>
            </select>       
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
