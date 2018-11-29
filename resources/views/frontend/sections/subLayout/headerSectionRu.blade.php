<header>
    <div class="container top-header">
        
        <div class="grid">
            <div class="span-2 column left">
                <a class='hom' href="/"><img src="{{ asset('images/header-logo.png') }}" alt=""></a>
            </div>
            <div class="span-8 column center">
                
                <!--<div class="wrap-phone msk"> 8 (123) 456-78-90<br> Минск<br> ПН-ПТ 09:00-17:00</div>-->

                <!--<div class="wrap-phone main"> 050010, РК, г. Алматы, <br>ул. Толе би, 23 А<br>Республика Казахстан</div>-->
                
                
                <div class="wrap-phone main">
                    <!--<p><b>8 (800) 707-96-53</b><br> <span>Контакты</span></p>-->
                    <!--WhatsApp: <a class="subheader-whatsapp" title="WhatsApp" href="whatsapp://send?phone=+77088644481">+7 (708) 86-44-481</a> | <a class="subheader-whatsapp" href="javascript:void(0);">29-479011</a><hr>
                    <a href="mailto:customs@hm-customs.com">customs@hm-customs.com</a><br>
                    -->
                </div>

                <!--<div class="wrap-phone msk">Алматы<br> ПН-ПТ 08:00-18:00</div>-->
                
            </div>
        </div>

        @if ($languages)
            <!--noindex-->
            <div class="language">
                @foreach ($languages as $lang)
                    <a rel="nofollow" href="{{ asset('/language/'.$lang->alpha2_code) }}"><img src="{{ asset('images/'.$lang->flag_url) }}"></a> 
                @endforeach
            </div>
            <!--/noindex-->
        @endif
        
        <div id="menu-icon"></div>
    </div>
    
    @include('frontend.sections.menuHeaderRu')


</header>