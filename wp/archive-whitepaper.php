<?php
// カテゴリの取得
$args = array(
  'taxonomy' => 'whitepaper_category',
);
$taxonomy = get_terms($args);
?>
<?php get_header(); ?>

<div id="container" class="arc-whitepaper">

  <div class="breadcrumb">
    <ul class="breadcrumb-list">
      <li><a href="<?php echo esc_url(home_url()); ?>">産業用IoTのことならamnimo</a></li>
      <li>お役立ち資料</li>
    </ul>
  </div>
  <!-- .breadcrumb -->

  <section class="hero03 core">
    <div class="containers">
      <div class="hero03__box">
        <h1 class="ttl-primary-lower cW">お役立ち資料</h1>
        <div class="lead cW">IoTや監視カメラシステム、AI、ゲートウェイ、ルーターなどに関する幅広い知識を<br>まとめてた資料が無料でダウンロードできます。</div>
      </div>
    </div>
  </section>

  <section class="anc">
    <div class="containers">
      <ul class="flex jcC gap30 inherit anc__box">
        <li><a href="#secWhitepaper">ホワイトペーパー</a></li>
        <li><a href="#secProduct">製品・サービス資料</a></li>
        <li><a href="#secCase">導入事例・利用シーン資料</a></li>
      </ul>
    </div>
  </section>

  <section>
    <div class="containers">
      <div class="search">
        <form method="get" action="" class="search__form">
          <input name="s" class="search__input" type="search" placeholder="キーワードから探す">
          <input type="hidden" name="post_type" value="whitepaper">
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
    'post_type' => 'whitepaper',
    'posts_per_page' => 3,
    'order' => 'DESC',

    'meta_key' => 'recommend_flg',
    'meta_value' => '1'
  );
  $my_query = new WP_Query($args);
  ?>
  <?php if ($my_query->have_posts()) : ?>
    <section class="relation-doc bg-G">
      <div class="containers">
        <h2 class="ttl-secondary">おすすめ資料</h2>
        <div class="flex gap30 card">
          <?php
          while ($my_query->have_posts()) : $my_query->the_post();
            $post_id = get_the_ID();
            $post_terms = get_the_terms($post_id, 'whitepaper_category');
            $p_id[] = get_the_ID();
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
      </div>
    </section>
  <?php endif; ?>

  <section id="secWhitepaper" class="relation-doc">
    <div class="containers">
      <h2 class="ttl-secondary">ホワイトペーパー</h2>
      <div class="flex gap30 card">
        <?php
        $args = array(
          'post_type' => 'whitepaper',
          'posts_per_page' => -1,
          'order' => 'DESC',
          // 'post__not_in' => $p_id,
          'meta_key' => 'whitepaper_type',
          'meta_value' => '1'
        );
        $my_query = new WP_Query($args);
        if ($my_query->have_posts()) :
        ?>
          <?php
          while ($my_query->have_posts()) : $my_query->the_post();
            $post_id = get_the_ID();
            $post_terms = get_the_terms($post_id, 'whitepaper_category');
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
        <?php endif; ?>
      </div>
    </div>
  </section>

  <section id="secProduct" class="relation-doc">
    <div class="containers pt0">
      <h2 class="ttl-secondary">製品・サービス資料</h2>
      <div class="flex gap30 card">
        <?php
        $args = array(
          'post_type' => 'whitepaper',
          'posts_per_page' => -1,
          'order' => 'DESC',
          // 'post__not_in' => $p_id,
          'meta_key' => 'whitepaper_type',
          'meta_value' => '2'
        );
        $my_query = new WP_Query($args);
        if ($my_query->have_posts()) :
        ?>
          <?php
          while ($my_query->have_posts()) : $my_query->the_post();
            $post_id = get_the_ID();
            $post_terms = get_the_terms($post_id, 'whitepaper_category');
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
        <?php endif; ?>
      </div>
    </div>
  </section>

  <section id="secCase" class="relation-doc">
    <div class="containers pt0">
      <h2 class="ttl-secondary">導入事例・利用シーン資料</h2>
      <div class="flex gap30 card">
        <?php
        $args = array(
          'post_type' => 'whitepaper',
          'posts_per_page' => -1,
          'order' => 'DESC',
          // 'post__not_in' => $p_id,
          'meta_key' => 'whitepaper_type',
          'meta_value' => '3'
        );
        $my_query = new WP_Query($args);
        if ($my_query->have_posts()) :
        ?>
          <?php
          while ($my_query->have_posts()) : $my_query->the_post();
            $post_id = get_the_ID();
            $post_terms = get_the_terms($post_id, 'whitepaper_category');
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
        <?php endif; ?>
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