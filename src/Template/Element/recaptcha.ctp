<?= $this->Html->script('https://www.google.com/recaptcha/api.js?hl=' . $recaptcha['lang']. '&onload=CaptchaCallback&render=explicit') ?>
<script type="text/javascript">
var CaptchaCallback = function() {
	var el = document.getElementsByClassName('g-recaptcha');
    for (var i = 0; i < el.length; i++)
        grecaptcha.render(el[i], {'sitekey' : '<?= $recaptcha['sitekey'] ?>'});
};
</script>

<div
    class="g-recaptcha"
    data-sitekey="<?= $recaptcha['sitekey'] ?>"
    data-theme="<?= $recaptcha['theme'] ?>"
    data-type="<?= $recaptcha['type'] ?>"
    data-size="<?= $recaptcha['size'] ?>"
    <?php if (isset($recaptcha['callback']) && empty($recaptcha['callback'])): ?>
    data-callback="<?= $recaptcha['callback'] ?>"
    <?php endif; ?>
    <?php if (strtolower($recaptcha['size']) == 'invisible' && !empty($recaptcha['badge'])): ?>
    data-badge="<?= $recaptcha['badge'] ?>"
    <?php endif ?>
    async defer>
</div>
<noscript>
  <div>
    <div style="width: 302px; height: 422px; position: relative;">
      <div style="width: 302px; height: 422px; position: absolute;">
        <iframe src="https://www.google.com/recaptcha/api/fallback?k=<?= $recaptcha['sitekey'] ?>"
                frameborder="0" scrolling="no"
                style="width: 302px; height:422px; border-style: none;">
        </iframe>
      </div>
    </div>
    <div style="width: 300px; height: 60px; border-style: none;
                   bottom: 12px; left: 25px; margin: 0px; padding: 0px; right: 25px;
                   background: #f9f9f9; border: 1px solid #c1c1c1; border-radius: 3px;">
      <textarea id="g-recaptcha-response" name="g-recaptcha-response"
                   class="g-recaptcha-response"
                   style="width: 250px; height: 40px; border: 1px solid #c1c1c1;
                          margin: 10px 25px; padding: 0px; resize: none;" >
      </textarea>
    </div>
  </div>
</noscript>
