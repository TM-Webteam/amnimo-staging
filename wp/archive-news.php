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
      <li>導入事例・利用シーン</li>
    </ul>
  </div>
  <!-- .breadcrumb -->
  <?php
  $paged = get_query_var('paged') ? get_query_var('paged') : 1;
  $args = array(
    'posts_per_page' => -1,
    'post_type' => 'news',
    'paged' => $paged,
    'order' => 'DESC',
    'orderby' => 'post_date',
    'post_status' => 'publish',
    'meta_key' => 'mv_flg',
    'meta_value' => '1'
  );
  $my_query = new WP_Query($args);
  if ($my_query->have_posts()) :
  ?>
    <div class="mv-block">
      <div class="slide-wrap">
        <ul class="mv-slider">
          <?php
          while ($my_query->have_posts()) : $my_query->the_post();
            $post_id = get_the_ID();
            $post_terms = get_the_terms($post_id, 'news_category');
            foreach ($post_terms as $post_term) {
              $news_slug = $post_term->name;
            }
            $url = esc_url(CFS()->get('url'));
          ?>
            <li>
              <?php if (!empty($url)) : ?>
                <a href="<?php echo $url; ?>" target="_blank">
                <?php else : ?>
                  <a href="<?php the_permalink(); ?>">
                  <?php endif; ?>
                  <?php the_post_thumbnail(); ?>
                  <p class="news-type"><span><?php echo $news_slug; ?></span></p>
                  <p class="txt"><?php the_title(); ?></p>
                  </a>
            </li>
          <?php endwhile; ?>

        </ul>
      </div>
    </div>
    <!-- .mv-block -->
  <?php endif; ?>

  <div class="news-block">
    <h3 class="block-title"><span>ニュース</span></h3>

    <div class="wrap">
      <div class="sort-box">
        <p class="sort-btn active"><span class="all">ALL</span></p>
        <?php if (!empty($taxonomy)) : ?>
          <div class="btn-wrap">
            <?php foreach ($taxonomy as $category) : ?>
              <a href="<?php echo esc_url(get_term_link($category)); ?>" class="sort-btn">
                <span class="info"><?php echo esc_html($category->name); ?></span>
              </a>
            <?php endforeach; ?>
          </div>
        <?php endif; ?>
      </div>
      <!-- <div class="sort-box">
        <p class="sort-btn active"><span class="all">ALL</span></p>
        <div class="btn-wrap">
          <p class="sort-btn"><span class="info">お知らせ</span></p>
          <p class="sort-btn"><span class="pressrelease">プレスリリース</span></p>
          <p class="sort-btn"><span class="report">イベント・セミナー</span></p>
          <p class="sort-btn"><span class="media">メディア掲載</span></p>
        </div>
      </div> -->
      <?php
      $paged = get_query_var('paged') ? get_query_var('paged') : 1;
      $args = array(
        'posts_per_page' => 10,
        'post_type' => 'news',
        'paged' => $paged,
        'order' => 'DESC',
        'orderby' => 'post_date',
        'post_status' => 'publish',
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