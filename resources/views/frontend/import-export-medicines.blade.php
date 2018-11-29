@extends('frontend.layouts.subLayout')

@section('content')

@switch($locale)
        @case('ru')
            @include('frontend.import-export-medicinesRu')
            @break

        @case('en')
            @include('frontend.import-export-medicinesEn')
            @break

        @case('ch')
            @include('frontend.import-export-medicinesCh')
            @break

        @case('kz')
            @include('frontend.import-export-medicinesKz')
            @break

        @default
            @include('frontend.import-export-medicinesEn')
            @break
    @endswitch

@stop

