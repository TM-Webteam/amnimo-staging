<?php
// カテゴリの取得
$args = array(
  'taxonomy' => 'news_category',
);
$taxonomy = get_terms($args);
?>
<?php get_header(); ?>

<div id="container" class="arc-news">

  <div class="breadcrumb">
    <ul class="breadcrumb-list">
      <li><a href="<a href=" <?php echo esc_url(home_url()); ?>">産業用IoTのことならamnimo</a></li>
      <li><a href="<?php echo esc_url(home_url()); ?>/news
      /">ニュース</a></li>
      <li><?php esc_html(single_cat_title()); ?></li>
    </ul>
  </div>
  <!-- .breadcrumb -->


  <div class="news-block">
    <h3 class="block-title"><span><?php esc_html(single_cat_title()); ?>に関するニュース</span></h3>

    <div class="wrap">
      <div class="sort-box">
        <a href="<?php echo esc_url(home_url()); ?>/news/" class="sort-btn">
          <span class="all">ALL</span>
        </a>
        <?php if (!empty($taxonomy)) : ?>
          <div class="btn-wrap">
            <?php foreach ($taxonomy as $category) :
              $active = "";
              if ($term == $category->slug) {
                $active = " active";
              }
            ?>
              <a href="<?php echo esc_url(get_term_link($category)); ?>" class="sort-btn<?php echo $active; ?>">
                <span class="info"><?php echo esc_html($category->name); ?></span>
              </a>
            <?php endforeach; ?>
          </div>
        <?php endif; ?>
      </div>
      <?php
      $queried_object = get_queried_object();
      $term_id = esc_html($queried_object->term_id);
      $paged = get_query_var('paged') ? get_query_var('paged') : 1;
      $args = array(
        'posts_per_page' => 10,
        'post_type' => 'news',
        'paged' => $paged,
        'order' => 'DESC',
        'orderby' => 'post_date',
        'post_status' => 'publish',
        'tax_query'  => array(
          'relation'  => 'AND',
          array(
            'taxonomy' => 'news_category',
            'field' => 'term_id',
            'terms' => array($term_id),
            'operator' => 'IN',
          ),
        ),
      );
      $the_query = new WP_Query($args);
      if ($the_query->have_posts()) :
      ?>
        <ul class="news-list">
          <?php
          while ($the_query->have_posts()) : $the_query->the_post();
            $post_id = get_the_ID();
            $post_terms = get_the_terms($post_id, 'news_category');
            foreach ($post_terms as $post_term) {
              $news_slug = $post_term->slug;
            }
            $url = esc_url(CFS()->get('url'));
          ?>
            <li class="<?php echo esc_html($news_slug); ?>">
              <?php if (!empty($url)) : ?>
                <a href="<?php echo $url; ?>" target="_blank">
                <?php else : ?>
                  <a href="<?php the_permalink(); ?>">
                  <?php endif; ?>
                  <span class="type"></span>
                  <p class="txt-box">
                    <span class="date"><?php echo get_the_date('Y.m.d', $post_id); ?></span>
                    <span class="ttl"><?php the_title(); ?></span>
                  </p>
                  </a>
            </li>
          <?php endwhile; ?>
        </ul>

        <?php
        $GLOBALS['wp_query']->max_num_pages = $the_query->max_num_pages;
        the_posts_pagination(array(
          'mid_size' => 1,
          'prev_text' => '<span></span>',
          'next_text' => '<span></span>'
        ));
        wp_reset_postdata();
        ?>
      <?php endif; ?>
    </div>
  </div>
  <!-- .news-block -->


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