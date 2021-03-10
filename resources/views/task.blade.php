{{-- <x-layout>
    <x-slot name="title">
        task title
    </x-slot>
    task
</x-layout> --}}
{{-- <x-package-input></x-input> --}}

@extends('layout.my_template_layout')
@section('title', 'task title')

@section('sidebar')
    <style>
        .red_p{
            color: red;
        }
    </style>
    <p class="red_p">this is appedned to the master sidebar</p>
@endsection

@section('content')
    <p>this is my body content</p>
@endsection

@push('li_1')
    this is li_1
@endpush
@push('li_1')
    this is li_2
@endpush
@prepend('li_1')
    this is li_3
@endprepend