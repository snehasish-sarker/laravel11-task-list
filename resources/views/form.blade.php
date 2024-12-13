@section('title', isset($task) ? 'Edit Task' : 'Add Task')
@section('styles')
    <style>
        .error-message {
            color: red;
            font-size: 0.8rem;
        }
    </style>
@endsection
@section('content')
    <form method="POST" action="{{ isset($task) ? route('tasks.update', ['task'=>$task]) : route('tasks.store') }}">
        @csrf
        @isset($task)
            @method('PUT')
        @endisset
        <div class="mb-4">
            <label for="title">
                Title
            </label>
            <input text="text" name="title" id="title" value="{{ $task->title ?? old('title') }}"
            @class(['border-red-500'=>$errors->has('title')])
            />
            @error('title')
                <div class="error-message"> {{ $message }} </div>
            @enderror

        </div>
        <div class="mb-4" >
            <label for="description">Description</label>
            <textarea @class(['border-red-500'=>$errors->has('description')]) name="description" id="description" rows="5">{{ $task->description ?? old('description') }}</textarea>
            @error('description')
            <div class="error"> {{ $message }} </div>
            @enderror
        </div>
        <div class="mb-4">
            <label for="long_description">Long Description</label>
            <textarea @class(['border-red-500'=>$errors->has('long_description')]) name="long_description" id="long_description" rows="10">{{ $task->long_description ?? old('long_description') }}</textarea>
            @error('long_description')
            <div class="error"> {{ $message }} </div>
            @enderror
        </div>
        <div class="flex items-center gap-2">
            <button type="submit" class="btn">
                @if(isset($task))
                    Update Task
                @else
                    Create Task
                @endif
            </button>
            <a href="{{ route('tasks.index') }}" class="link">Cancel</a>
        </div>
    </form>
@endsection
