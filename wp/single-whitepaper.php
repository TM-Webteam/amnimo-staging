<?php get_header(); ?>


<div id="container" class="sng-whitepaper">

  <div class="breadcrumb">
    <ul class="breadcrumb-list">
      <li><a href="<?php echo esc_url(home_url()); ?>">産業用IoTのことならamnimo</a></li>
      <li><a href="<?php echo esc_url(home_url()); ?>/whitepaper/">お役立ち資料</a></li>
      <li><?php echo strip_tags(get_the_title()); ?></li>
    </ul>
  </div>
  <!-- .breadcrumb -->

  <section class="">
    <div class="containers flex">

      <!-- 資料紹介 -->
      <article class="sub-conts article">

        <div class="article__wrap">

          <h1 class="article__ttl"><?php the_title(); ?></h1>

          <!-- 資料のスライダー -->
          <div class="wp-slick">
            <div id="wp-slick">
              <figure><?php the_post_thumbnail(); ?></figure>
            </div>
          </div>


          <h2 class="article__desc"><?php echo wp_kses(CFS()->get('lead'), $allowed_html); ?></h2>

        </div>


        <?php $paragraph_arr = CFS()->get('paragraph'); ?>
        <?php if ($paragraph_arr) : ?>
          <div class="article__toc">
            <h2 class="article__toc--ttl">本資料の目次</h2>
            <div class="article__toc--list">
              <?php foreach ($paragraph_arr as $paragraph) : ?>
                <dl>
                  <dt>
                    <h3><?php echo esc_html(strip_tags($paragraph['title'])) ?></h3>
                  </dt>
                  <?php if ($paragraph['caption']) : ?>
                    <dd>
                      <ul>
                        <?php foreach ((array)$paragraph['caption'] as $caption) : ?>
                          <li>
                            <h4><?php echo esc_html(strip_tags($caption['caption_title'])) ?></h4>
                          </li>
                        <?php endforeach; ?>
                      </ul>
                    </dd>
                  <?php endif; ?>
                </dl>
              <?php endforeach; ?>
            </div>
          </div>
        <?php endif; ?>
      </article>

      <!-- サイドメニュー -->
      <aside class="side-form" id="form_tit">
        <div id="frame_div">
          <script type="text/javascript">
            var K3_acct = "amnimo";
            var K3_campcode = "<?php echo CFS()->get('form_id'); ?>";
            var K3_width = "auto";
            var K3_height = "auto";
          </script>
          <script type="text/javascript" src="https://amo.amnimo.com/form/embed/"></script>
        </div>
      </aside>

    </div>
  </section>








</div>
<!--container-->

<?php get_footer(); ?>