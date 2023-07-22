@extends('layouts.app', ['title' => 'Home'])
@section('content')
    @include('layouts.navbar')
    <x-alert>
        @slot('title', 'Alert Home')
        <div>
            ini adalah Home
        </div>
    </x-alert>
@endsection