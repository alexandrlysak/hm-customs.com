<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script> <![endif]-->
    
    <title>HM | {{ $pageData->meta_title }}</title>
    <meta name="description" content="{{ $pageData->meta_description }}"/>

    @include('frontend.sections.subLayout.css')
</head>


<body data-rsssl=1 class="page-template page-template-page-about page-template-page-about-php page page-id-4">

	@switch($locale)
        @case('ru')
            @include('frontend.sections.subLayout.headerSectionRu')
            @yield('content')
            {{--@include('frontend.sections.subLayout.footerSectionRu')--}}
            @include('frontend.sections.popupFormRu')
            @break

        @case('en')
            @include('frontend.sections.subLayout.headerSectionEn')
            @yield('content')
            {{--@include('frontend.sections.subLayout.footerSectionEn')--}}
            @include('frontend.sections.popupFormEn')
            @break

        @case('ch')
            @include('frontend.sections.subLayout.headerSectionCh')
            @yield('content')
            {{--@include('frontend.sections.subLayout.footerSectionCh')--}}
            @include('frontend.sections.popupFormCh')
            @break

        @case('kz')
            @include('frontend.sections.subLayout.headerSectionKz')
            @yield('content')
            {{--@include('frontend.sections.subLayout.footerSectionKz')--}}
            @include('frontend.sections.popupFormKz')
            @break

        @default
            @include('frontend.sections.subLayout.headerSectionEn')
            @yield('content')
            {{--@include('frontend.sections.subLayout.footerSectionEn')--}}
            @include('frontend.sections.popupFormEn')
            @break
    @endswitch

@include('frontend.sections.subLayout.scripts')

<!--
  <a href="skype:skype_login?call" id="popup__toggle" onclick="return false;">
        <div class="circlephone" style="transform-origin: center;"></div>
        <div class="circle-fill" style="transform-origin: center;"></div>
        <div class="img-circle" style="transform-origin: center;">
            <div class="img-circleblock" style="transform-origin: center;"></div>
        </div>
  </a>
-->

</body>
</html>