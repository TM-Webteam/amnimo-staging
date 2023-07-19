<?php get_header(); ?>

<div id="container" class="arc-case">

  <div class="breadcrumb">
    <ul class="breadcrumb-list">
      <li><a href="<?php echo esc_url(home_url()); ?>">産業用IoTのことならamnimo</a></li>
      <li><a href="<?php echo esc_url(home_url()); ?>/case/">導入事例・利用シーン</a></li>
      <li><?php esc_html(single_cat_title()); ?></li>
    </ul>
  </div>
  <!-- .breadcrumb -->

  <section class="">
    <div class="containers flex">

      <!-- タクソノミー -->
      <section class="main-conts article">

        <h1 class="article__ttl"><span><?php esc_html(single_cat_title()); ?></span>に関する導入事例・利用シーン</h1>

        <h2 class="article__lead"><?php echo category_description(); ?></h2>
        <?php
        $queried_object = get_queried_object();
        $term_id = esc_html($queried_object->term_id);
        $paged = get_query_var('paged') ? get_query_var('paged') : 1;
        $args = array(
          'posts_per_page' => 10,
          'post_type' => 'case',
          'paged' => $paged,
          'order' => 'DESC',
          'orderby' => 'post_date',
          'post_status' => 'publish',
          'tax_query'  => array(
            'relation'  => 'AND',
            array(
              'taxonomy' => 'case_category',
              'field' => 'term_id',
              'terms' => array($term_id),
              'operator' => 'IN',
            ),
          ),
        );
        $the_query = new WP_Query($args);
        if ($the_query->have_posts()) :
        ?>
          <div class="article__wrap">
            <?php
            while ($the_query->have_posts()) : $the_query->the_post();
              $post_id = get_the_ID();
              $post_terms = get_the_terms($post_id, 'case_category');
            ?>
              <a href="<?php the_permalink(); ?>" class="flex item">
                <figure class="item__img"><?php the_post_thumbnail(); ?></figure>
                <summary class="item__box">
                  <h2 class="item__box--ttl"><?php the_title(); ?></h2>
                  <div class="flex fS aiC gap10 item__box--row">
                    <span class="time"><?php echo get_the_date('Y.m.d', $post_id); ?></span>
                    <?php if ($post_terms) : ?>
                      <?php foreach ($post_terms as $post_term) : ?>
                        <span class="cat"><?php echo esc_html($post_term->name); ?></span>
                      <?php endforeach; ?>
                    <?php endif; ?>
                  </div>
                </summary>
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

      </section>

      <?php get_sidebar('case'); ?>

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