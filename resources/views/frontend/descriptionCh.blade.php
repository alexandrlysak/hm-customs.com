<div class="block-home main-content">
    <div class="container">
        <div class="circle">
            <img class='logo-circle' src="{{ asset('images/logo-circle.png') }}">
            <p class='mail'><a href="mailto:mail@mail.com">customs@hm-customs.com</a></p>
            <p class="info">050010，哈薩克斯坦，阿拉木圖，聖。 Tole bi 23 A，哈薩克斯坦共和國</p>
            <p class="steps">5個簡單的步驟</p>
            <p class="call"><a href="#callback" class="popup">在網站上申請或致電</a></p>
            <p class="step-1"><a href="#callback" class="popup">達成協議</a></p>
            <!--noindex-->
            <p class="step-2"><a rel="nofollow" href="{{ asset('quality-check') }}">質量檢查</a></p>
            <p class="step-3"><a rel="nofollow" href="{{ asset('delivery') }}">貨物交付</a></p>
            <p class="step-4"><a rel="nofollow" href="{{ asset('customs-clearance-add') }}">海關服務</a></p>
            <p class="step-5"><a rel="nofollow" href="{{ asset('warehouses') }}">送貨到倉庫</a></p>
        </div>
    </div>
</div>
<div class="block-about-2 content">
    <div class="container">
        <!--
        <h2 class="heading">Мы сделаем ваш товар дешевле!</h2>
        <p class="descr">| Мы знаем как сэкономить на логистике и ВЭД |</p>
        <div class="grid item-wrap">
            <div class="span-3 column"><img src="{{ asset('images/plus-01.png') }}">
                <p>Скорость доставки<br> вы выбираете сами</p></div>
            <div class="span-3 column"><img src="{{ asset('images/plus-02.png') }}">
                <p>Выпуск таможенной<br> декларации от 3х часов</p></div>
            <div class="span-3 column"><img src="{{ asset('images/plus-03.png') }}">
                <p>Предоставление всех документов (ГТД, СФ, АКТЫ, Подтверждающие документы от агентов)</p></div>
            <div class="span-3 column"><img src="{{ asset('images/plus-04.png') }}">
                <p>Предоставление страхового полиса на товары до 30 млн. руб.</p></div>
        </div>

        <div class="grid certificate">

            <div class="span-6 column">
                
                <p>Нашей компанией получен сертификат ISO 9001, что подтверждает качество наших услуг по доставке и таможенному оформлению грузов из Китая/ Кореи</p>
                <div class="wrap-cert">
                    <a href="{{ asset('images/iso9001-1.pdf') }}"><img src="{{ asset('images/iso9001-1-600-min.jpg') }}"></a>
                    <a href="{{ asset('images/iso9001-2.pdf') }}"><img src="{{ asset('images/iso9001-2-600-min.jpg') }}"></a>
                </div>
           
            </div>
            
            <div class="span-6 column"><p>Компания «СТИМШИП» прошла регистрацию в международном идентификаторе
                юридических лиц «Интерфакс» и Dun & Bradstreet (NYSE: DNB). «Знак доверия» дает возможность всем
                контрагентам убедиться в корректной информации о нас. Это подтверждение деловой репутации компании как
                прозрачной и понятной.</p>
                <div style='text-align:center'></div>
            </div>
        </div>
    -->
        <h2 class="heading">您可以從我們這裡訂購</h2>
        <div class="grid item-wrap">
            <div class="span-2 column">
                <a href="{{ asset('import-export-medicines') }}"><img src="{{ asset('images/order1.png') }}"></a>
                <p>進出口藥品</p>
            </div>
            <div class="span-2 column">
                <a href="{{ asset('customs-clearance-biosamples') }}"><img src="{{ asset('images/order2.png') }}"></a>
                <p>生物樣本的清關</p>
            </div>
            <div class="span-2 column">
                <a href="{{ asset('customs-clearance-medicines') }}"><img src="{{ asset('images/order3.png') }}"></a>
                <p>海關清關藥品</p>
            </div>
            <div class="span-2 column">
                <a href="{{ asset('customs-clearance-clinical') }}"><img src="{{ asset('images/order4.png') }}"></a>
                <p>海關清關臨床試驗材料</p>
            </div>
            <div class="span-2 column">
                <a href="{{ asset('customs-clearance-dangers') }}"><img src="{{ asset('images/order5.png') }}"></a>
                <p>海關清關危險品</p>
            </div>
        
        </div>
        
        @include('frontend.sections.subLayout.footerFormCh')


    </div>
</div>