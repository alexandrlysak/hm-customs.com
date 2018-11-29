<!DOCTYPE html>
<html lang="ru">

<head>
    <title>Seiken Dojo | Регистрация</title>
    <!-- META TAGS -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @include('frontend.layouts.css')
</head>

<body>

@include('frontend.layouts.sections.preloader')

@include('frontend.layouts.sections.leftMenu')

@include('frontend.layouts.sections.topBar')
@include('frontend.layouts.sections.headerTop')

@include('frontend.layouts.sections.login')

@include('frontend.layouts.sections.blogPosts')

@include('frontend.layouts.sections.sectionFooter')

@include('frontend.layouts.sections.footer')
{{--





@include('frontend.layouts.sections.headerAndBanner')

@include('frontend.layouts.sections.searchBox')

@include('frontend.layouts.sections.upcomingEvents')

@include('frontend.layouts.sections.champions')

@include('frontend.layouts.sections.pickASports')

{{-- 
@include('frontend.layouts.sections.events')

@include('frontend.layouts.sections.joinClub')

@include('frontend.layouts.sections.blogPosts')


@include('frontend.layouts.sections.sectionFooter')

@include('frontend.layouts.sections.footer')



--}}

@include('frontend.layouts.js')

</body>

</html>