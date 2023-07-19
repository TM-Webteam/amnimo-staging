<?php get_header(); ?>

<div id="container" class="arc-interview">

  <div class="breadcrumb">
    <ul class="breadcrumb-list">
      <li><a href="<?php echo esc_url(home_url()); ?>">産業用IoTのことならamnimo</a></li>
      <li>パートナー紹介</li>
    </ul>
  </div>
  <!-- .breadcrumb -->

  <section class="hero03 core">
    <div class="containers">
      <div class="hero03__box">
        <h1 class="ttl-primary-lower cW">パートナー紹介</h1>
      </div>
    </div>
  </section>

  <div class="cate-nav">
    <ul>
      <li><a href="<?php echo esc_url(home_url()); ?>/partners/">パートナー紹介</a></li>
      <li class="current"><a href="<?php echo esc_url(home_url()); ?>/interview/">パートナーの声</a></li>
    </ul>
  </div>

  <div class="partner-block">
    <h3 class="block-title"><span>パートナーの声</span></h3>
    <div class="wrap">
      <?php
      $args = array(
        'post_type' => 'interview',
        'posts_per_page' => -1,
        'order' => 'DESC',
        // 'post__not_in' => $p_id,
      );
      $my_query = new WP_Query($args);
      if ($my_query->have_posts()) :
      ?>
        <ul class="partners-wrapper interview">
          <?php
          while ($my_query->have_posts()) : $my_query->the_post();
          ?>
            <li>
              <a href="<?php the_permalink(); ?>">
                <picture class="ph-box">
                  <?php the_post_thumbnail(); ?>
                </picture>
                <div class="txt-box">
                  <h4 class="ttl"><?php the_title(); ?></h4>
                  <div class="txt"><?php echo wp_kses(CFS()->get('lead'), $allowed_html); ?></div>
                </div>
              </a>
            </li>
          <?php endwhile; ?>
        </ul>
      <?php endif; ?>
    </div><!-- .wrap -->
    <div class="link-btn"><a href="<?php echo esc_url(home_url()); ?>/partners/">パートナートップ</a></div>
  </div><!-- .service-block -->

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