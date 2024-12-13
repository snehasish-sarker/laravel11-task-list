@extends('layouts.app')

@section('title', $task->title)

@section('content')
<p>{{ $task->description }}</p>
@if ($task->long_description)
    <p>{{ $task->long_description }}</p>
@endif
<p>{{ $task->created_at }}</p>
<p>{{ $task->updated_at }}</p>
<a href="{{ route('tasks.edit', ['task'=>$task]) }}">Edit</a>
<form action="{{ route('tasks.destroy', ['task'=>$task]) }}" method="post">
    @csrf
    @method('DELETE')
    <button type="submit">
        Delete
    </button>
</form>
@endsection
