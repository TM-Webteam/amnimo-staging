<?php
$post_id = $post->ID;
$taxonomy_slug = "news_category";
$post_terms = get_the_terms($post_id, $taxonomy_slug);
?>
<?php get_header(); ?>

<div id="container" class="sng-news">

  <div class="breadcrumb">
    <ul class="breadcrumb-list">
      <li><a href="<?php echo esc_url(home_url()); ?>">産業用IoTのことならamnimo</a></li>
      <li><a href="<?php echo esc_url(home_url()); ?>/news/">ニュース</a></li>
      <li><?php echo strip_tags(get_the_title()); ?></li>
    </ul>
  </div>
  <!-- .breadcrumb -->

  <section class="news-cont cont-a">
    <div class="containers">

      <div class="news-wrap">
        <div class="news-head">
          <?php if ($post_terms) : ?>
            <?php foreach ($post_terms as $post_term) : ?>
              <div class="news-type"><?php echo esc_html($post_term->name); ?></div>
            <?php endforeach; ?>
          <?php endif; ?>
          <div class="date"><?php echo get_the_date('Y.m.d', $post_id); ?></div>
          <h2 class="news-ttl"><?php the_title(); ?></h2>
        </div>
        <div class="news-body">
          <div class="section">
            <?php //echo wp_kses(CFS()->get('comment'), $allowed_html); 
            ?>
            <?php echo CFS()->get('comment'); ?>
          </div>
        </div>
        <div class="link-btn"><a href="<?php echo esc_url(home_url()); ?>/news/">ニューストップ</a></div>

      </div>

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