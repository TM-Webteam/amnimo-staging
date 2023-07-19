<?php get_header(); ?>

<!-- Redirect -->
<div id="create-aad">
  <script>
    var urlHash = location.hash;
    if (urlHash) {
      if (urlHash == "#/create-aad") {
        location.href = 'https://amnimo.com/cp/#/create-aad';
      }
    }
  </script>
</div>
<div id="market-place-2/login-or-register">
  <script>
    var urlHash = location.hash;
    if (urlHash) {
      if (urlHash == "#/market-place-2/login-or-register") {
        location.href = 'https://amnimo.com/cp/#/market-place-2/login-or-register';
      }
    }
  </script>
</div>

<div id="container">
  <div class="mv-block">
    <ul class="front-slider">
      <!--<li class="iot_router_outdoor fuelcell_camera">
              <a href="/service/fuelcell_camera/">
                  <picture>
                      <source media="(max-width: 640px)" srcset="<?php echo assets_path() ?>img/sources/top/sp-mv-slider17-bg.jpg">
                      <source media="(max-width: 1200px)" srcset="<?php echo assets_path() ?>img/sources/top/tb-mv-slider17-bg.jpg">
                      <img src="<?php echo assets_path() ?>img/sources/top/mv-slider17-bg.jpg" alt="" width="1440" height="580">
                  </picture>
                  <div class="txt-wrap">
                      <div class="mv-txt">
                          <p class="font-s sp-v15">LTE対応：電源不要で屋外設置可能
                          </p>
                          <p class="font-m">燃料電池型監視カメラソリューション</p>
                      </div>
                  </div>
                  <div class="mv-btn">詳しくはこちら</div>
              </a>
          </li>-->


      <li class="iot_router_outdoor compact_router">
        <a href="/service/compact_router_wifi/">
          <picture>
            <source media="(max-width: 640px)" srcset="<?php echo assets_path() ?>img/sources/top/sp-mv-slider18-bg.jpg">
            <source media="(max-width: 1200px)" srcset="<?php echo assets_path() ?>img/sources/top/tb-mv-slider18-bg.jpg">
            <img src="<?php echo assets_path() ?>img/sources/top/mv-slider18-bg.jpg" alt="" width="1440" height="580">
          </picture>
          <div class="txt-wrap">
            <div class="mv-txt">
              <p class="font-s sp-v15">無線LAN搭載の産業用品質小型LTEルーター</p>
              <p class="font-m">コンパクトルーター<small class="ib">（WiFi搭載版）</small></p>
            </div>
          </div>
          <div class="mv-btn">詳しくはこちら</div>
        </a>
      </li>
      <!--.compact_router_wifi-->

      <li class="edge_gateway_outdoor">
        <a href="/service/edge_gateway_outdoor/">
          <picture>
            <source media="(max-width: 640px)" srcset="<?php echo assets_path() ?>img/sources/top/sp-mv-slider10-bg.jpg">
            <source media="(max-width: 1200px)" srcset="<?php echo assets_path() ?>img/sources/top/tb-mv-slider10-bg.jpg">
            <img src="<?php echo assets_path() ?>img/sources/top/mv-slider10-bg.jpg" alt="" width="1440" height="580">
          </picture>
          <div class="txt-wrap">
            <div class="mv-txt">
              <p class="font-s sp-v15">屋外にそのまま設置<br>監視カメラ向けLinuxゲートウェイ</p>
              <p class="font-m">エッジゲートウェイ<small class="ib">（屋外版）</small></p>
            </div>
          </div>
          <div class="mv-btn">詳しくはこちら</div>
        </a>
      </li>
      <!-- .edge_gateway_outdoor -->
      <li class="edge_gateway">
        <a href="/service/edge_gateway/">
          <picture>
            <source media="(max-width: 640px)" srcset="<?php echo assets_path() ?>img/sources/top/sp-mv-slider05-bg.jpg">
            <source media="(max-width: 1200px)" srcset="<?php echo assets_path() ?>img/sources/top/tb-mv-slider05-bg.jpg">
            <img src="<?php echo assets_path() ?>img/sources/top/mv-slider05-bg.jpg" alt="" width="1440" height="580">
          </picture>
          <div class="txt-wrap">
            <div class="mv-txt">
              <p class="font-s sp-b15">堅牢性に優れた<br>高機能な産業用LTEゲートウェイ</p>
              <p class="font-m">エッジゲートウェイ</p>
            </div>
          </div>
          <div class="mv-btn">詳しくはこちら</div>
        </a>
      </li>
      <!-- .edge_gateway -->
      <li class="iot_router_outdoor compact_router">
        <a href="/service/compact_router/">
          <picture>
            <source media="(max-width: 640px)" srcset="<?php echo assets_path() ?>img/sources/top/sp-mv-slider16-bg.jpg">
            <source media="(max-width: 1200px)" srcset="<?php echo assets_path() ?>img/sources/top/tb-mv-slider16-bg.jpg">
            <img src="<?php echo assets_path() ?>img/sources/top/mv-slider16-bg.jpg" alt="" width="1440" height="580">
          </picture>
          <div class="txt-wrap">
            <div class="mv-txt">
              <p class="font-s sp-v15">産業用品質の高性能小型LTEルーター</p>
              <p class="font-m">コンパクトルーター</p>
            </div>
          </div>
          <div class="mv-btn">詳しくはこちら</div>
        </a>
      </li>
      <!-- .compact_router-->

      <!--<li class="iot">
              <a href="/service/iot_router/">
                  <picture>
                      <source media="(max-width: 640px)" srcset="<?php echo assets_path() ?>img/sources/top/sp-mv-slider01-bg.jpg">
                      <source media="(max-width: 1200px)" srcset="<?php echo assets_path() ?>img/sources/top/tb-mv-slider01-bg.jpg">
                      <img src="<?php echo assets_path() ?>img/sources/top/mv-slider01-bg.jpg" alt="" width="1440" height="580">
                  </picture>
                  <div class="txt-wrap">
                      <div class="mv-txt">
                          <p class="font-s">高信頼性で小型軽量な<span>IoT用ルーター</span></p>
                          <p class="font-l">IoTルーター</p>
                      </div>
                  </div>
                  <div class="mv-btn">詳しくはこちら</div>
              </a>
          </li>-->
      <!--<li class="news">
              <a href="/news/">
                  <picture>
                      <source media="(max-width: 640px)" srcset="<?php echo assets_path() ?>img/sources/top/sp-mv-slider06-bg.jpg">
                      <source media="(max-width: 1200px)" srcset="<?php echo assets_path() ?>img/sources/top/tb-mv-slider06-bg.jpg">
                      <img src="<?php echo assets_path() ?>img/sources/top/mv-slider06-bg.jpg" alt="" width="1440" height="580">
                  </picture>
                  <div class="txt-wrap">
                      <div class="bg-white">
                          <div class="mv-txt">
                              <p class="font-l">NEWS</p>
                              <p class="font-s">ニュース</p>
                          </div>
                      </div>
                  </div>
                  <div class="mv-btn">詳しくはこちら</div>
              </a>
          </li>-->
    </ul>
  </div>
  <!-- .mv-block -->

  <div class="solution-block top">
    <h3 class="block-title"><span>製品・サービス</span></h3>
    <div class="service-listOuter">


      <h4 class="head_sq sp-b20">IoTデバイス</h4>
      <h5 class="head_gray sp-b30">ハードウェア</h5>
      <ul class="service-list sp-v30">
        <li class="edge">
          <a href="/service/edge_gateway/">
            <picture>
              <source media="(max-width: 640px)" srcset="<?php echo assets_path() ?>img/sources/service/share/sp-solution-bg01.jpg">
              <img src="<?php echo assets_path() ?>img/sources/service/share/solution-bg01.jpg" alt="" width="470" height="300">
            </picture>
            <div class="ttl-box">エッジゲートウェイ<span>（屋内版）</span></div>
            <div class="txt-box">
              <p>PoEを4ポート搭載、複数SIM搭載、瞬停対策など、厳しい環境下でも安定稼働。<br>Linux OS搭載のLTEゲートウェイ</p>
            </div>
          </a>
        </li>
        <li class="edge_out">
          <a href="/service/edge_gateway_outdoor/">
            <picture>
              <source media="(max-width: 640px)" srcset="<?php echo assets_path() ?>img/sources/service/share/sp-solution-bg10.jpg">
              <img src="<?php echo assets_path() ?>img/sources/service/share/solution-bg10.jpg" alt="" width="470" height="300">
            </picture>
            <div class="ttl-box">エッジゲートウェイ<span>（屋外版）</span></div>
            <div class="txt-box">
              <p>エッジゲートウェイの堅牢性を引き継ぎ、<br>防水・防塵・直射日光・雷対策を考慮した設計。屋外設置可能な監視カメラ向けLTEゲートウェイ</p>
            </div>
          </a>
        </li>
        <li class="iot">
          <a href="/service/iot_router/">
            <picture>
              <source media="(max-width: 640px)" srcset="<?php echo assets_path() ?>img/sources/service/share/sp-solution-bg06.jpg">
              <img src="<?php echo assets_path() ?>img/sources/service/share/solution-bg06.jpg" alt="" width="470" height="300">
            </picture>
            <div class="ttl-box">IoTルーター<span>（屋内版）</span></div>
            <div class="txt-box">
              <p>IoT機器からのインターネット通信を<span class="ib">可能にするLTEルーター。</span><span class="ib">汎用性が高く、</span><span class="ib">設置場所を選ばない小型軽量タイプ</span></p>
            </div>
          </a>
        </li>
        <li class="iot_out">
          <a href="/service/iot_router_outdoor/">
            <picture>
              <source media="(max-width: 640px)" srcset="<?php echo assets_path() ?>img/sources/service/share/sp-solution-bg11.jpg">
              <img src="<?php echo assets_path() ?>img/sources/service/share/solution-bg11.jpg" alt="" width="470" height="300">
            </picture>
            <div class="ttl-box">IoTルーター<span>（屋外版）</span></div>
            <div class="txt-box">
              <p>屋外設置でPoE給電が可能なLTEルーター。<span class="ib">さまざまな産業用途で利用可能</span></p>
            </div>
          </a>
        </li>
        <li class="edge_out">
          <a href="/service/compact_router/">
            <picture>
              <source media="(max-width: 640px)" srcset="<?php echo assets_path() ?>img/sources/service/share/sp-solution-bg16.jpg">
              <img src="<?php echo assets_path() ?>img/sources/service/share/solution-bg16.jpg" alt="" width="470" height="300">
            </picture>
            <div class="ttl-box">コンパクトルーター<span>（屋内版）</span></div>
            <div class="txt-box">
              <p>さまざまなIoT機器に組み込み可能。<span class="ib">高い信頼性での運用を可能とする小型で安価な産業用LTEルーター。</span></p>
            </div>
          </a>
        </li>
        <li class="cloud_vr">
          <a href="/service/compact_router_wifi/">
            <picture>
              <source media="(max-width: 640px)" srcset="<?php echo assets_path() ?>img/sources/service/share/sp-solution-bg18.jpg">
              <img src="<?php echo assets_path() ?>img/sources/service/share/solution-bg18.jpg" alt="" width="470" height="300">
            </picture>
            <div class="ttl-box f80"><span>【開発中】</span>コンパクトルーター<span>(WiFi搭載/屋内版)</span></div>
            <div class="txt-box">
              <p>WiFi搭載により多様な手段でIoT化を実現。高い信頼性で運用可能な低コストのLTE通信デバイスです。</p>
            </div>
          </a>
        </li>
        <li class="cloud_vr">
          <a href="/service/compact_router_outdoor/">
            <picture>
              <source media="(max-width: 640px)" srcset="<?php echo assets_path() ?>img/sources/service/share/sp-solution-bg19.png">
              <img src="<?php echo assets_path() ?>img/sources/service/share/solution-bg19.png" alt="" width="470" height="300">
            </picture>
            <div class="ttl-box f80"><span>【開発中】</span>コンパクトルーター<span>(WiFi搭載/屋外版)</span></div>
            <div class="txt-box">
              <p>屋外にそのまま設置可能な高い堅牢性を持つ、<span class="ib">PoE給電も可能なWiFi搭載型のLTEルーターです。</span></p>
            </div>
          </a>
        </li>
        <li class="edge_ai">
          <a href="/service/ai_edge_gateway/">
            <picture>
              <source media="(max-width: 640px)" srcset="<?php echo assets_path() ?>img/sources/service/share/sp-solution-bg12.jpg">
              <img src="<?php echo assets_path() ?>img/sources/service/share/solution-bg12.jpg" alt="" width="470" height="300">
            </picture>
            <div class="ttl-box"><span>【開発中】</span>AIエッジゲートウェイ</div>
            <div class="txt-box">
              <p>エッジによる録画とAI画像解析を同時に実現する<span class="ib">AIチップを搭載した次世代型IoTゲートウェイ</span></p>
            </div>
          </a>
        </li>
      </ul>
      <h5 class="head_gray sp-b30">ソフトウェア</h5>
      <ul class="service-list sp-v30">
        <li class="vms">
          <a href="/service/vms/">
            <picture>
              <source media="(max-width: 640px)" srcset="<?php echo assets_path() ?>img/sources/service/share/sp-solution-bg09.jpg">
              <img src="<?php echo assets_path() ?>img/sources/service/share/solution-bg09.jpg" alt="" width="470" height="300">
            </picture>
            <div class="ttl-box f80 sp-mt20 sp-mt10sp">ビデオ<br>マネジメントシステム<span>（VMS）</span></div>
            <div class="txt-box">
              <p>Network Optix社製の高機能なVMS「NxWitness」カメラで撮影した映像の表示、録音、再生、検索を制御できるソフトウェア</p>
            </div>
          </a>
        </li>
      </ul>

      <h4 class="head_sq sp-b20">クラウドアプリケーション</h4>
      <ul class="service-list sp-v30">
        <li class="dms">
          <a href="/service/dms/">
            <picture>
              <source media="(max-width: 640px)" srcset="<?php echo assets_path() ?>img/sources/service/share/sp-solution-bg07.jpg">
              <img src="<?php echo assets_path() ?>img/sources/service/share/solution-bg07.jpg" alt="" width="470" height="300">
            </picture>
            <div class="ttl-box f80">デバイス<br>管理システム</div>
            <div class="txt-box">
              <p>IoTデバイスやカメラの死活監視、ファームウェアや設定内容の遠隔更新などができるサービス</p>
            </div>
          </a>
        </li>
        <li class="remoteit">
          <a href="/service/remoteit/">
            <picture>
              <source media="(max-width: 640px)" srcset="<?php echo assets_path() ?>img/sources/service/share/sp-solution-bg08.jpg">
              <img src="<?php echo assets_path() ?>img/sources/service/share/solution-bg08.jpg" alt="" width="470" height="300">
            </picture>
            <div class="ttl-box f80">remote.it</div>
            <div class="txt-box">
              <p>プライベートIPネットワーク内のデバイスに対して、インターネット経由で遠隔からセキュアな双方向通信を可能とする<span class="ib">P2P接続サービス</span></p>
            </div>
          </a>
        </li>
        <li class="e_vms">
          <a href="/service/e_vms/">
            <picture>
              <source media="(max-width: 640px)" srcset="<?php echo assets_path() ?>img/sources/service/share/sp-solution-bg14.jpg">
              <img src="<?php echo assets_path() ?>img/sources/service/share/solution-bg14.jpg" alt="" width="470" height="300">
            </picture>
            <div class="ttl-box f80">統合ビデオ<br>管理システム</div>
            <div class="txt-box">
              <p>複数の監視カメラの映像をクラウドで管理。<span class="ib">必要な情報だけクラウドにアップロード。</span><span class="ib">低コスト運用、システム開発不要。</span></p>
            </div>
          </a>
        </li>
        <li class="cloud_vr">
          <a href="/service/cloud_vr/">
            <picture>
              <source media="(max-width: 640px)" srcset="<?php echo assets_path() ?>img/sources/service/share/sp-solution-bg15.jpg">
              <img src="<?php echo assets_path() ?>img/sources/service/share/solution-bg15.jpg" alt="" width="470" height="300">
            </picture>
            <div class="ttl-box f80"><span>【開発中】</span>クラウド<br>ビデオレコーダー</div>
            <div class="txt-box">
              <p>IoTルーター（屋外版）AR20に接続されたカメラで撮影された映像をクラウドで録画・活用できるサービス</p>
            </div>
          </a>
        </li>
      </ul>

      <h4 class="head_sq sp-b20">パッケージソリューション</h4>
      <ul class="service-list sp-v30">
        <li class="fuelcell_camera">
          <a href="/service/fuelcell_camera/">
            <picture>
              <source media="(max-width: 640px)" srcset="<?php echo assets_path() ?>img/sources/service/share/sp-solution-bg17.jpg">
              <img src="<?php echo assets_path() ?>img/sources/service/share/solution-bg17.jpg" alt="" width="470" height="300">
            </picture>
            <div class="ttl-box f80">燃料電池型<br>監視カメラソリューション</div>
            <div class="txt-box">
              <p>燃料電池で稼働する電源・通信工事不要で屋外に設置可能なLTE対応の防犯カメラシステム</p>
            </div>
          </a>
        </li>
      </ul>
      <!--<h4 class="head_sq sp-b20">その他</h4>
        <!- <ul class="service-list sp-v30"> 
            <li class="wlm">
              <a href="/service/wlm/">
                <picture>
                  <source media="(max-width: 640px)" srcset="<?php echo assets_path() ?>img/sources/service/share/sp-solution-bg04.jpg">
                  <img src="<?php echo assets_path() ?>img/sources/service/share/solution-bg04.jpg" alt="" width="470" height="300">
                </picture>
                <div class="ttl-box">water level<span>簡易無線水位計測サービス</span></div>
                <div class="txt-box"><p>サービス受注の停止<br>新規受注の他、現契約の継続につきましても<br>停止とさせていただきます</p></div>
              </a>
            </li> -->
      <!-- <li class="sense">
              <a href="/service/amnimo_sense/">
                <picture>
                  <source media="(max-width: 640px)" srcset="<?php echo assets_path() ?>img/sources/service/share/sp-solution-bg02.jpg">
                  <img src="<?php echo assets_path() ?>img/sources/service/share/solution-bg02.jpg" alt="" width="470" height="300">
                </picture>
                <div class="ttl-box"><span class="ttl-img"><img src="<?php echo assets_path() ?>img/sources/service/share/amnimo-sense.png" alt="amnimo sense" width="526" height="68"></span><span>アムニモセンス</span></div>
                <div class="txt-box"><p>サービス受注の停止<br>新規受注の他、現契約の継続につきましても<br>停止とさせていただきます</p></div>
              </a>
            </li> 
        </ul> -->

    </div><!-- /.service-listOuter -->
  </div>
  <!-- .solution-block -->

  <div class="about-block">
    <h3 class="block-title"><span>アムニモとは？</span></h3>
    <div class="wrap">
      <div class="img-box">IoTとAIで<span class="ib">つながる世界に貢献する</span></div>
      <p class="txt">今、私たちが暮らす社会は、IoTテクノロジーとAIを活用してより豊かに、便利に移り変わる時代のスタート地点に立っています。</p>
      <p class="txt">この新しい世界は、一部の企業で成り立つような単純なものではなく、さまざまな規模・業種の皆様が互いに持てる力を出し合い、<br class="pc">作り上げていくものだと信じています。</p>
      <p class="txt">IoTテクノロジーとAIが社会基盤の一部として溶け込み、お客様や社会が抱える課題を解決するため、<br class="pc">アムニモは、容易に使えることと同時に高い信頼性を有するIoT機器やソフトウェアサービスの提供を通じ、<br class="pc">IoTとAIでつながる世界に貢献していきます。</p>
      <div class="btn"><a href="/about/">もっと見る</a></div>
    </div>
  </div>
  <!-- .about-block -->

  <div class="provided-block">
    <h3 class="block-title"><span>アムニモが<span class="ib">ご提供するサービス</span></span>
    </h3>
    <div class="wrap">
      <div class="align-c sp-b30">
        <picture class="auto">
          <source media="(max-width: 640px)" srcset="<?php echo assets_path() ?>img/sources/top/sp-pict_service.png">
          <img src="<?php echo assets_path() ?>img/sources/top/pict_service.png" alt="図：IoRデバイスの開発・クラウドアプリケーションの開発・パートナー連携によりお客様へアプローチ">
        </picture>

      </div>
      <!-- /.align-c -->

      <div class="centeringbox">
        <div class="text">
          <p><i class="c-icon gg-square"></i>自社開発のIoTデバイスやクラウドアプリケーションを活用し<br>
            <i class="c-icon gg-square"></i>パートナーの持つコンポーネントも柔軟に組み合わせ<br>
            <i class="c-icon gg-square"></i>パートナーと共同でお客様の求めるソリューションを創出
          </p>
        </div>
      </div>
      <div class="align-c sp-b20">
        <img src="<?php echo assets_path() ?>img/sources/top/arrow_b.png" alt="">
      </div>
      <!-- /.align-c sp-b20 -->
      <div class="img-box">お客様の業務プロセスの改革を支援します</div>
    </div>
  </div>
  <!-- .provided-block -->

  <div class="team-block">
    <h3 class="block-title"><span>アムニモ開発チームの特徴</span></h3>
    <div class="wrap">
      <div class="centeringbox">
        <div class="text">
          <ol class="spalign-l">
            <li><span>1.</span>国内の主要IoTデバイスメーカ出身の中核技術者で構成された”国内屈指のスキルと実績を持つ”開発チーム</li>
            <li><span>2.</span>通信デバイス、通信網、ソフトウェア開発、各種ベンダーとの契約など各分野に精通するメンバーで構成</li>
            <li><span>3.</span>他社で実績を上げたビデオソリューション用デバイスを、さらに上回るデバイスを開発</li>
            <li><span>4.</span>自社開発のクラウドソリューションを組合せ、お客様のニーズにお応えするソリューションを提供</li>
          </ol>
        </div>
      </div>

    </div>
  </div>
  <!-- .team-block -->




  <?php
  $args = array(
    'post_type' => 'news',
    'posts_per_page' => 8,
    'order' => 'DESC',
    'orderby' => 'post_date',
    // 'post__not_in' => $p_id,
  );
  $my_query = new WP_Query($args);
  if ($my_query->have_posts()) :
  ?>

    <div class="news-block">
      <h3 class="block-title"><span>ニュース</span></h3>
      <div class="wrap">
        <!-- <div class="sort-box">
    <p class="sort-btn active"><span class="all">ALL</span></p>
    <div class="btn-wrap">
      <p class="sort-btn"><span class="info">お知らせ</span></p>
      <p class="sort-btn"><span class="pressrelease">プレスリリース</span></p>
      <p class="sort-btn"><span class="report">レポート</span></p>
      <p class="sort-btn"><span class="media">メディア掲載</span></p>
    </div>
  </div> -->
        <ul class="news-list">
          <?php
          while ($my_query->have_posts()) : $my_query->the_post();
            $post_id = get_the_ID();
            $post_terms = get_the_terms($post_id, 'news_category');
            foreach ($post_terms as $post_term) {
              $news_slug = $post_term->slug;
            }
            $url = esc_url(CFS()->get('url'));
          ?>
            <li class="<?php echo esc_html($news_slug); ?>">
              <?php if (!empty($url)) : ?>
                <a href="<?php echo $url; ?>" target="_blank">
                <?php else : ?>
                  <a href="<?php the_permalink(); ?>">
                  <?php endif; ?>
                  <span class="type"></span>
                  <p class="txt-box">
                    <span class="date"><?php echo get_the_date('Y.m.d', $post_id); ?></span>
                    <span class="ttl"><?php the_title(); ?></span>
                  </p>
                  </a>
            </li>
          <?php endwhile; ?>
        </ul>
        <div class="btn"><a href="<?php echo esc_url(home_url()); ?>/news/">もっと見る</a></div>
      </div>
    </div>
    <!-- .news-block -->
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