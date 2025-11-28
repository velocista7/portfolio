/**************************************************

	style.css ( ver 1.0.0 )

**************************************************/

//디바이스 체크
getdevice = function () {
  if ($("#_device_pc").css("display") == "block") {
    return "pc";
  } else if ($("#_device_ta").css("display") == "block") {
    return "ta";
  } else if ($("#_device_mo").css("display") == "block") {
    return "mo";
  } else {
    return null;
  }
};

//전역변수 선언
VARS = {
  ani: {
    speed: 600,
    easing: "easeInOutExpo",
  },
};

/**************************************************
	basic
**************************************************/
function textCopy(id) {
  var r = document.createRange();
  r.selectNode(document.getElementById(id));
  window.getSelection().removeAllRanges();
  window.getSelection().addRange(r);
  document.execCommand("copy");
  window.getSelection().removeAllRanges();
}

/**************************************************
	layout
**************************************************/

//위로가기 버튼
gotop = {
  init: function () {
    this.action();
  },
  action: function () {
    var $ele = {
      btn: $("#gotop"),
    };
    $ele.btn.on({
      click: function (e) {
        e.preventDefault();
        $("html,body").animate(
          {
            scrollTop: 0,
          },
          VARS.ani
        );
      },
    });
  },
};
$(function () {
  if ($("#gotop").length > 0) {
    gotop.init();
  }
});

//헤더 검색 버튼
hd_sch = {
  init: function () {
    this.action();
  },
  action: function () {
    var $ele = {
      box: $("#hd-sch"),
      btn: $("#hd-sch .btn"),
    };
    $ele.btn.on({
      click: function (e) {
        e.preventDefault();
        $ele.box.toggleClass("on");
      },
    });
  },
};
$(function () {
  if ($("#hd-sch").length > 0) {
    hd_sch.init();
  }
});

//LNB가 없는 페이지인 경우 full size로 맞춤 (left형 LNB 레이아웃인 경우)
full_layout = {
  init: function () {
    this.action();
  },
  action: function () {
    if ($("#sub").length > 0 && $("#gnb > li.active").length < 1) {
      $("#sub").addClass("fullsize");
    }
  },
};
$(function () {
  if ($("#sub").length > 0 && $("#gnb > li.active").length < 1) {
    full_layout.init();
  }
});

//dropdown menu
dropdown = {
  init: function () {
    this.action();
  },
  action: function () {
    $("#drdw .inner").html($("#gnb").html());
    var gnbLen = 0;
    $("#drdw .inner > li").each(function () {
      if (!$(this).hasClass("hidden-gnb")) {
        gnbLen++;
      }
    });
    $("#drdw .inner > li").css({
      width: 100 / gnbLen + "%",
    });
  },
};
$(function () {
  if ($("#drdw").length > 0) {
    dropdown.init();
  }
});

//slide menu
slidemenu = {
  init: function () {
    this.action();
  },
  action: function () {
    var $ele = {
      btn: $("#slide-btn button"),
      drdw: $("#drdw"),
      slide: $("#slide-menu"),
      bg: $("#slide-bg"),
      close: $("#slide-close"),
      schform: $("#hd-sch-mo"),
    };
    //click
    $ele.btn.on({
      click: function (e) {
        e.preventDefault();
        if (getdevice() == "pc") {
          var vis = $ele.btn.hasClass("on");
          if (!vis) {
            $ele.drdw.stop().slideDown();
            $ele.btn.addClass("on");
            $("#hd-sch").removeClass("on");
          } else {
            $ele.drdw.stop().slideUp();
            $ele.btn.removeClass("on");
            $ele.schform.removeClass("on");
          }
        } else {
          var vis = $ele.slide.hasClass("on");
          if (!vis) {
            $ele.bg.fadeIn();
            $ele.slide.addClass("on");
          }
        }
      },
    });
    $ele.close.on({
      click: function (e) {
        e.preventDefault();
        var vis = $ele.slide.hasClass("on");
        if (vis) {
          $ele.bg.fadeOut();
          $ele.slide.removeClass("on");
          $ele.schform.removeClass("on");
        }
      },
    });

    $(window).on({
      "resize load": function () {
        $ele.drdw.stop().slideUp();
        $ele.btn.removeClass("on");
      },
    });
  },
};
$(function () {
  if ($("#slide-menu").length > 0) {
    slidemenu.init();
  }
});

//GNB 에서 LNB 자동으로 가져 옴
get_lnb = {
  init: function () {
    this.action();
  },
  action: function () {
    var html = $("#gnb > li.active > ul").html();
    $("#lnb").html(html);
    if ($("#lnb > li").length < 2) {
      $("#lnb").remove();
    }
    if (!$(".lnbWrap").hasClass("left")) {
      lnb_autowidth.init();
    }
  },
};
$(function () {
  if ($("#lnb").length > 0) {
    get_lnb.init();
  }
});

