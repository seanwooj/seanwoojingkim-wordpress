$(function(){
  var window_height = $(window).height();
  $(".masthead .overlay, .masthead .text").height(window_height);

  var scrolled_height = $(this).scrollTop();
  if (scrolled_height > 20) {
    $("header").stop().animate({
      backgroundColor: "#111111"
    }, 300);
  } else {
    $("header").stop().animate({
      backgroundColor: "transparent"
    }, 300);
  }

  var feed = new Instafeed({
    get: 'user',
    userId: 55409822,
    clientId: '773d81d652214da4ae671d6a39180e28',
    accessToken: '55409822.467ede5.0800d1978a304d17a988a88143a4630d',
    resolution: 'standard_resolution',
    limit: 8,
    template: "<li><a href='{{link}}'><img data-src='{{image}}' /></a></li>"
  });
  feed.run();

  var mobile_nav_open = false;
  $(".mobile-navigation").click(function() {
    if (mobile_nav_open === false) {
      $("#navigation ul").slideDown("fast");
      $("header").stop().animate({
        backgroundColor: "#111111"
      }, 300);
      mobile_nav_open = true;
      return false;
    } else {
      $("#navigation ul").slideUp("fast");
      scrolled_height = $(window).scrollTop();
      if (scrolled_height > 20) {
        $("header").stop().animate({
          backgroundColor: "#111111"
        }, 300);
      } else {
        $("header").stop().animate({
          backgroundColor: "transparent"
        }, 300);
      }
      mobile_nav_open = false;
      return false;
    }
  });

  $(document).scroll(function() {
    scrolled_height = $(this).scrollTop();
    if (scrolled_height > 20) {
      $("header").stop().animate({
        backgroundColor: "#111111"
      }, 300);
    } else {
      $("header").stop().animate({
        backgroundColor: "transparent"
      }, 300);
    }
  });

  $("#submit").click(function() {
    $("input#name").removeClass("form-error");
    $("textarea#message").removeClass("form-error");
    $("input#email").removeClass("form-error");
    var error_flags = false;
    var name = $("input#name").val();
    if (name === "" || name === " ") {
        error_flags = true;
        $("input#name").addClass("form-error");
    }
    var message = $("textarea#message").val();
    if (message === "" || message === " ") {
        error_flags = true;
        $("textarea#message").addClass("form-error");
    }
    var email_regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i;
    var email = $("input#email").val();
    if (email === "" || email === " ") {
        $("input#email").addClass("form-error");
        error_flags = true;
    } else {
        if (!email_regex.test(email)) {
            $("input#email").addClass("form-error");
            error_flags = true;
        }
    }
    if (error_flags === true) {
        return false;
    }
    var serialized_form_data = $(".form form").serialize();
    $.ajax({
        type: "POST",
        url: $(".form form").attr("action"),
        data: serialized_form_data,
        success: function(o) {
            if (o === "ok") {
                $("#success").fadeIn("slow");
            } else {
                $("#error").fadeIn("slow");
            }
        }
    });
    return false;
  });

  $("#navigation ul a, .logo a, .arrow a, a.read_more").click(function(l) {
    var window_width = $(window).width();
    if (window_width <= 959) {
      $("#navigation ul").slideUp("fast");
    }
    var section_id = $(this).attr("href");
    var section_offset = $(section_id).offset().top;
    $("html,body").animate({
      scrollTop: section_offset - 70
    }, 1800,'easeInOutBack');
    return false;
  });
  $(".social li").click(function() {
    var social_link_url = $(this).attr("data-url");
    window.open(i, "_blank");
  });

});