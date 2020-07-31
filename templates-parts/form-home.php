<div class="form-block">
    <div class="conteiner">
    <?php if (get_locale() == 'ar') {
            echo do_shortcode('[contact-form-7 id="423" title="Contact form_arabic"]');
          } else {
                echo do_shortcode('[contact-form-7 id="5" title="Contact form"]');
            }
    ?>       
    </div>
</div>