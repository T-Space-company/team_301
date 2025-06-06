function formatAmount(n) {
  var t = new Intl.NumberFormat("tr-TR", {
    style: "currency",
    currency: "TRY",
    minimumFractionDigits: 2,
  });
  return t.format(n).replace("₺", "");
}
function autoHideHeader() {
  var n = $(window).scrollTop();
  checkSimpleNavigation(n);
  previousTop = n;
  scrolling = !1;
}
function checkSimpleNavigation(n) {
  previousTop - n > scrollDelta || n + windowHeight + 20 > documentHeight
    ? mainHeader.removeClass("is-hidden")
    : n - previousTop > scrollDelta &&
      n > scrollOffset &&
      mainHeader.addClass("is-hidden");
  var t = $("body").hasClass("home"),
    i = $("#showcase").height();
  t
    ? n > i - 50
      ? mainHeader.addClass("alter1")
      : mainHeader.removeClass("alter1")
    : n > scrollOffset + 50
    ? mainHeader.addClass("alter1")
    : mainHeader.removeClass("alter1");
}
function loadScript(n, t) {
  var i, r, u;
  r = !1;
  i = document.createElement("script");
  i.type = "text/javascript";
  i.src = n;
  i.onload = i.onreadystatechange = function () {
    r || (this.readyState && this.readyState != "complete") || ((r = !0), t());
  };
  u = document.getElementsByTagName("script")[0];
  u.parentNode.insertBefore(i, u);
}
function loadCSS(n, t, i, r) {
  "use strict";
  var u = window.document.createElement("link"),
    e = t || window.document.getElementsByTagName("script")[0],
    f = window.document.styleSheets;
  u.rel = "stylesheet";
  u.href = n;
  u.media = "only x";
  r && (u.onload = r);
  e.parentNode.insertBefore(u, e);
  u.onloadcssdefined = function (n) {
    for (var i, t = 0; t < f.length; t++)
      f[t].href && f[t].href === u.href && (i = !0);
    i
      ? n()
      : setTimeout(function () {
          u.onloadcssdefined(n);
        });
  };
  u.onloadcssdefined(function () {
    u.media = i || "all";
  });
  return u;
}
var mainHeader = $("#header"),
  headerHeight = mainHeader.height(),
  windowHeight = $window.height(),
  documentHeight = $(document).height(),
  scrolling = !1,
  previousTop = 0,
  currentTop = 0,
  scrollDelta = 10,
  scrollOffset = 450,
  cookiemsg;
window.onresize = function () {
  windowStartupMobile
    ? windowsize >= 768 && location.reload()
    : windowsize < 768 && location.reload();
};
jQuery.event.special.touchstart = {
  setup: function (n, t, i) {
    this.addEventListener("touchstart", i, {
      passive: !t.includes("noPreventDefault"),
    });
  },
};
jQuery.event.special.touchmove = {
  setup: function (n, t, i) {
    this.addEventListener("touchmove", i, {
      passive: !t.includes("noPreventDefault"),
    });
  },
};
jQuery.event.special.wheel = {
  setup: function (n, t, i) {
    this.addEventListener("wheel", i, { passive: !0 });
  },
};
jQuery.event.special.mousewheel = {
  setup: function (n, t, i) {
    this.addEventListener("mousewheel", i, { passive: !0 });
  },
};
isCookieMsg &&
  ((cookiemsg = function () {
    $("body").addClass("cookie-notification");
  }),
  $(window).load(function () {
    var n = setTimeout(cookiemsg, 1e3);
  }),
  $(".cookiemsgclose").click(function () {
    $("body").removeClass("cookie-notification");
    $.ajax({
      type: "POST",
      url: "/cookie-notification",
      data: "set=1",
      async: !0,
    });
  }));
