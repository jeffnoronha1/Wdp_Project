$(function () {
  // J SLIDE
  if ($(".j_slide").length) {
    function jSlide() {
      $(".j_slide_nav span").removeClass("active");

      if ($(".j_slide_item:visible").next(".j_slide_item").length) {
        $(".j_slide_nav span:eq(" + ($(".j_slide_item:visible").index() + 1) + ")").addClass("active");
        $(".j_slide_item:visible").fadeOut(function () {
          $(this).next(".j_slide_item").fadeIn().css('display', 'block');
        });
      } else {
        $(".j_slide_nav span:eq(0)").addClass("active");

        $(".j_slide_item:visible").fadeOut(function () {

          $(".j_slide_item:eq(0)").fadeIn();
        });
      }
    }

    var timeSlide = 3500;
    var jSlideTimer = setInterval(function () {
      jSlide();
    }, timeSlide);

    $(".j_slide").mouseenter(function () {
      clearInterval(jSlideTimer);
    }).mouseleave(function () {
      jSlideTimer = setInterval(function () {
        jSlide();
      }, timeSlide);

    });

    // J NAV

    var slideNav = '';
    $(".j_slide_item").each(function () {
      slideNav += "<span class='rounded transition'></span>";
    });

    $(".j_slide_nav").html(slideNav).find("span").click(function () {

      var navigation = $(this);
      clearInterval(jSlideTimer);

      $(".j_slide_nav span").removeClass("active");
      $(".j_slide_item:visible").fadeOut(function () {
        navigation.addClass("active")
        $(".j_slide_item:eq(" + navigation.index() + ")").fadeIn();
      });
    });

    $(".j_slide_nav").find("span:eq(0)").addClass("active");
  }

  // J TABS

  if ($(".j_tabs").length) {
    $(".j_tabs_nav:eq(0)").addClass("active");
    $(".j_tabs_nav").click(function () {

      var jTab = $(this);

      $(".j_tabs_nav").removeClass("active");
      jTab.addClass("active");

      $(".j_tabs_item").fadeOut(function () {
        $(".j_tabs_item:eq("+jTab.index()+")").fadeIn();
      });
    });
  }
});
