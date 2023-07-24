<x-app-layout :title="$user->username">
    <h1>
        {{$user->name}} <small>{{$user->username}}</small>
    </h1>
</x-app-layout>