<section class="section_footer uk-section uk-section-secondary">
  <div class="uk-container uk-container-large">
    <div class="uk-grid-column-large uk-grid-row-large uk-flex uk-flex-top" uk-grid>

      <div class="uk-width-1@s uk-width-1-3@m">
        <div>
          <?php if (has_custom_logo()) : ?>
            <?php the_custom_logo(); ?>
          <?php else : ?>
            <a href="<?php echo home_url('/') ?>">
              <p class="site-title"><?php bloginfo('title') ?></p>
              <span><?php bloginfo('description') ?></span>
            </a>
          <?php endif; ?>
        </div>
        <div>
          <p>Rua Antonio Alves Filho, 63<br />
          Centro, Belo Vale - MG<br />
          CEP - 35473-000</p>
        </div>

      </div>

      <div class="uk-link-heading uk-width-1@s uk-width-1-3@m uk-flex-column uk-grid-row-small">
        <h4>Menu</h4>
        <p><a class="" href="#">Link 1</a></p>
        <p><a class="" href="#">Link 2</a></p>
        <p><a class="" href="#">Link 3</a></p>
        <p><a class="" href="#">Link 4</a></p>
      </div>

      <div class="uk-link-heading uk-width-1@s uk-width-1-3@m uk-flex-column uk-grid-row-small">
        <h4>Localização</h4>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1869.6886054478825!2d-44.02651309425464!3d-20.408552739260248!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa149a66682416f%3A0xc2640a3179715d75!2sContabilidade%20Agil%C3%AD%20Ltda!5e0!3m2!1spt-BR!2sbr!4v1678812164678!5m2!1spt-BR!2sbr" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>

    </div>
  </div>
</section>
<!-- copytight bottom bar -->
<section class="section_copy uk-section  uk-section-xsmall uk-section-secondary">
  <div class="uk-container uk-container-large">

    <hr>
    <div class="uk-grid-column-small uk-grid-row-small" uk-grid>
      <div class="uk-width-1@s uk-width-3-4@m">
        <div class="uk-align-center uk-align-left@s uk-text-center uk-text-left@s">
          <p>© 2023 | AGILI Solução Inteligente - Todos os Direitos Reservados - Desenvolvido por Everest Design</p>
        </div>
      </div>

      <div class="uk-width-1@s uk-width-1-4@m">
        <div class="uk-grid-small uk-flex-center uk-flex-right@m uk-text-center uk-link-heading" uk-grid>

          <div>
            <div class="">
              <a class="uk-icon" href="https://www.instagram.com/contabilidade_agili/" title="Seguir no Facebook" target="_blank">
                <span class="uk-icon-button" uk-icon="instagram"></span>
              </a>
            </div>
          </div>
          <div>
            <div class="">
              <a class="uk-icon" href="https://www.facebook.com/contabilidadeagili" title="Seguir no Twitter" target="_blank">
                <span class="uk-icon-button" uk-icon="facebook"></span>
              </a>
            </div>
          </div>
          <!-- <div>
            <div class="">
              <a class="uk-icon" href="https://www.facebook.com/contabilidadeagili" title="Seguir no LinkedIn" target="_blank">
                <span class="uk-icon-button"   uk-icon="linkedin"></span>
              </a>
            </div>
          </div> -->
        </div>

      </div>
    </div>
  </div>
</section>




<!-- OffCanvas Menu -->
<?php get_template_part('offcanvas-menu'); ?>
<!-- start script links -->
<?php wp_footer(); ?>
</body>

</html>