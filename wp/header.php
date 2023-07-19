<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php esc_html(bloginfo('charset')); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="keywords" content="IIoT,通信,製品,事例,インダストリアルIoT">
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <meta name="author" content="">
  <title><?php wp_title('|', true, 'right'); ?></title>
  <meta name="format-detection" content="telephone=no">
  <!-- Google Tag Manager -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-5RJ3BQK');
  </script>
  <!-- End Google Tag Manager -->
  <link rel="canonical" href="https://amnimo.com/">
  <!-- Schema.org markup for Google+ -->
  <meta itemprop="name" content="">
  <meta itemprop="image" content="">

  <!-- Twitter Card data -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="IoT・クラウド・AIのことなら|アムニモ株式会社|横河電機グループ">
  <meta name="twitter:image:src" content="">

  <!-- Open Graph data -->
  <meta property="og:title" content="<?php esc_html(bloginfo('name')) ?>">
  <meta property="og:description" content="<?php esc_html(bloginfo('description')) ?>">
  <meta property="og:type" content="website">
  <meta property="og:url" content="">
  <meta property="og:image" content="">
  <meta property="og:image:width" content="">
  <meta property="og:image:height" content="">
  <meta property="og:site_name" content="<?php esc_html(bloginfo('name')) ?>">

  <!-- Web font -->
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://use.typekit.net/ncf8fus.css">

  <!-- Style sheet -->
  <link rel="stylesheet" href="<?php echo assets_path() ?>css/main.css">
  <link rel="stylesheet" href="<?php echo assets_path() ?>css/style.css">
  <?php wp_head(); ?>
</head>
<?php if (!empty($class)) : ?>

  <body <?php body_class($class); ?>>
  <?php else : ?>

    <body <?php body_class(); ?>>
    <?php endif; ?>
    <!-- Google Tag Manager (noscript) -->
    <noscript>
      <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5RJ3BQK" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->
    <header id="global-header">
      <div class="header-logo">
        <picture class="logo-bg">
          <source media="(max-width: 640px)" srcset="<?php echo assets_path() ?>img/sources/parts/sp-header-symbol.png">
          <img alt="amnimo" src="<?php echo assets_path() ?>img/sources/parts/header-symbol.png" width="350" height="217">
        </picture>
        <h1>
          <a class="close_class" href="/">
            <img src="<?php echo assets_path() ?>img/sources/parts/amnimo-white-logo.svg" class="white" alt="産業用LTEゲートウェイamnimo" alt="amnimo" width="267" height="58">
            <img src="<?php echo assets_path() ?>img/sources/parts/amnimo-color-logo.svg" class="color" alt="産業用LTEゲートウェイamnimo" alt="amnimo" width="267" height="58">
          </a>
        </h1>
      </div>
      <div id="menu-btn">
        <span></span>
        <span></span>
        <span></span>
      </div>
      <nav class="header-nav sp-nav">
        <div class="inner">
          <ul class="menu-list menu01">
            <li><a href="https://support.amnimo.com/hc/ja" target="_blank" class="blank">FAQ・サポート情報</a></li>
            <li><a href="https://amnimo-partner.amnimo.com/hc/ja" target="_blank" class="blank">パートナーサイト</a></li>
            <li><a href="https://apps.amnimo.com/#/signin" target="_blank" class="blank">サインイン</a></li>
          </ul>
          <div class="lang">
            <div class="lang-inner">
              <span class="jp"><a class="current">JP</a></span>
              <span class="toggle-switch">
                <input type="checkbox" id="toggle-lang" class="toggle-lang">
                <label for="toggle-lang"></label>
              </span>
              <span class="en"><a>EN</a></span>
            </div>
          </div>
          <ul class="menu-list menu02">
            <li><a href="/service/">製品・サービス</a>
              <ul class="child">
                <li><a href="/service/edge_gateway/">エッジゲートウェイ（屋内版）</a></li>
                <li><a href="/service/edge_gateway_outdoor/">エッジゲートウェイ（屋外版）</a></li>
                <li><a href="/service/iot_router/">IoTルーター（屋内版）</a></li>
                <li><a href="/service/iot_router_outdoor/">IoTルーター（屋外版）</a></li>
                <li><a href="/service/compact_router/">コンパクトルーター（屋内版）</a></li>
                <li><a href="/service/compact_router_wifi/">無線LAN搭載型コンパクトルーター（屋内版）</a></li>
                <li><a href="/service/compact_router_outdoor/">【開発中】無線LAN搭載型コンパクトルーター（屋外版）</a></li>
                <li><a href="/service/ai_edge_gateway/">【開発中】AIエッジゲートウェイ</a></li>
                <li><a href="/service/remoteit/">remote.it</a></li>
                <li><a href="/service/vms/">ビデオマネジメントシステム(VMS)</a></li>
                <li><a href="/service/dms/">デバイス管理システム</a></li>
                <li><a href="/service/e_vms/">統合ビデオ管理システム</a></li>
                <li><a href="/service/cloud_vr/">【開発中】クラウドビデオレコーダー</a></li>
                <li><a href="/service/fuelcell_camera/">燃料電池型監視カメラソリューション</a></li>

                <!--<li><a href="/service/wlm/">簡易無線水位計測サービス</a></li>-->
                <!-- <li><a href="/service/amnimo_sense/">amnimo sense</a></li> -->
              </ul><!-- /.child -->
            </li>
            <li><a href="#">ニーズ・課題から探す</a>
              <ul class="child">
                <li><a href="/video-solution-security/">映像ソリューション（セキュリティ）</a></li>
                <li><a href="/video-solution-maintenance/">映像ソリューション（メンテナンス）</a></li>
                <li><a href="/video-solution-iot/">IoTソリューション</a></li>
              </ul>
            </li>
            <li><a href="/news/">ニュース</a></li>
            <li><a href="/about/">会社概要</a></li>
            <li><a href="/case/">導入事例・利用シーン</a></li>
            <li><a href="/partners/">パートナー紹介</a>
              <ul class="child">
                <li><a href="/partners/">パートナー紹介</a></li>
                <li><a href="/interview/">パートナーの声</a></li>
              </ul><!-- /.child -->
            </li>
            <li><a href="#">お役立ち情報</a>
              <ul class="child">
                <li><a href="/column/">コラム</a></li>
                <li><a href="/whitepaper/">お役立ち資料</a></li>
                <li><a href="/spec_manual/">仕様書・マニュアル</a></li>
                <li><a href="/channel/">動画アーカイブ</a></li>
              </ul><!-- /.child -->
            </li>
            <li><a href="/contact/">お問い合わせ</a>
              <ul class="child r0">
                <li><a href="/contact/">お問い合わせ</a></li>
                <li><a href="https://amo.amnimo.com/form/estimate" class="blank" target="blank">お見積り依頼</a></li>
                <li><a href="/contact/#doc">資料ダウンロード</a></li>
                <!-- <li><a href="/channel/">動画アーカイブ</a></li>
            <li><a href="/spec_manual/">仕様書・マニュアル</a></li> -->
              </ul><!-- /.child -->
            </li>
            <li><a href="https://support.amnimo.com/hc/ja" target="_blank" class="blank">FAQ</a></li>
          </ul>
        </div><!-- /.inner -->
      </nav>
    </header>
    <!-- /global-header -->