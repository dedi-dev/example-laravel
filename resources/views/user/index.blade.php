<x-app-layout title="Users">
    @foreach ($users as $index => $user)
        <a href="{{route('user.show', $user)}}">
            <div>
                {{$index + 1}} - {{$user->name}}
            </div>
        </a>
    @endforeach
</x-app-layout>