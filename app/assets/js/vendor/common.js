/* ++++++++++++++++++++++++++++++++++++++++

	Common Scripts

++++++++++++++++++++++++++++++++++++++++ */
/* ----------------------------------------
	UA
---------------------------------------- */

var ua = navigator.userAgent.toLowerCase(),
  isSP = /android.+mobile/.test(ua) || /i(phone|pod)/.test(ua),
  isLtIE9 = ua.replace(/.+msie (\d+)\..+/, '$1') < 9;


$(window).on('load', function () {
  $("#overlay").fadeOut(300);
  $(window).scroll(function () {
    $('.anim, .anim2, .anim3').each(function () {
      var t = $(this).offset().top;
      var h = $(window).height() * 0.8;
      var p = t - h;//スクロール距離

      console.log(h);
      if ($(window).scrollTop() > p && $(window).scrollTop() < p + 1000) {
        $(this).addClass('move');
      } else {
        /*$(this).removeClass('move');*/
      }
      /* if ($(window).scrollTop() == 0) {
        $(this).removeClass('move');
      } */
    });
  });
});

$(function () {

  /* ----------------------------------------
    Scroll
  ---------------------------------------- */

  $('body').attr('id', 'top');

  $.easing.quart = function (x, t, b, c, d) {
    return -c * ((t = t / d - 1) * t * t * t - 1) + b;
  };

  $('a[href*="#"]').click(function () {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var $target = $(this.hash);
      $target = $target.length && $target || $('[name=' + this.hash.slice(1) + ']');
      if ($target.length) {
        var targetOffset = $target.offset().top;
        $('html,body').animate({ scrollTop: targetOffset - 80 }, 800, 'quart');
        return false;
      }
    }
  });

  /* ----------------------------------------
  　header
  ---------------------------------------- */
  /* $(window).scroll(function () {
    var scroll = $(document).scrollTop()
    var logoHeight = $(".header-logo").height();

    if (scroll > logoHeight) {
      $("#global-header").addClass("fixed");
    }

    var mvBlock = $("body").find(".mv-block");

    if (mvBlock.length) {
      var mvPos = $(".mv-block").offset().top;
      var mvHeight = $(".mv-block").height();

      if (scroll > mvPos + mvHeight) {
        $("#global-header").addClass("animated");
        $("h1 a .white").hide();
        $("h1 a .color").show();

      }

    } else {
      if (scroll > logoHeight) {
        $("#global-header").addClass("fixed");
        $("#global-header").addClass("animated");
        $("h1 a .white").hide();
        $("h1 a .color").show();
      }

      if ($(window).scrollTop() == 0) {
        $("#global-header").removeClass("fixed");
        $("#global-header").removeClass("animated");
        $("h1 a .white").show();
        $("h1 a .color").hide();
      }

    }


    if ($(window).scrollTop() == 0) {
      $("#global-header").removeClass("fixed");
      $("#global-header").removeClass("animated");
      $("h1 a .white").show();
      $("h1 a .color").hide();
    }

  }); */

  
  $(window).scroll(function () {
    var scroll = $(document).scrollTop()
    var logoHeight = $(".header-logo").height();

    if (scroll > logoHeight) {
      $("#global-header").addClass("fixed");
      $("#global-header").addClass("animated");
      $("h1 a .white").hide();
      $("h1 a .color").show();
    }

    if ($(window).scrollTop() == 0) {
      $("#global-header").removeClass("fixed");
      $("#global-header").removeClass("animated");
      $("h1 a .white").show();
      $("h1 a .color").hide();
    }
  });

  /* ----------------------------------------
    menu
  ---------------------------------------- */
  $(function(){
    $("#menu-btn").click(function () {
      $(this).toggleClass("active");
      $("nav.header-nav").toggleClass("visible");
      $("#global-header").toggleClass("open");
      
      if ($("#menu-btn").hasClass("active")) {
        $("body").css("overflow", "hidden");
        $("h1 a .white").show();
        $("h1 a .color").hide();
      } else {
        $("body").css("overflow", "scroll");

      }
    });

  });

  /* ----------------------------------------
    language toggle-switch
  ---------------------------------------- */
  /* if (document.URL.match(/en/)) {
    $(".toggle-lang").change(function () {
      window.location.href = "https://amnimo.com/";
    });
  } else {
    $(".toggle-lang").change(function () {
      window.location.href = "/en/";
    });
  } */


  $("#global-header .toggle-lang").hover(
    function (){
      $("#global-header .lang-inner span a:not(.current)").css("color", "#00e0cd");
    },
    function (){
      $("#global-header .lang-inner span a:not(.current)").css("color", "#000");
    }
  );

  $("#global-footer .toggle-lang").hover(
    function () {
      $("#global-footer .lang-inner span a:not(.current)").css("color", "#00e0cd");
    },
    function () {
      $("#global-footer .lang-inner span a:not(.current)").css("color", "#aaa");
    }
  );

  $(".toggle-lang").change(function (){
    var currentUrl = $(location).attr('href')
    var splitUrl = $(location).attr('href').split("/");

    if (currentUrl.match("/en/news")) {
      /* var jpUrl = $(location).attr('href').replace(splitUrl[3] + "/", "");
      window.location.href = jpUrl; */
      window.location.href = "/news/";
    } else if (currentUrl.match("/en/")) {
      var jpUrl = $(location).attr('href').replace(splitUrl[3] + "/", "");
      window.location.href = jpUrl;
    } else if (currentUrl.match("/edge_gateway/manuals/|/edge_gateway/column/|/edge_gateway/solutions/|/edge_gateway/partners/")) {
      window.location.href = "/en/service/edge_gateway/";
    } else if (currentUrl.match("/amnimo_sense/price/|/amnimo_sense/introduce/|/amnimo_sense/security/")) {
      window.location.href = "/en/service/amnimo_sense/";
    } else if (currentUrl.match("recipe016|recipe017|recipe018|recipe019|recipe020")) {
      window.location.href = "/en/service/amnimo_sense/recipe/";
    } else if (currentUrl.match("/service/iot_router/manuals/")) {
    window.location.href = "/en/service/iot_router/";
    } else if (currentUrl.match("/pump/")) {
      window.location.href = "/en/service/";
    } else if (currentUrl.match("/wlm/")) {
      window.location.href = "/en/service/wlm/";
    } else if (currentUrl.match("/about/colaborative_wolrd/")) {
      window.location.href = "/en/about/";
    } else if (currentUrl.match("/news/")) {
      window.location.href = "/en/news/";
    } else if (currentUrl.match("/movie_archive/")) {
      window.location.href = "/en/";
    } else if (currentUrl.match("/sitemap.html")) {
      window.location.href = "/en/";
      // 英語版が存在しない新規製品・サービスページが追加されたら、ここに/ページの直上のフォルダ名/を追加する。追加した場合、そのフォルダ下のページ内で言語切替をすると、英語版のトップへリダイレクトされる。
    } else if (currentUrl.match("/edge_gateway_outdoor/|/iot_router_outdoor/|/ai_edge_gateway/|/remoteit/|/vms/|/dms/|/e_vms/|/cloud_vr/|/compact_router/|/compact_router_wifi/|/fuelcell_camera/")) {
      window.location.href = "/en/";
    } else if (currentUrl.match("/case/")) {
      window.location.href = "/en/";
    } else if (currentUrl.match("/partners/")) {
      window.location.href = "/en/";
    } else if (currentUrl.match("/channel/")) {
      window.location.href = "/en/";
    } else if (currentUrl.match("/spec_manual/")) {
      window.location.href = "/en/";
    } else if (currentUrl.match("/column/")) {
      window.location.href = "/en/";
    } else {
      var enDir = splitUrl[2] + "/en";
      var enUrl = $(location).attr('href').replace(splitUrl[2], enDir);        
      window.location.href = enUrl;
    }
  });

  /* ----------------------------------------
      .cate-nav
  ---------------------------------------- */

  var cateNav = $("body").find(".cate-nav");

  if (cateNav.length) {
    $(function () {
      $(window).scroll(function () {
        var scroll = $(document).scrollTop()
        var navPos = $(".cate-nav").offset().top;
        var navHeight = $(".cate-nav").height();
        var mvPos = $(".mv-block").offset().top;
        var mvHeight = $(".mv-block").height();

        if (scroll > navPos + navHeight) {
          $(".cate-nav").addClass("fixed");
          $(".cate-nav").addClass("animated");

        } else if (scroll < mvPos + mvHeight + navHeight) {
          $(".cate-nav").removeClass("fixed");
          $(".cate-nav").removeClass("animated");
        }



      });

    });
  }

  /* ----------------------------------------
      page top
  ---------------------------------------- */

  $("#pagetop").hide();
  $(window).bind("scroll", function () {
    var scrollTop = $(window).scrollTop();
    if (scrollTop > 300) {
      $("#pagetop").fadeIn();
    } else {
      $("#pagetop").fadeOut();
    }
  });

  $(window).on("scroll", function () {
    if ($(this).scrollTop() > 100) {
      $(".pagetop").fadeIn("fast");
    } else {
      $(".pagetop").fadeOut("fast");
    }
    scrollHeight = $(document).height(); //ドキュメントの高さ 
    scrollPosition = $(window).height() + $(window).scrollTop(); //現在地 
    footHeight = $("footer").innerHeight(); //footerの高さ（＝止めたい位置）
    //console.log(footHeight);
    if (scrollHeight - scrollPosition <= footHeight) { //ドキュメントの高さと現在地の差がfooterの高さ以下になったら
      $(".pagetop").css({
        "position": "absolute", //pisitionをabsolute（親：wrapperからの絶対値）に変更
        "bottom": footHeight + 20 //下からfooterの高さ + 20px上げた位置に配置
      });
    } else { //それ以外の場合は
      $(".pagetop").css({
        "position": "fixed", //固定表示
        "bottom": "80px" //下から20px上げた位置に
      });
    }
  });

});