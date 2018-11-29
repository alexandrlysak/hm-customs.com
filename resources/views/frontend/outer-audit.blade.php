@extends('frontend.layouts.subLayout')

@section('content')

<div class="block-home main-content">
    <div class="container">
        {!! $pageData->content !!}
        
        @switch($locale)
            @case('ru')
                @include('frontend.sections.subLayout.footerFormRu')
                @break

            @case('en')
                @include('frontend.sections.subLayout.footerFormEn')
                @break

            @case('ch')
                @include('frontend.sections.subLayout.footerFormCh')
                @break

            @case('kz')
                @include('frontend.sections.subLayout.footerFormKz')
                @break

            @default
                @include('frontend.sections.subLayout.footerFormEn')
                @break
        @endswitch
    </div>
</div>

@stop