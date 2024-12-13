@extends('layouts.app')

@section('title', 'List of task')

@section('content')
    <nav class="mb-4">
        <a href="{{ route('tasks.create') }}" class="link">Add Task!</a>
    </nav>
@forelse($tasks as $task)
    <ul>
        <li>
            <a href="{{ route('tasks.show', ['task' => $task->id]) }}"
               @class(['line-through' => $task->completed])>{{ $task->title }}
            </a>
        </li>
    </ul>
@empty
    <p>No List</p>
@endforelse
    @if($tasks->count())
    <nav class="mt-4">
        {{ $tasks->links() }}
    </nav>
    @endif
@endsection
