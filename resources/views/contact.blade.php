@extends('layouts.app', ['title' => 'Contact'])
@section('content')
    @include('layouts.navbar')
    <x-alert>
        @slot('title', 'Alert Contact')
        <div>
            ini adalah Contact
        </div>
    </x-alert>
@endsection