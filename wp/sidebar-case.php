<?php
global $right_wp_bnr;
?>
<!-- サイドメニュー -->
<aside class="side-nav">
  <div class="search">
    <form action="" method="get" class="search__form">
      <input name="s" class="search__input" type="search" placeholder="キーワードから探す">
      <input type="hidden" name="post_type" value="case">
      <button class="search__btn" type="submit"><img src="<?php echo assets_path() ?>img/common/icon-search.svg"></button>
    </form>
  </div>
  <?php
  $args = array(
    'taxonomy' => 'case_category',
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