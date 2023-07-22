@extends('layouts.app', ['title' => 'About'])
@section('content')
    @include('layouts.navbar')
    <x-alert>
        @slot('title', 'Alert About')
        <div>
            ini adalah About
        </div>
    </x-alert>
@endsection