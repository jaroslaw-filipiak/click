var captchaLoaded = false;

jQuery(function($) {
    $( document ).ready(function() {
        $('.wpcf7-form input').on('focus', function() {
            if (captchaLoaded) {
                return;
            }

            console.log('reCAPTCHA script loading.');

            var $this = $(this);

            var recaptchaScript = document.createElement('script');
            var cf7script = document.createElement('script');

            recaptchaScript.type = 'text/javascript';
            recaptchaScript.src = 'https://www.google.com/recaptcha/api.js?render=' + click5_recaptcha.sitekey + '&#038;ver=3.0';

            document.body.appendChild(recaptchaScript);

            // cf7script.type = 'text/javascript';
            // cf7script.text = "grecaptcha.ready(function() { grecaptcha.execute('" + click5_recaptcha.sitekey + "', {action:'homepage'}).then(function(token){ $this.closest('.wpcf7').find('.form-submit').prepend('<input type=\"hidden\" name=\"g-recaptcha-response\" value=\"' + token + '\">');});});";

            setTimeout(function() {
                // document.body.appendChild(cf7script);
                grecaptcha.ready(function() {
                    grecaptcha.execute(click5_recaptcha.sitekey, {action: 'homepage'}).then(function(token) {
                        $('.wpcf7 .form-submit').prepend('<input type=\"hidden\" name=\"g-recaptcha-response\" value=\"' + token + '\">');
                    });
                    
                    setInterval(function(){
                        grecaptcha.execute(click5_recaptcha.sitekey, {action: 'homepage'}).then(function(token) {
                            $('.wpcf7 .form-submit input[name="g-recaptcha-response"]').val(token);
                        });
                    }, 30000);
                });
            }, 500);

            captchaLoaded = true;
        });
    });
});