@extends('frontend.layouts.subLayout')

@section('content')
    @switch($locale)
        @case('ru')
            @include('frontend.customs-clearance-dangersRu')
            @break

        @case('en')
            @include('frontend.customs-clearance-dangersEn')
            @break

        @case('ch')
            @include('frontend.customs-clearance-dangersCh')
            @break

        @case('kz')
            @include('frontend.customs-clearance-dangersKz')
            @break

        @default
            @include('frontend.customs-clearance-dangersEn')
            @break
    @endswitch

@stop