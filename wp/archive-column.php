<?php
// カテゴリの取得
$args = array(
  'taxonomy' => 'column_category',
);
$taxonomy = get_terms($args);
?>
<?php get_header(); ?>

<div id="container" class="arc-column">

  <div class="breadcrumb">
    <ul class="breadcrumb-list">
      <li><a href="<a href=" <?php echo esc_url(home_url()); ?>">産業用IoTのことならamnimo</a></li>
      <li>コラム</li>
    </ul>
  </div>
  <!-- .breadcrumb -->

  <section class="hero03 core">
    <div class="containers">
      <div class="hero03__box">
        <h1 class="ttl-primary-lower cW">コラム</h1>
        <div class="lead cW">IoTや監視カメラシステム、AI、ゲートウェイ、ルーターなどに関する<br>幅広い知識をまとめてご紹介します。</div>
      </div>
    </div>
  </section>

  <section>
    <div class="containers">
      <div class="search">
        <form method="get" action="" class="search__form">
          <input name="s" class="search__input" type="search" placeholder="キーワードから探す">
          <input type="hidden" name="post_type" value="column">
          <button accesskey="f" class="search__btn" type="submit"><img src="<?php echo assets_path() ?>img/common/icon-search.svg"></button>
        </form>
      </div>
      <?php if (!empty($taxonomy)) : ?>
        <div class="flex gap10 jcC inherit">
          <?php foreach ($taxonomy as $category) : ?>
            <a href="<?php echo esc_url(get_term_link($category)); ?>" class="cat bgW"><?php echo esc_html($category->name); ?></a>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>
    </div>
  </section>
  <?php
  $args = array(
    'post_type' => 'column',
    'posts_per_page' => 2,
    'orderby' => 'post_date',
    'order' => 'DESC',


  );
  $my_query = new WP_Query($args);
  ?>
  <?php if ($my_query->have_posts()) : ?>
    <section class="latest">
      <div class="containers">
        <h2 class="ttl-secondary">最新コラム</h2>
        <div class="flex gap30">
          <?php
          while ($my_query->have_posts()) : $my_query->the_post();
            $post_id = get_the_ID();
            $post_terms = get_the_terms($post_id, 'column_category');
            $post_id_arr[] = $post_id;
          ?>
            <a href="<?php the_permalink(); ?>" class="flex item">
              <h3 class="item__ttl"><?php the_title(); ?></h3>
              <div class="item__img"><?php the_post_thumbnail(); ?></div>
              <div class="item__box">
                <div class="item__box--cat">
                  <?php if ($post_terms) : ?>
                    <?php foreach ($post_terms as $post_term) : ?>
                      <span class="cat"><?php echo esc_html($post_term->name); ?></span>
                    <?php endforeach; ?>
                  <?php endif; ?>
                </div>
                <div class="item__box--txt"><?php echo wp_kses(CFS()->get('lead'), $allowed_html); ?></div>
              </div>
            </a>
          <?php endwhile; ?>


        </div>
      </div>
    </section>
  <?php endif; ?>
  <section class="grid">
    <div class="containers">
      <?php
      $paged = get_query_var('paged') ? get_query_var('paged') : 1;
      $args = array(
        'posts_per_page' => 12,
        'post_type' => 'column',
        'paged' => $paged,
        'order' => 'DESC',
        'orderby' => 'post_date',
        'post_status' => 'publish',
        'post__not_in' => $post_id_arr,
      );
      $the_query = new WP_Query($args);
      if ($the_query->have_posts()) :
      ?>
        <div class="flex gap30 grid">
          <?php while ($the_query->have_posts()) : $the_query->the_post();
            $post_id = get_the_ID();
            $post_terms = get_the_terms($post_id, 'column_category');
          ?>
            <a href="<?php the_permalink(); ?>" class="grid__card">
              <div class="grid__card--img"><?php the_post_thumbnail(); ?></div>
              <div class="flex fS grid__card--cat">
                <?php if ($post_terms) : ?>
                  <?php foreach ($post_terms as $post_term) : ?>
                    <span class="cat"><?php echo esc_html($post_term->name); ?></span>
                  <?php endforeach; ?>
                <?php endif; ?>
              </div>
              <h3 class="grid__card--ttl"><?php the_title(); ?></h3>
              <div class="grid__card--time"><time class="time"><?php echo get_the_date('Y.m.d', $post_id); ?></time></div>
            </a>
          <?php endwhile; ?>
        </div>
        <?php
        $GLOBALS['wp_query']->max_num_pages = $the_query->max_num_pages;
        the_posts_pagination(array(
          'mid_size' => 1,
          'prev_text' => '<span></span>',
          'next_text' => '<span></span>'
        ));
        wp_reset_postdata();
        ?>
        <!-- <nav class="pagination">
          <div class="nav-links">
            <a class="prev page-numbers" href="#"><span></span></a>
            <a class="page-numbers" href="#">1</a>
            <span class="page-numbers current">2</span>
            <a class="page-numbers" href="#">3</a>
            <a class="page-numbers" href="#">4</a>
            <a class="page-numbers" href="#">5</a>
            <a class="next page-numbers" href="#"><span></span></a>
          </div>
        </nav> -->
      <?php endif; ?>

    </div>
  </section>

  <section class="material">
    <div class="containers">
      <h2 class="ttl-secondary cW">お役立ち資料</h2>
      <div class="flex aiC jcC desc">
        <figure class="desc__img"><img src="<?php echo assets_path() ?>img/common/img-wp.png" alt=""></figure>
        <summary class="desc__box">
          <h3 class="desc__box--ttl">IoTや監視カメラシステム、AI、ゲートウェイ、ルーターなどに関する幅広い知識をまとめてた資料が無料でダウンロードできます。</h3>
          <a href="/whitepaper/" class="more">ホワイトペーパーをみる</a>
        </summary>
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

  <section class="relation">
    <div class="containers">
      <h2 class="ttl-secondary">関連サービス</h2>
      <div class="flex gap20">
        <a href="#" class="item">
          <figure class="item__img"><img src="<?php echo assets_path() ?>img/common/img-relation01.jpg" alt=""></figure>
          <h3 class="item__ttl">エッジゲートウェイ（屋内版）</h3>
          <div class="item__txt">厳しい環境下でも安定稼働。様々な産業で利用可能なLTE通信機能搭載</div>
        </a>
        <a href="#" class="item">
          <figure class="item__img"><img src="<?php echo assets_path() ?>img/common/img-relation02.jpg" alt=""></figure>
          <h3 class="item__ttl">IoT Router（屋内版）</h3>
          <div class="item__txt">IoT機器からのインターネット通信を可能にするルーター。汎用性が高く、設置場所を選ばない小型軽量タイプ</div>
        </a>
        <a href="#" class="item">
          <figure class="item__img"><img src="<?php echo assets_path() ?>img/common/img-relation03.jpg" alt=""></figure>
          <h3 class="item__ttl">デバイス管理システム</h3>
          <div class="item__txt">エッジゲートウェイ及びIoTルーターとクラウドアプリケーションを連携させるシステム</div>
        </a>
      </div>
    </div>
  </section>




</div>
<!--container-->

<?php get_footer(); ?>