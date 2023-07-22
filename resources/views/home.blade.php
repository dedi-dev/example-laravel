@extends('layouts.app', ['title' => 'Home'])
@section('content')
    @include('layouts.navbar')
    <x-alert>
        <!-- @slot('title', 'Alert Home') -->
        <x-slot name="title">
            Alert Home
        </x-slot>
        <div>
            ini adalah Home
        </div>
    </x-alert>
@endsection