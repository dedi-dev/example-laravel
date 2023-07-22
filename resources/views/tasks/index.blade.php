<x-app-layout title="Tasks">
    <ol>
        @foreach ($tasks as $task )
            <li>{{$task->list}}</li>
        @endforeach
    </ol>
</x-app-layout>