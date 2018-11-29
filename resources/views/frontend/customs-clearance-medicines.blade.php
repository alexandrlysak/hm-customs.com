@extends('frontend.layouts.subLayout')

@section('content')

    @switch($locale)
        @case('ru')
            @include('frontend.customs-clearance-medicinesRu')
            @break

        @case('en')
            @include('frontend.customs-clearance-medicinesEn')
            @break

        @case('ch')
            @include('frontend.customs-clearance-medicinesCh')
            @break

        @case('kz')
            @include('frontend.customs-clearance-medicinesKz')
            @break

        @default
            @include('frontend.customs-clearance-medicinesEn')
            @break
    @endswitch

@stop