//GNB 에서 Navigator 자동으로 가져 옴
get_navigator = {
  init: function () {
    this.action();
  },
  action: function () {
    //depth 1
    var d1_txt = "<?=$_tit[0]?>";
    var $d1 = "";
    $("#navigator li.d1").append("<ul>" + $("#gnb").html() + "</ul>");
    $("#navigator li.d1 > ul > li > ul").remove();
    $("#navigator li.d1 > a").attr(
      "href",
      $("#gnb > li.active > a").attr("href")
    );

    //depth 2
    var d2_txt = "<?=$_tit[1]?>";
    var $d2 = "";
    $("#navigator li.d2").append(
      "<ul>" + $("#gnb > li.active > ul").html() + "</ul>"
    );
    $("#navigator li.d2 > a").attr(
      "href",
      $("#gnb > li.active > ul > li.active > a").attr("href")
    );

    //click 2depth
    $(document).on("click", "#navigator > ul > li > a", function (e) {
      var $li = $(this).parent("li");
      var vis = $li.hasClass("on");
      if ($li.find("ul").length > 0) {
        e.preventDefault();
      }
      if (!vis) {
        $li.addClass("on").siblings().removeClass("on");
      } else {
        $li.removeClass("on");
      }
    });

    $("body").click(function (e) {
      if (
        $("#navigator").has(e.target).length == 0 &&
        !$("#navigator").is(e.target)
      ) {
        $("#navigator > ul > li").removeClass("on");
      }
    });
  },
};
$(function () {
  if ($("#navigator").length > 0) {
    get_navigator.init();
  }
});

//lnb auto width
lnb_autowidth = {
  init: function () {
    this.action();
  },
  action: function () {
    $ele = {
      li: $("#lnb > li"),
    };
    $ele.li.css({
      width: 100 / $ele.li.length + "%",
    });
  },
};

//헤더 language 버튼 for mobile
hd_lan_mo = {
  init: function () {
    this.action();
  },
  action: function () {
    var $ele = {
      box: $("#hd-lan-mo"),
      btn: $("#hd-lan-mo > a"),
    };
    $ele.btn.on({
      click: function (e) {
        e.preventDefault();
        $ele.box.toggleClass("on");
      },
    });
  },
};
$(function () {
  if ($("#hd-lan-mo").length > 0) {
    hd_lan_mo.init();
  }
});

//헤더 검색 버튼 for mobile
hd_sch_mo = {
  init: function () {
    this.action();
  },
  action: function () {
    var $ele = {
      box: $("#hd-sch-mo"),
      btn: $("#hd-sch-mo .btn"),
    };
    $ele.btn.on({
      click: function (e) {
        e.preventDefault();
        $ele.box.toggleClass("on");
      },
    });
  },
};
$(function () {
  if ($("#hd-sch-mo").length > 0) {
    hd_sch_mo.init();
  }
});

//gnb for mobile
gnb_mo = {
  init: function () {
    this.action();
  },
  action: function () {
    var $ele = {
      win: $(window),
      doc: $(document),
      gnb: $("#gnb-mo"),
    };
    var auto_open = function () {
      $("> li.active", $ele.gnb).find("a").click();
    };
    var d2_open = function (e, $this) {
      var $ele2 = {
        d2: $this.parent().children("ul"),
        d2_sib: $this.parent().siblings().children("ul"),
      };
      var vars2 = {
        disp: $ele2.d2.is(":visible"),
        d2_count: $ele2.d2.children("li").length,
      };
      if (vars2.d2_count > 0) {
        e.preventDefault();
        if (vars2.disp) {
          $ele2.d2.slideUp(VARS.ani);
          $this.parent("li").removeClass("active");
        } else {
          $ele2.d2.slideDown(VARS.ani);
          $ele2.d2_sib.slideUp(VARS.ani);
          $this
            .parent("li")
            .addClass("active")
            .siblings()
            .removeClass("active");
        }
      }
    };
    $(window).on({
      load: function () {
        auto_open();
      },
    });
    $(document).on("click", "#gnb-mo > li > a", function (e) {
      d2_open(e, $(this));
    });
  },
};
$(function () {
  if ($("#gnb-mo").length > 0) {
    gnb_mo.init();
  }
});

//Datepicker
$(function () {
  let datepicker_timer = "";
  const set_datepicker = function () {
    if (datepicker_timer) {
      clearTimeout(datepicker_timer);
    }
    $("*[datepicker]").each(function () {
      if (!$(this).hasClass("hasDatepicker")) {
        $(this).datepicker({
          dateFormat: "yy-mm-dd",
        });
      }
    });
    datepicker_timer = setTimeout(set_datepicker, 100);
  };
  datepicker_timer = setTimeout(set_datepicker, 100);
});

/**************************************************
	main
**************************************************/
//visual
visual = {
  init: function () {
    this.action();
  },
  action: function () {
    var $ele = {
      roll: $(".visual .roll"),
    };
    var rolling = function () {
      $ele.roll.slick({
        fade: false, //Fade 롤링 효과
        dots: true, //하단 pager
        arrows: false, //next,prev 버튼
        infinite: true, //무한반복
        slidesToShow: 1, //슬라이드 갯수
        slidesToScroll: 1, //롤링시 슬라이드 갯수
        autoplay: true, //자동롤링
        autoplaySpeed: 4000, //자동롤링 딜레이
        swipe: false, //모바일 스와프 여부
        centerMode: false, //Center모드. 가운데 slide에 'slick-active' 클래스 부여.
        centerPadding: 0, //Center모드인 경우 좌/우 여백 설정
        vertical: false, //vertical 모드
        zIndex: 80, //z-index
        responsive: [
          //tablet
          {
            breakpoint: 1300,
            settings: {
              swipe: true,
            },
          },
          //mobile
          {
            breakpoint: 750,
            settings: {
              swipe: true,
            },
          },
        ],
      });
    };
    rolling();
  },
};

/**************************************************
	sub
**************************************************/

/**************************************************
	클릭보드
	class="clipBtn" link="링크주소"
**************************************************/
$(function () {
  var clipboard = new ClipboardJS(".clipBtn", {
    text: function (obj) {
      alert("클립보드에 복사되었습니다");
      return obj.getAttribute("link");
    },
  });
});
