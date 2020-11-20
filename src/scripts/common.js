// ヘッダーメニューをクリックした時の挙動(SP版)
$(function () {
  const trigger = $("#trigger");
  const menu_sp = $(".menu-sp");
  const main_cover = $("#main_cover");

  // ハンバーガーメニューをクリックした時の挙動
  trigger.click(function () {
    if (trigger.hasClass("active")) {
      trigger.removeClass("active");
      menu_sp.slideUp();
      main_cover.on("click", function () {
        trigger.removeClass("active");
        main_cover.removeClass("active");
        menu_sp.slideUp();
      });
    } else {
      trigger.addClass("active");
      menu_sp.slideDown();
    }
  });

  // ハンバーガーメニューが開いている時に画面の適当な場所タップするとメニューを閉じる
  main_cover.click(function () {
    if (trigger.hasClass("active")) {
      trigger.removeClass("active");
      main_cover.removeClass("active");
      menu_sp.slideUp();
    }
  });

  //スライダー//
	$('.slider').slick({
    autoplay:true,
    autoplaySpeed:4000,
		speed:1000,
		easing:'swing',
    slidesToShow:4,
    prevArrow:'<span class="prev-arrow">&lt;</span>',
		nextArrow:'<span class="next-arrow">&gt;</span>',
		responsive:[
      {
				breakpoint:1025,
				settings:{
					slidesToShow:3,
				}
			},
			{
				breakpoint:769,
				settings:{
          slidesToShow:2,
          autoplaySpeed:2000,
          prevArrow:'',
		      nextArrow:'',
				}
			}
		]
  });
});

// ボックスを下からフェードイン
$(function () {
  $(window).scroll(function () {
    $(".fade-in-bottom").each(function () {
      var targetElement = $(this).offset().top;
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();
      if (scroll > targetElement - windowHeight + 200) {
        $(this).css("opacity", "1");
        $(this).css("transform", "translateY(0)");
      }
    });
  });
});

  //ページtopに戻るボタン
$(window).on("scroll",function () {
  
  if($(window).scrollTop() > 300){
      $('.top-btn').addClass('is-over');
  }
  else{
      $('.top-btn').removeClass('is-over');
  }
});
$('.top-btn').click(function () {
  $('body, html').animate({ scrollTop: 0 }, 500); //0.5秒かけてトップへ戻る
  return false;
});


// スクロールされて表示されたらanimationを動かす
$(function () {
  $(window).scroll(function () {
    $('.start_animation').each(function () {
      var targetElement = $(this).offset().top;
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();
      if (scroll > targetElement - windowHeight + 200) {
        $('.skill__statusbar').addClass('move');
      };
    });
  });
});

//ローディング
$(window).on("load",function () {
	
	setTimeout(function () {
		$('.loader').fadeOut();
	}, 600)
});
