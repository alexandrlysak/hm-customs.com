@extends('frontend.layouts.subLayout')

@section('content')


<div class="block-home main-content">
    <div class="container">
        <div class="align-center">
            <img src="http://www.hm-customs.com/images/order1.png">
        </div>
        {!! $pageData->content !!}
        
        @include('frontend.sections.subLayout.footerFormKz')
    </div>
</div>

@stop