jQuery(document).ready(function (n) {
  function a(n, t) {
    var i = "";
    return n != "" && (i = y(n)), t + i;
  }
  function v(n, t, i) {
    return {
      ajax: {
        url: function () {
          return a(n, t);
        },
        dataType: "json",
        delay: 250,
        data: function (n) {
          return { search: n.term, page: n.page };
        },
        processResults: function (n) {
          if (n == "") return { results: [] };
          var t = JSON.parse(n);
          return { results: t };
        },
        cache: !0,
      },
      formatResult: function (n) {
        return n.name;
      },
      formatSelection: function (n) {
        return n.id;
      },
      escapeMarkup: function (n) {
        return n;
      },
      placeholder: seciniz_title,
      allowClear: !0,
      closeOnSelect: !i,
      language: dilStr,
    };
  }
  function y(t) {
    var i = n("#" + t + " option:selected").val();
    return i != "" && i != "undefined" ? i : "0";
  }
  var s = function () {
      var t = [];

      dilStr == "tr" &&
        t.push(
          '<div class="lngitem" style="padding:3px 12px 3px 0"><a href="">EN</a></div>'
        );
      dilStr == "en" &&
        t.push(
          '<div class="lngitem" style="padding:3px 12px 3px 0"><a href="">TR</a></div>'
        );
      n("nav#main-navigation").mmenu({
        extensions: ["effect-slide-menu", "pageshadow"],
        searchfield: { placeholder: "Ne aramıştınız?" },
        counters: !1,
        offCanvas: { position: "right" },
        dividers: { fixed: !0 },
        navbar: { title: "" },
        navbars: [
          {
            position: "top",
            content:
              '<a href="' +
              mainPageUrl +
              '" style="padding-bottom:0; padding-top:10px;"><img src="./assets/img/logo-mobile5e1f.png" width="99" height="99" style="max-height:60px; width:auto;" alt="Türkiye Petrolleri"></a>',
            height: 2,
          },
          { position: "top", content: ["prev", "title", "home"] },
          { position: "bottom", content: t },
        ],
      });
      n("nav#main-navigation").removeClass("navigation");
    },
    t,
    r,
    u,
    e,
    i,
    l;
  if (
    (n(window).load(function () {
      if (windowsize < 768)
        s(),
          n(".icerik table").each(function () {
            n(this).wrap('<div class="table-container"></div>');
          });
      else {
        mainHeader.on("click", ".nav-trigger", function (n) {
          n.preventDefault();
          mainHeader.toggleClass("nav-open");
        });
        n(window).on("scroll", function () {
          scrolling ||
            ((scrolling = !0),
            window.requestAnimationFrame
              ? requestAnimationFrame(autoHideHeader)
              : setTimeout(autoHideHeader, 250));
        });
        n(window).on("resize", function () {
          headerHeight = mainHeader.height();
        });
        n("#main-navigation .owl-carousel").each(function () {
          n(this).owlCarousel({
            loop: !0,
            center: !1,
            navText: [
              '<img src="/assets/img/nav-left-w1.png" width="11" height="29" alt="Previous" loading="lazy">',
              '<img src="/assets/img/nav-right-w1.png" width="11" height="29" alt="Next" loading="lazy">',
            ],
            responsiveClass: !0,
            margin: 19,
            dots: !1,
            nav: !0,
            responsive: { 0: { items: 3 }, 992: { items: 4 } },
          });
        });
      }
    }),
    n("#oilCity").length > 0)
  ) {
    t = n("#oilprice .owl-carousel");
    function f() {
      t.owlCarousel({
        loop: !0,
        margin: 40,
        responsiveClass: !0,
        navText: [
          '<img src="/assets/img/nav-left-b1.png" width="15" height="46" alt="Previous" loading="lazy">',
          '<img src="/assets/img/nav-right-b1.png" width="15" height="46" alt="Previous" loading="lazy">',
        ],
        autoplay: !0,
        autoplayTimeout: 3e3,
        autoplayHoverPause: !0,
        dots: !1,
        nav: !0,
        responsive: {
          0: { items: 2 },
          481: { items: 3 },
          768: { items: 2 },
          992: { items: 3 },
        },
      });
    }
    f();
    r = n("#oilCity").select2({
      placeholder: seciniz_title,
      dropdownAutoWidth: !0,
    });
    r.data("select2").$dropdown.addClass("citylist");
    r.on("change", function () {
      t.trigger("destroy.owl.carousel");
      t.html("");
      var i = n("option:selected", this).val(),
        r = urlLngPrefix + "/getprice?city=" + i;
      n.getJSON(r, function (i) {
        n.each(i, function (n, i) {
          t.append(
            '<div class="item"><h5>' +
              i.title +
              "</h5><p>" +
              i.price +
              "</p></div>"
          );
        });
        f();
      });
    });
  }
  if (
    (n(window).scroll(function () {
      n(this).scrollTop() > 100
        ? (n(".scroll-top").fadeIn("slow"),
          n(window).scrollTop() + n(window).height() >=
          n(document).height() - 80
            ? n(".scroll-top a").css({ bottom: "80px" })
            : n(".scroll-top a").css({ bottom: "40px" }))
        : n(".scroll-top").fadeOut("slow");
    }),
    n(".scroll-top>button").click(function () {
      return n("body,html").animate({ scrollTop: 0 }, 800), !1;
    }),
    n(".local").click(function () {
      var t = n(this),
        i = n(t).attr("href");
      n("html, body").animate({ scrollTop: n(i).offset().top }, 1e3);
    }),
    n("a[rel='external'], a[rel='nofollow']").each(function () {
      jQuery(this).attr("target", "_blank");
    }),
    n(".form-std input, .form-std textarea").focus(function () {
      var t = n(this).attr("id"),
        i = n('label[for="' + t + '"]'),
        r;
      (typeof t == "undefined" || t == null) &&
        (i = n(this).closest(".form-group").children(".floatinglabel"));
      r = i.hasClass("active");
      r || i.addClass("active");
    }),
    n(".form-std input, .form-std textarea").blur(function () {
      var t = n(this).attr("id"),
        i = n('label[for="' + t + '"]'),
        r;
      (typeof t == "undefined" || t == null) &&
        (i = n(this).closest(".form-group").children(".floatinglabel"));
      r = n(this).val();
      r || i.removeClass("active");
    }),
    n(".fancy").fancybox(),
    n(".fancyvideo").fancybox({
      type: "iframe",
      maxWidth: 640,
      maxHeight: 360,
      fitToView: !1,
      width: 640,
      height: 360,
    }),
    n(".printbtn").click(function (n) {
      n.preventDefault();
      window.print();
    }),
    n("#showcase .owl-carousel").owlCarousel({
      loop: !0,
      margin: 0,
      responsiveClass: !0,
      navText: [
        '<img src="/assets/img/nav-left-w2.png" width="23" height="69" alt="Previous" loading="lazy">',
        '<img src="/assets/img/nav-right-w2.png" width="23" height="69" alt="Next" loading="lazy">',
      ],
      autoplay: !0,
      autoplayTimeout: 3e3,
      autoplayHoverPause: !0,
      dots: !0,
      nav: !0,
      items: 1,
    }),
    n("#announcements .owl-carousel").owlCarousel({
      loop: !0,
      center: !1,
      lazyLoad: !0,
      responsiveClass: !0,
      margin: 19,
      dots: !0,
      nav: !1,
      responsive: { 0: { items: 1 }, 480: { items: 2 } },
    }),
    n("#productsnservices .owl-carousel").owlCarousel({
      loop: !0,
      center: !1,
      lazyLoad: !0,
      responsiveClass: !0,
      navText: [
        '<img src="/assets/img/nav-left-r1.png" width="31" height="64" alt="Previous" loading="lazy">',
        '<img src="/assets/img/nav-right-r1.png" width="31" height="64" alt="Next" loading="lazy">',
      ],
      dots: !1,
      nav: !0,
      responsive: {
        0: { margin: 29, items: 1 },
        480: { margin: 29, items: 2 },
        768: { margin: 29, items: 3 },
        1200: { margin: 59, items: 3 },
      },
    }),
    n("#contentgallery .owl-carousel").each(function () {
      n(this).owlCarousel({
        loop: !0,
        center: !1,
        navText: [
          '<img src="/assets/img/nav-left-w2.png" width="22" height="69" alt="Previous" loading="lazy">',
          '<img src="/assets/img/nav-right-w2.png" width="22" height="69" alt="Next" loading="lazy">',
        ],
        responsiveClass: !0,
        margin: 19,
        dots: !1,
        nav: !0,
        responsive: { 0: { items: 1 }, 480: { items: 2 }, 768: { items: 3 } },
      });
    }),
    (u = {
      placeholder: seciniz_title,
      allowClear: !0,
      closeOnSelect: !0,
      language: dilStr,
    }),
    (e = {
      placeholder: seciniz_title,
      allowClear: !0,
      closeOnSelect: !1,
      language: dilStr,
    }),
    n(".select2ized").length > 0 &&
      n(".select2ized").each(function () {
        var t = n(this).attr("multiple"),
          i = typeof t != typeof undefined && t !== !1,
          r = i ? e : u;
        n(this).select2(r);
      }),
    n("#city").length > 0)
  ) {
    var h = n("#city").attr("data-station"),
      c = n("#city").attr("data-hasoil"),
      o = n("#city").select2(u);
    if (n("#county").length > 0) {
      i = v(
        "city",
        urlLngPrefix + "/getcounties?station=" + h + "&hasOil=" + c + "&p=",
        !1
      );
      l = n("#county").select2(i);
      o.on("select2:select", function () {
        n("#county option").remove();
        n("#county").append("<option></option>").val("").change();
        n("#county").select2(i);
      });
      o.on("select2:unselecting", function () {
        n("#county option").remove();
        n("#county").append("<option></option>").val("").change();
        n("#county").select2(i);
      });
    }
  }
  isAnnouncement &&
    n.ajax({
      type: "GET",
      url: urlLngPrefix + "/announcements",
      cache: !1,
      success: function (t) {
        if (t != "") {
          var i = t.split("|");
          n.fancybox.open({
            href: i[0],
            helpers: { title: { type: "inside" }, buttons: {} },
            afterShow: function () {
              i.length > 1 &&
                n("img.fancybox-image")
                  .click(function () {
                    window.location.href = i[1];
                  })
                  .css({ cursor: "pointer" });
            },
          });
        }
      },
    });
});
/*!
loadCSS: load a CSS file asynchronously.
[c]2014 @scottjehl, Filament Group, Inc.
Licensed MIT
*/
