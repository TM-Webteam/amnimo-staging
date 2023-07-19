<?php get_header(); ?>

<div id="container" class="sng-interview">

  <div class="breadcrumb">
    <ul class="breadcrumb-list">
      <li><a href="<?php echo esc_url(home_url()); ?>">産業用IoTのことならamnimo</a></li>
      <li><a href="<?php echo esc_url(home_url()); ?>/interview/">パートナーの声</a></li>
      <li><?php echo strip_tags(get_the_title()); ?></li>
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

  <div class="partner-block interview detail">

    <div class="innerwidth">
      <div class="head-area">
        <h3>“<?php echo wp_kses(CFS()->get('lead'), $allowed_html); ?>”</h3>
        <p class="name"><?php echo wp_kses(CFS()->get('company_name'), $allowed_html); ?></p><!-- /.align-r name -->
        <div class="topimg">
          <img src="<?php echo esc_url(CFS()->get('detail_image')); ?>" alt="<?php echo strip_tags(get_the_title()); ?>">
        </div><!-- /.topimg -->
      </div><!-- /.head-area -->
    </div><!-- /.innerwidth -->
    <?php $paragraph_arr = CFS()->get('paragraph'); ?>
    <?php if ($paragraph_arr) : ?>
      <div class="cont-area innerwidth bg-white">
        <?php foreach ($paragraph_arr as $paragraph) : ?>
          <h4><?php echo wp_kses($paragraph['title'], $allowed_html); ?></h4>
          <?php echo $paragraph['comment']; ?>
        <?php endforeach; ?>
      <?php endif; ?>
      <div class="link-btn"><a href="/partners/interview/">パートナーの声トップ</a></div>

      </div><!-- .innerwidth -->

  </div>

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