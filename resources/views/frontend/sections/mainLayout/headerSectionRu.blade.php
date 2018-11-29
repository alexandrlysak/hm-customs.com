<header class='new-header'>
    <div class="container top-header">
        <div class="grid">
            
            <div class="span-3 column left">
            	<a class='hom' href="{{ asset('/') }}">
                    <img src="{{ asset('images/header-logo.png') }}" alt="Название компании">
                </a>
                
            </div>
            
            <div class="span-3 column main-phone">
                <!--<p class="email">E-Mail</p>
                <p><b><a href="mailto:customs@hm-customs.com">customs@hm-customs.com</a></b></p>-->
                <div class="one-block header-languages-selector">
                    <!--WhatsApp: <a title="WhatsApp" href="whatsapp://send?phone=+77088644481">+7 (708) 86-44-481</a> | <a href="javascript:void(0);">29-479011</a><hr>-->
                    @if ($languages)
                    <div class="language">
                        @foreach ($languages as $lang)
                        <a rel="nofollow" href="{{ asset('/language/'.$lang->alpha2_code) }}"><img src="{{ asset('images/'.$lang->flag_url) }}"></a> 
                        @endforeach
                    </div>
                    @endif
                </div>

                
                
            </div>
            <div class="span-3 column wrap-dop-phone">
                <div class="msk-phone">
                   <!-- <p class='city'>050010, РК, г. Алматы, ул. Толе би, 23 А Республика Казахстан</p>
                    <p>ПН-ПТ 08:00-18:00</p>
                    <p class="header-email"><a href="mailto:customs@hm-customs.com">customs@hm-customs.com</a></p>
                    -->
                </div>
            </div> 
            <!--noindex-->
            <div class="span-3 column wrap-callback"><a href="#callback" class="button popup">Запрос менеджеру</a></div>
            <!--/noindex-->
        </div>
        <div id="menu-icon">
            
        </div>
    </div>

    @include('frontend.sections.menuHeaderRu')


</header>
<div class="reset-fix"></div>