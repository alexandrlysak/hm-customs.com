@extends('frontend.layouts.mainLayout')

@section('content')

    @switch($locale)
        @case('ru')
            @include('frontend.quality-assurance-servicesRu')
            @break

        @case('en')
            @include('frontend.quality-assurance-servicesEn')
            @break

        @case('ch')
            @include('frontend.quality-assurance-servicesCh')
            @break

        @case('kz')
            @include('frontend.quality-assurance-servicesKz')
            @break

        @default
            @include('frontend.quality-assurance-servicesEn')
            @break
    @endswitch

@stop