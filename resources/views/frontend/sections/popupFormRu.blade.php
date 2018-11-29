<div class='popup-form' id="callback">
    <div class="wrap-form">
        <div role="form" class="wpcf7" id="wpcf7-f75-o1" lang="ru-RU" dir="ltr">
            <div class="screen-reader-response"></div>
            <form id="callbackForm">
            	@csrf
                <h3>Обратная связь</h3>
                
                <p>
                	<span class="wpcf7-form-control-wrap text-606">
                		<input type="text" name="title" value="" size="40" class="wpcf7-form-control wpcf7-text" placeholder="Имя/Название компании" autocomplete="off" required>
                	</span>
                </p>

                <p>
                	<span class="wpcf7-form-control-wrap tel-287">
                		<input type="text" name="email" value="" size="40" class="wpcf7-form-control wpcf7-text" placeholder="E-mail" autocomplete="off" required>
                	</span>
                </p>

                <p>
                	<span class="wpcf7-form-control-wrap text-606">
                		<textarea name="message" placeholder="Текст сообщения" autocomplete="off" required></textarea>
                	</span>
                </p>

                <p><input type="submit" value="Отправить" class="wpcf7-form-control wpcf7-submit" onclick="sendManagerMessage();"></p>
                
                <div class="wpcf7-response-output wpcf7-display-none"></div>
            </form>
        </div>
    </div>
</div>