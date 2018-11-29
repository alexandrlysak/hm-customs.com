<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script> <![endif]-->
    
    <title>HM | {{ $pageData->meta_title }}</title>
    <meta name="description" content="HM {{ $pageData->meta_description }}"/>

    @include('frontend.sections.mainLayout.css')
</head>
<body data-rsssl=1 class="home page-template page-template-page-home page-template-page-home-php page page-id-8 new-design">

    @switch($locale)
        @case('ru')
            @include('frontend.sections.mainLayout.headerSectionRu')
            @yield('content')
            @include('frontend.sections.mainLayout.footerSectionRu')
            @include('frontend.sections.popupFormRu')
            @break

        @case('en')
            @include('frontend.sections.mainLayout.headerSectionEn')
            @yield('content')
            @include('frontend.sections.mainLayout.footerSectionEn')
            @include('frontend.sections.popupFormEn')
            @break

        @case('ch')
            @include('frontend.sections.mainLayout.headerSectionCh')
            @yield('content')
            @include('frontend.sections.mainLayout.footerSectionCh')
            @include('frontend.sections.popupFormCh')
            @break

        @case('kz')
            @include('frontend.sections.mainLayout.headerSectionKz')
            @yield('content')
            @include('frontend.sections.mainLayout.footerSectionKz')
            @include('frontend.sections.popupFormKz')
            @break

        @default
            @include('frontend.sections.mainLayout.headerSectionEn')
            @yield('content')
            @include('frontend.sections.mainLayout.footerSectionEn')
            @include('frontend.sections.popupFormEn')
            @break
    @endswitch

    @include('frontend.sections.mainLayout.scripts')

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