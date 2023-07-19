<?php get_header(); ?>

<div id="container" class="arc-partners">

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
      <li class="current"><a href="<?php echo esc_url(home_url()); ?>/partners/">パートナー紹介</a></li>
      <li><a href="<?php echo esc_url(home_url()); ?>/interview/">パートナーの声</a></li>
    </ul>
  </div>
  <?php
  $args = array(
    'post_type' => 'partners',
    'posts_per_page' => -1,
    'order' => 'DESC',
    // 'post__not_in' => $p_id,
    'meta_key' => 'partners_type',
    'meta_value' => '1'
  );
  $my_query = new WP_Query($args);
  if ($my_query->have_posts()) :
  ?>
    <div class="partner-block">
      <div class="wrap">
        <div class="block-title"><span>ソリューションパートナー（50音順）</span>
        </div>
        <p class="lead-txt sp-b60">アムニモのIoTデバイスやクラウドサービスを活用したソリューションの販売、<br>システムインテグレーション、保守、アプリ開発等を行う会社です。
        </p>
        <div class="partner-list">
          <?php
          while ($my_query->have_posts()) : $my_query->the_post();
          ?>
            <a class="post" href="<?php the_permalink(); ?>">
              <dl>
                <dt>
                  <picture class="ph-box">
                    <?php the_post_thumbnail(); ?>
                  </picture>
                </dt>
                <dd>
                  <div class="head"><?php the_title(); ?></div>
                  <?php echo wp_kses(CFS()->get('lead'), $allowed_html); ?>
                </dd>
              </dl>
            </a>
          <?php endwhile; ?>
        </div><!-- /.partner-list -->
      </div>
    </div>
  <?php endif; ?>

  <div class="partner-block">
    <?php
    $args = array(
      'post_type' => 'partners',
      'posts_per_page' => -1,
      'order' => 'DESC',
      // 'post__not_in' => $p_id,
      'meta_key' => 'partners_type',
      'meta_value' => '3'
    );
    $my_query = new WP_Query($args);
    if ($my_query->have_posts()) :
    ?>
      <div class="wrap">
        <div class="block-title"><span>ECサイト（50音順）</span>
        </div>
        <p class="lead-txt sp-b60">アムニモの商品が以下のサイトでもお買い求めいただけます。
        </p>
        <div class="partner-list">
          <?php
          while ($my_query->have_posts()) : $my_query->the_post();
          ?>
            <a class="post" href="<?php echo esc_url(CFS()->get('url')); ?>" target="_blank">
              <dl>
                <dt>
                  <picture class="ph-box">
                    <?php the_post_thumbnail(); ?>
                  </picture>
                </dt>
                <dd>
                  <div class="head"><?php the_title(); ?></div>
                  <?php echo wp_kses(CFS()->get('lead'), $allowed_html); ?>
                </dd>
              </dl>
            </a>
          <?php endwhile; ?>

        </div><!-- /.partner-list -->
      </div>
  </div>
<?php endif; ?>

<div class="partner-block">
  <?php
  $args = array(
    'post_type' => 'partners',
    'posts_per_page' => -1,
    'order' => 'DESC',
    // 'post__not_in' => $p_id,
    'meta_key' => 'partners_type',
    'meta_value' => '2'
  );
  $my_query = new WP_Query($args);
  if ($my_query->have_posts()) :
  ?>
    <div class="wrap">
      <div class="block-title"><span>キャリアパートナー（50音順）</span>
      </div>
      <p class="lead-txt sp-b60">アムニモのIoTデバイスと接続実績のある通信サービス提供会社です。
      </p>
      <div class="partner-list">
        <?php
        while ($my_query->have_posts()) : $my_query->the_post();
        ?>
          <a class="post" href="<?php echo esc_url(CFS()->get('url')); ?>" target="_blank">
            <dl>
              <dt>
                <picture class="ph-box">
                  <?php the_post_thumbnail(); ?>
                </picture>
              </dt>
              <dd>
                <div class="head"><?php the_title(); ?></div>
                <?php echo wp_kses(CFS()->get('lead'), $allowed_html); ?>
              </dd>
            </dl>
          </a>
        <?php endwhile; ?>

      </div><!-- /.partner-list -->
    </div>
  <?php endif; ?>



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