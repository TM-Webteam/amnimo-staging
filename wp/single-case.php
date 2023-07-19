<?php
global $right_wp_bnr;
$post_id = $post->ID;
$taxonomy_slug = "case_category";
$post_terms = get_the_terms($post_id, $taxonomy_slug);
$case_type_arr = CFS()->get('case_type');
foreach ((array)$case_type_arr as $key => $val) {
  $case_type = $key;
}
$rec_wp = CFS()->get('rec_wp');
$rec_case = CFS()->get('rec_case');
$right_wp_bnr = CFS()->get('right_wp_bnr');
?>
<?php get_header(); ?>

<div id="container" class="sng-case">

  <div class="breadcrumb">
    <ul class="breadcrumb-list">
      <li><a href="<?php echo esc_url(home_url()); ?>">産業用IoTのことならamnimo</a></li>
      <li><a href="<?php echo esc_url(home_url()); ?>/case/">導入事例・利用シーン</a></li>
      <li><?php echo strip_tags(get_the_title()); ?></li>
    </ul>
  </div>
  <!-- .breadcrumb -->

  <section class="">
    <div class="containers flex">

      <!-- 投稿記事詳細メイン -->
      <article class="main-conts single">

        <div class="single__cat">
          <?php if ($post_terms) : ?>
            <?php foreach ($post_terms as $post_term) : ?>
              <span class="cat"><?php echo esc_html($post_term->name); ?></span>
            <?php endforeach; ?>
          <?php endif; ?>
        </div>

        <h1 class="single__h1"><?php the_title(); ?></h1>

        <div class="single__lead"><?php echo CFS()->get('sub_title'); ?>
          <?php if (!empty(CFS()->get('company_name'))) : ?>
            <small>— <?php echo esc_html(CFS()->get('company_name')); ?> —</small>
          <?php endif; ?>
        </div>

        <div class="single__img">
          <img src="<?php echo esc_url(CFS()->get('main_image')); ?>" alt="">
        </div>

        <?php if ($case_type == "1") : ?>


          <div class="flex gap20">
            <div class="single__cat"><span class="cat">業界</span>　<?php echo esc_html(CFS()->get('industry')); ?></div>
            <div class="single__cat"><span class="cat">製品</span>　<?php echo esc_html(CFS()->get('product')); ?></div>
          </div>

          <div class="flex fS aiC">
            <div class="single__cat"><span class="cat">使用用途</span></div>
            <div class="single__txt"><?php echo esc_html(CFS()->get('usage')); ?></div>
          </div>


          <?php $paragraph_arr = CFS()->get('effect'); ?>
          <?php if (!empty($paragraph_arr)) : ?>
            <dl class="single__dl">
              <dt>課題</dt>
              <dd>
                <ul>
                  <?php foreach ($paragraph_arr as $paragraph) : ?>
                    <li><?php echo $paragraph['content']; ?></li>
                  <?php endforeach; ?>
                </ul>
              </dd>
            </dl>
          <?php endif; ?>
          <?php $paragraph_arr = CFS()->get('task'); ?>
          <?php if (!empty($paragraph_arr)) : ?>
            <dl class="single__dl">
              <dt>導入の効果</dt>
              <dd>
                <ul>
                  <?php foreach ($paragraph_arr as $paragraph) : ?>
                    <li><?php echo $paragraph['content']; ?></li>
                  <?php endforeach; ?>
                </ul>
              </dd>
            </dl>
          <?php endif; ?>
        <?php endif; ?>
        <?php $paragraph_arr = CFS()->get('paragraph'); ?>
        <?php if (!empty($paragraph_arr)) : ?>
          <?php foreach ($paragraph_arr as $paragraph) : ?>
            <?php if (!empty($paragraph['title'])) : ?>
              <h2 class="single__h2"><?php echo $paragraph['title']; ?></h2>
            <?php endif; ?>
            <?php if (!empty($paragraph['comment'])) : ?>
              <div class="single__txt"><?php echo $paragraph['comment']; ?></div>
            <?php endif; ?>
            <?php if (!empty($paragraph['caption'])) : ?>
              <?php foreach ($paragraph['caption'] as $caption) : ?>
                <?php if (!empty($caption['caption_title'])) : ?>
                  <h3 class="single__h3"><?php echo $caption['caption_title']; ?></h3>
                <?php endif; ?>
                <?php if (!empty($caption['caption_comment'])) : ?>
                  <div class="single__txt"><?php echo $caption['caption_comment']; ?></div>
                <?php endif; ?>
              <?php endforeach; ?>
            <?php endif; ?>
          <?php endforeach; ?>
        <?php endif; ?>



      </article>
      <?php get_sidebar('case'); ?>
    </div>
  </section>

  <?php
  if (!empty($rec_wp)) :
  ?>
    <section class="relation-doc">
      <div class="containers">
        <h2 class="ttl-secondary">関連資料</h2>
        <div class="flex card">
          <?php

          foreach ($rec_wp as $post_id) :
            setup_postdata($post_id);
            $related_link = get_permalink($post_id);
            $related_title = get_the_title($post_id);
            $related_terms = get_the_terms($post_id, "whitepaper_category");
            $related_thumb = get_the_post_thumbnail($post_id, 'medium');
          ?>
            <a href="<?php echo $related_link; ?>" class="card__box">
              <figure class="card__box--img"><?php echo $related_thumb; ?></figure>
              <?php if (!empty($related_terms)) : ?>
                <div class="card__box--cat">
                  <?php foreach ($related_terms as $related_term) : ?>
                    <span class="cat"><?php echo esc_html($related_term->name); ?></span>
                  <?php endforeach; ?>
                </div>
              <?php endif; ?>
              <h3 class="card__box--ttl"><?php echo $related_title; ?></h3>
              <div class="more small">ダウンロード</div>
            </a>
          <?php endforeach; ?>
        </div>
      </div>
    </section>
  <?php endif; ?>

  <?php
  if (!empty($rec_case)) :
  ?>
    <section class="relation-column">
      <div class="containers">
        <h2 class="ttl-secondary">関連する利用シーン・導入事例</h2>
        <div class="flex card">
          <?php

          foreach ($rec_case as $post_id) :
            setup_postdata($post_id);
            $related_link = get_permalink($post_id);
            $related_title = get_the_title($post_id);
            $related_thumb = get_the_post_thumbnail($post_id, 'medium');
          ?>
            <a href="<?php echo $related_link; ?>" class="card__box">
              <figure class="card__box--img"><?php echo $related_thumb; ?></figure>
              <h3 class="card__box--ttl">
                <div><?php echo $related_title; ?></div>
              </h3>
            </a>
          <?php endforeach; ?>
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