@extends('frontend.layouts.subLayout')

@section('content')

    @switch($locale)
        @case('ru')
            @include('frontend.customs-clearance-biosamplesRu')
            @break

        @case('en')
            @include('frontend.customs-clearance-biosamplesEn')
            @break

        @case('ch')
            @include('frontend.customs-clearance-biosamplesCh')
            @break

        @case('kz')
            @include('frontend.customs-clearance-biosamplesKz')
            @break

        @default
            @include('frontend.customs-clearance-biosamplesEn')
            @break
    @endswitch

@stop