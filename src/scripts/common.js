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
		speed:8000,
		easing:'swing',
    slidesToShow:4,
    arrows:false,
		responsive:[
      {
				breakpoint:999,
				settings:{
					slidesToShow:4,
				}
			},
			{
				breakpoint:768,
				settings:{
					slidesToShow:5,
					slidesToScroll:1,
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
