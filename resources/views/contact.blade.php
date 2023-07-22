@extends('layouts.app', ['title' => 'Contact'])
@section('content')
    @include('layouts.navbar')
    <!-- <x-alert> -->
    @component('components.alert')
        @slot('title', 'Alert Contact')
        <div>
            ini adalah Contact
        </div> 
    @endcomponent
    <!-- </x-alert> -->
@endsection