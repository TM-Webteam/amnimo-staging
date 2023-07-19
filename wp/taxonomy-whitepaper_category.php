<?php get_header(); ?>

<div id="container" class="tax-whitepaper">

  <div class="breadcrumb">
    <ul class="breadcrumb-list">
      <li><a href="/">産業用IoTのことならamnimo</a></li>
      <li><a href="<?php echo esc_url(home_url()); ?>/whitepaper/">お役立ち資料</a></li>
      <li><?php esc_html(single_cat_title()); ?></li>
    </ul>
  </div>
  <!-- .breadcrumb -->

  <section class="relation-doc">
    <div class="containers">
      <h2 class="ttl-secondary"><?php esc_html(single_cat_title()); ?></h2>
      <div class="relation-doc__lead"><?php echo category_description(); ?></div>
      <?php
      $queried_object = get_queried_object();
      $term_id = esc_html($queried_object->term_id);
      $paged = get_query_var('paged') ? get_query_var('paged') : 1;
      $args = array(
        'posts_per_page' => 12,
        'post_type' => 'whitepaper',
        'paged' => $paged,
        'order' => 'DESC',
        'orderby' => 'post_date',
        'post_status' => 'publish',
        'tax_query'  => array(
          'relation'  => 'AND',
          array(
            'taxonomy' => 'whitepaper_category',
            'field' => 'term_id',
            'terms' => array($term_id),
            'operator' => 'IN',
          ),
        ),
      );
      $the_query = new WP_Query($args);
      if ($the_query->have_posts()) :
      ?>
        <div class="flex gap30 card">
          <?php while ($the_query->have_posts()) : $the_query->the_post();
            $post_id = get_the_ID();
            $post_terms = get_the_terms($post_id, 'column_category');
          ?>
            <a href="<?php the_permalink(); ?>" class="card__box">
              <figure class="card__box--img"><?php the_post_thumbnail(); ?></figure>
              <div class="card__box--cat">
                <?php if ($post_terms) : ?>
                  <?php foreach ($post_terms as $post_term) : ?>
                    <span class="cat"><?php echo esc_html($post_term->name); ?></span>
                  <?php endforeach; ?>
                <?php endif; ?>
              </div>
              <h3 class="card__box--ttl"><?php the_title(); ?></h3>
              <div class="more small">ダウンロード</div>
            </a>
          <?php endwhile; ?>

        </div>
      <?php endif; ?>

      <?php
      $GLOBALS['wp_query']->max_num_pages = $the_query->max_num_pages;
      the_posts_pagination(array(
        'mid_size' => 1,
        'prev_text' => '<span></span>',
        'next_text' => '<span></span>'
      ));
      wp_reset_postdata();
      ?>

    </div>
  </section>


  <div class="contact-block" id="contact-block">
    <h3 class="ttl-secondary"><span>お問い合わせ</span></h3>
    <ul>
      <li class="btn green"><a href="https://support.amnimo.com/hc/ja/requests/new" class="form" target="_blank">お問い合わせ<span class="ib">フォーム</span></a></li>
      <li class="btn green"><a href="/contact/#doc" class="doc">資料ダウンロード<span class="f80">（無料）</span></a></li>
      <li class="btn green"><a href="https://amo.amnimo.com/form/estimate" target="_blank" class="quotation">お見積もり依頼</a></li>
    </ul>
  </div>

</div>
<!--container-->

<?php get_footer(); ?>