@extends('frontend.layouts.subLayout')

@section('content')

    @switch($locale)
        @case('ru')
            @include('frontend.customs-clearance-clinicalRu')
            @break

        @case('en')
            @include('frontend.customs-clearance-clinicalEn')
            @break

        @case('ch')
            @include('frontend.customs-clearance-clinicalCh')
            @break

        @case('kz')
            @include('frontend.customs-clearance-clinicalKz')
            @break

        @default
            @include('frontend.customs-clearance-clinicalEn')
            @break
    @endswitch

@stop