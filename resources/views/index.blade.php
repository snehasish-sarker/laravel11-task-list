@extends('layouts.app')

@section('title', 'List of task')

@section('content')
    <a href="{{ route('tasks.create') }}"> Create New Task</a>
@forelse($tasks as $task)
    <ul>
        <li>
            <a href="{{ route('tasks.show', ['task'=>$task->id]) }}">{{ $task->title }}</a>
            <a href="{{ route('tasks.edit', ['task'=>$task->id]) }}">Edit</a>
            <form action="{{ route('tasks.destroy', ['task'=>$task->id]) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit">
                    Delete
                </button>
            </form>
        </li>
    </ul>
@empty
    <p>No List</p>
@endforelse
    @if($tasks->count())
    <nav>
        {{ $tasks->links() }}
    </nav>
    @endif
@endsection
