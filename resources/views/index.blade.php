@extends('layouts.app')

@section('title', 'List of task')

@section('content')
@forelse($tasks as $task)
    <ul>
        <li>
            <a href="{{ route('tasks.show', ['task'=>$task->id]) }}">{{ $task->title }}</a>
            <a href="{{ route('tasks.edit', ['task'=>$task->id]) }}">Edit</a>
        </li>
    </ul>

@empty
    <p>No List</p>
@endforelse
@endsection
