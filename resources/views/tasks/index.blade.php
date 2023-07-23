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
            <li style="margin-bottom: 10px;">
                {{$task->list}}
                <div>
                    <a href="/tasks/{{$task->id}}/edit">Edit</a>
                    <form action="/tasks/{{$task->id}}" method="post" style="display: inline; margin-left: 5px">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete">
                    </form>
                </div>
            </li>
        @endforeach
    </ol>
</x-app-layout>