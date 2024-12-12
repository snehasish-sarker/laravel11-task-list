@extends('layouts.app')

@section('title', 'List of task')

@section('content')
@forelse($tasks as $task)
    <ul>
        <li>
            <a href="{{ route('tasks.show', ['id'=>$task->id]) }}">{{ $task->title }}</a>
        </li>
    </ul>

@empty
    <p>No List</p>
@endforelse
@endsection
