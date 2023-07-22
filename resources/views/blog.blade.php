@extends('layouts.app', ['title' => 'Blog'])
@section('content')
    @include('layouts.navbar')
    <x-alert>
        @slot('title', 'Alert Blog')
        <div>
            ini adalah Blog
        </div>
    </x-alert>
@endsection