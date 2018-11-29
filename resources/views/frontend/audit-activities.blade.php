@extends('frontend.layouts.mainLayout')

@section('content')

    @switch($locale)
        @case('ru')
            @include('frontend.audit-activitiesRu')
            @break

        @case('en')
            @include('frontend.audit-activitiesEn')
            @break

        @case('ch')
            @include('frontend.audit-activitiesCh')
            @break

        @case('kz')
            @include('frontend.audit-activitiesKz')
            @break

        @default
            @include('frontend.audit-activitiesEn')
            @break
    @endswitch

@stop