<?php
global $right_wp_bnr;
$rec_wp = CFS()->get('rec_wp');
$rec_column = CFS()->get('rec_column');
$right_wp_bnr = CFS()->get('right_wp_bnr');
?>

<?php get_header(); ?>

<div id="container" class="sng-column">

  <div class="breadcrumb">
    <ul class="breadcrumb-list">
      <li><a href="<?php echo esc_url(home_url()); ?>">産業用IoTのことならamnimo</a></li>
      <li><a href="<?php echo esc_url(home_url()); ?>/column/">コラム</a></li>
      <li><?php echo strip_tags(get_the_title()); ?></li>
    </ul>
  </div>
  <!-- .breadcrumb -->

  <section class="">
    <div class="containers flex">

      <!-- 投稿記事詳細メイン -->
      <article class="main-conts single">

        <h1 class="single__h1"><?php the_title(); ?></h1>

        <!-- <div class="single__time"><span class="time">2023.02.22</span></div> -->
        <div class="single__lead"><?php the_post_thumbnail(); ?></div>

        <!-- SNSシェアボタン -->
        <ul class="flex gap20 fS aiC sns-share">
          <li><a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo get_the_permalink(); ?>" target="_blank" rel="nofollow noopener"><img src="<?php echo assets_path() ?>img/common/in.svg" alt="LinkedIn"></a></li>
          <li><a href="http://www.facebook.com/share.php?u=<?php echo get_the_permalink(); ?>" target="_blank" rel="nofollow noopener"><img src="<?php echo assets_path() ?>img/common/fb.svg" alt="Facebook"></a></li>
          <li><a href="https://twitter.com/share?url=<?php echo get_the_permalink(); ?>&text=<?php echo get_the_title(); ?>" target="_blank" rel="nofollow noopener"><img src="<?php echo assets_path() ?>img/common/tw.svg" alt="Twitter"></a></li>
        </ul>

        <div class="single__lead"><?php echo wp_kses(CFS()->get('lead'), $allowed_html); ?></div>

        <?php
        $paragraph_arr = CFS()->get('paragraph');
        $i = 0;
        ?>
        <?php if (!empty($paragraph_arr)) : ?>
          <div class="single__toc">
            <div class="single__toc--ttl">目次</div>
            <dl>
              <?php foreach ($paragraph_arr as $paragraph) :
                $i++;
                $i2 = 0;
              ?>
                <dt><a href="#toc<?php echo $i ?>"><?php echo esc_html($paragraph['title']) ?></a></dt>
                <?php if (!empty($paragraph['caption'])) : ?>
                  <dd>
                    <ul>
                      <?php foreach ((array)$paragraph['caption'] as $caption) :
                        $i2++;
                      ?>
                        <li><a href="#toc<?php echo $i ?>-<?php echo $i2 ?>"><?php echo esc_html($caption['caption_title']) ?></a></li>
                      <?php endforeach;
                      //endif;
                      ?>
                    </ul>
                  </dd>
                <?php endif; ?>
              <?php
              endforeach;
              // endif; 
              ?>
            </dl>
          </div>
        <?php endif; ?>

        <?php
        $i = 0;
        if ($paragraph_arr) : foreach ($paragraph_arr as $paragraph) :
            $i++;
            $i2 = 0;
        ?>
            <h2 id="toc<?php echo $i; ?>" class="single__h2"><?php echo esc_html($paragraph['title']) ?></h2>
            <div class="single__txt"><?php //echo wp_kses($paragraph['comment'], $allowed_html); 
                                      ?>
              <?php echo $paragraph['comment'];
              ?></div>
            <?php if (!empty($paragraph['caption'])) : ?>
              <?php foreach ((array)$paragraph['caption'] as $caption) :
                $i2++;
              ?>
                <h3 id="toc<?php echo $i; ?>-<?php echo $i2 ?>" class="single__h3"><?php echo esc_html($caption['caption_title']) ?></h3>
                <div class="single__txt">
                  <?php //echo wp_kses_post($caption['caption_comment']); 
                  ?>
                  <?php echo $caption['caption_comment'] ?>
                </div>
              <?php endforeach ?>
            <?php endif; ?>
        <?php endforeach;
        endif; ?>



      </article>
      <?php get_sidebar('column'); ?>

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
  if (!empty($rec_column)) :
  ?>
    <section class="relation-column">
      <div class="containers">
        <h2 class="ttl-secondary">関連コラム</h2>
        <div class="flex gap30 card">
          <?php

          foreach ($rec_column as $post_id) :
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