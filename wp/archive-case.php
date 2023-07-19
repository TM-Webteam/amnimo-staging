<?php
// カテゴリの取得
$args = array(
  'taxonomy' => 'case_category',
);
$taxonomy = get_terms($args);
?>
<?php get_header(); ?>

<div id="container" class="arc-case">

  <div class="breadcrumb">
    <ul class="breadcrumb-list">
      <li><a href="<?php echo esc_url(home_url()); ?>">産業用IoTのことならamnimo</a></li>
      <li>導入事例・利用シーン</li>
    </ul>
  </div>
  <!-- .breadcrumb -->

  <section class="hero03 core">
    <div class="containers">
      <div class="hero03__box">
        <h1 class="ttl-primary-lower cW">導入事例・利用シーン</h1>
      </div>
    </div>
  </section>

  <section class="anc">
    <div class="containers">
      <ul class="flex jcC gap60 inherit anc__box">
        <li><a href="#CaseStudy">導入事例</a></li>
        <li><a href="#UseScene">利用シーン</a></li>
      </ul>
    </div>
  </section>

  <section>
    <div class="containers">
      <div class="search">
        <form method="get" action="" class="search__form">
          <input name="s" class="search__input" type="search" placeholder="キーワードから探す">
          <input type="hidden" name="post_type" value="case">
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
    'post_type' => 'case',
    'posts_per_page' => -1,
    'order' => 'DESC',
    // 'post__not_in' => $p_id,
    'meta_key' => 'case_type',
    'meta_value' => '1'
  );
  $my_query = new WP_Query($args);
  if ($my_query->have_posts()) :
  ?>
    <section id="CaseStudy" class="group">
      <div class="containers">
        <h2 class="ttl-secondary">導入事例</h2>
        <div class="lead">実際にご導入いただいた実績・事例をご紹介します。</div>
        <div class="flex gap30">
          <?php
          while ($my_query->have_posts()) : $my_query->the_post();
            $post_id = get_the_ID();
            $post_terms = get_the_terms($post_id, 'case_category');
          ?>
            <a href="<?php the_permalink(); ?>" class="card">
              <figure class="card__img"><?php the_post_thumbnail(); ?></figure>
              <summary class="card__box">
                <div class="card__box--cat">
                  <?php if ($post_terms) : ?>
                    <?php foreach ($post_terms as $post_term) : ?>
                      <span class="cat"><?php echo esc_html($post_term->name); ?></span>
                    <?php endforeach; ?>
                  <?php endif; ?>
                </div>
                <h3 class="card__box--ttl"><?php the_title(); ?></h3>
                <div class="card__box--txt"><?php echo wp_kses(CFS()->get('lead'), $allowed_html); ?></div>
              </summary>
            </a>
          <?php endwhile; ?>

        </div>
      </div>
    </section>
  <?php endif; ?>
  <?php
  $args = array(
    'post_type' => 'case',
    'posts_per_page' => -1,
    'order' => 'DESC',
    // 'post__not_in' => $p_id,
    'meta_key' => 'case_type',
    'meta_value' => '2'
  );
  $my_query = new WP_Query($args);
  if ($my_query->have_posts()) :
  ?>
    <section id="UseScene" class="group">
      <div class="containers">
        <h2 class="ttl-secondary">利用シーン</h2>
        <div class="lead">アムニモの製品・サービスは様々な業種・産業分野で活用できます。</div>
        <div class="flex gap30">
          <?php
          while ($my_query->have_posts()) : $my_query->the_post();
            $post_id = get_the_ID();
            $post_terms = get_the_terms($post_id, 'case_category');
          ?>
            <a href="<?php the_permalink(); ?>" class="card">
              <figure class="card__img"><?php the_post_thumbnail(); ?></figure>
              <summary class="card__box">
                <div class="card__box--cat">
                  <?php if ($post_terms) : ?>
                    <?php foreach ($post_terms as $post_term) : ?>
                      <span class="cat"><?php echo esc_html($post_term->name); ?></span>
                    <?php endforeach; ?>
                  <?php endif; ?>
                </div>
                <h3 class="card__box--ttl"><?php the_title(); ?></h3>
                <div class="card__box--txt"><?php echo wp_kses(CFS()->get('lead'), $allowed_html); ?></div>
              </summary>
            </a>
          <?php endwhile; ?>

        </div>
      </div>
    </section>
  <?php endif; ?>

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