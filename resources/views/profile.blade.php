<x-app-layout :title="$username ?? 'Profile'">
    @slot('styles')
    <style>
        body {
            background-color: pink;
        }
    </style>
    @endslot
    Ini {{$username ?? 'Profile'}} Page
    <h1>{{$post}}</h1>
</x-app-layout>