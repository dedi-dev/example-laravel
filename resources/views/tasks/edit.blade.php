<x-app-layout title="Tasks Edit">
    <h1>Edit Task</h1>
    <div>
        <form action="{{route('tasks.update', $task->id)}}" method="post">
            @method('put')
            @csrf
            <input type="text" name="list" value="{{$task->list}}">
            <input type="submit" value="Update">
        </form>
    </div>
</x-app-layout>