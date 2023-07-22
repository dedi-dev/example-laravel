@extends('layouts.app', ['title' => 'Profile'])
@section('content')
    @include('layouts.navbar')
    <x-alert>
        @slot('title', 'Alert Profile')
        <div>
            ini adalah Profile
        </div>
    </x-alert>
@endsection