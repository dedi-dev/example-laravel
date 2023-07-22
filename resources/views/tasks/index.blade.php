<x-app-layout title="Tasks">
    <h1>List Task</h1>
    <div>
        <form action="/tasks" method="post">
            @csrf
            <input type="text" name="list" placeholder="Add new task">
            <input type="submit" value="Add">
        </form>
    </div>
    <ol>
        @foreach ($tasks as $task )
            <li>{{$task->list}} - <a href="/tasks/{{$task->id}}/edit">Edit</a></li>
        @endforeach
    </ol>
</x-app-layout>