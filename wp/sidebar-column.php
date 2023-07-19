<?php
global $right_wp_bnr;
?>
<!-- サイドメニュー -->
<aside class="side-nav">

  <div class="search">
    <form action="" method="get" class="search__form">
      <input name="s" class="search__input" type="search" placeholder="キーワードから探す">
      <input type="hidden" name="post_type" value="column">
      <button class="search__btn" type="submit"><img src="<?php echo assets_path() ?>img/common/icon-search.svg"></button>
    </form>
  </div>
  <?php
  $args = array(
    'taxonomy' => 'column_category',
  );
  $taxonomy = get_terms($args);
  ?>
  <?php if (!empty($taxonomy)) : ?>
    <div class="catSearch">
      <h3 class="ttl-tertiary">カテゴリで探す</h3>
      <ul class="catSearch__list">
        <?php
        foreach ($taxonomy as $category) :
        ?>
          <li><a href="<?php echo esc_url(get_term_link($category)); ?>"><?php echo esc_html($category->name); ?></a></li>
        <?php
        endforeach;
        ?>
      </ul>
    </div>
  <?php endif; ?>

  <div class="blogList">
    <h3 class="ttl-tertiary">よく読まれている記事</h3>
    <?php
    // views post metaで記事のPV情報を取得する
    setPostViews(get_the_ID());


    $args = array(
      'post_type' => 'column',
      'meta_key' => 'post_views_count',
      'orderby' => 'meta_value_num',
      'order' => 'DESC',
      'posts_per_page' => 5 // ← 5件取得
    );

    // WP_Queryによるループ
    $query = new WP_Query($args);
    if ($query->have_posts()) :
      while ($query->have_posts()) :
        $query->the_post();
    ?>
        <a href="<?php the_permalink(); ?>" class="flex aiC inherit item">
          <div class="item__img"><?php the_post_thumbnail(); ?></div>
          <div class="item__ttl"><?php the_title(); ?></div>
        </a>
    <?php
      endwhile;
    endif;
    wp_reset_postdata();
    ?>

  </div>

  <a href="/contact/" class="bnr-contact"><img src="<?php echo assets_path() ?>img/common/bnr-contact.png" alt=""></a>
  <?php
  if (!empty($right_wp_bnr)) :
  ?>
    <?php foreach ($right_wp_bnr as $val_bnr) : ?>
      <a href="<?php echo get_permalink($val_bnr); ?>" class="bnr-catalog"><img src="<?php echo esc_url(CFS()->get('right_bnr', $val_bnr)); ?>" alt="<?php echo get_the_title($val_bnr); ?>"></a>
    <?php endforeach; ?>
  <?php else : ?>
    <a href="/whitepaper/" class="bnr-catalog"><img src="<?php echo assets_path() ?>img/common/bnr-catalog.png" alt=""></a>
  <?php endif; ?>
</aside>