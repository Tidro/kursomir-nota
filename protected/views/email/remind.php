<p style="text-align: center;">
    <img style="width:50%;"
         src="http://<?=Yii::app()->params["domain"]; ?>/i/logo.png" alt="XONR">
</p>
<p>
    Потеряли ключи? Они здесь: <br>
    <a href="<?=$token->url; ?>"
       style="padding:10px; background: #a1ff80; color: #005580; border-radius: 9px; display: inline-block;">
        <?=$token->url; ?></a>
    <br>
    И больше не теряйте.
</p>
<p>
    Если всё на месте, проигнорируйте это сообщение, — с вашим аккаунтом ничего не случится.
</p>
<p style="color: #777; font-style: italic;">
    P. S. Это письмо написано искусственным интеллектом, отвечать на него ненадо.
</p>
