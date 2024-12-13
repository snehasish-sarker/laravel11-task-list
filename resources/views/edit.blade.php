@extends('layouts.app')
@section('title', 'Edit Task')
@section('styles')
    <style>
        .error-message {
            color: red;
            font-size: 0.8rem;
        }
    </style>
@endsection
@section('content')
    <form method="POST" action="{{ route('tasks.update', ['task'=>$task->id]) }}">
        @csrf
        @method('put')
        <div>
            <label for="title">
                Title
            </label>
            <input text="text" name="title" id="title" value="{{$task->title}}" />
            @error('title')
            <div class="error-message"> {{ $message }} </div>
            @enderror

        </div>
        <div>
            <label for="description">Description</label>
            <textarea name="description" id="description" rows="5">{{$task->description}}</textarea>
            @error('description')
            <div class="error-message"> {{ $message }} </div>
            @enderror
        </div>
        <div>
            <label for="long_description">Long Description</label>
            <textarea name="long_description" id="long_description" rows="10">{{$task->long_description}}</textarea>
            @error('long_description')
            <div class="error-message"> {{ $message }} </div>
            @enderror
        </div>
        <div>
            <button type="submit">Edit Task</button>
        </div>
    </form>
@endsection
