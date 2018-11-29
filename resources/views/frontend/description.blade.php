@extends('frontend.layouts.subLayout')

@section('content')

    @switch($locale)
        @case('ru')
            @include('frontend.descriptionRu')
            @break

        @case('en')
            @include('frontend.descriptionEn')
            @break

        @case('ch')
            @include('frontend.descriptionCh')
            @break

        @case('kz')
            @include('frontend.descriptionKz')
            @break

        @default
            @include('frontend.descriptionEn')
            @break
    @endswitch
    
@stop