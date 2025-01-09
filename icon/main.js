window.addEventListener("load", function () {


  /** Estimate */

  function formatNumber(nStr) {
    nStr += "";
    x = nStr.split(".");
    x1 = x[0];
    x2 = x.length > 1 ? "." + x[1] : "";
    var rgx = /(\d+)(\d{3})/;
    while (rgx.test(x1)) {
      x1 = x1.replace(rgx, "$1" + "," + "$2");
    }
    return x1 + x2;
  }

  $("#estimate-slider").slider({
    tooltip: "always",
    formatter: function (value) {
      return "₺ " + formatNumber(value);
    },
  });
  $("#estimate-slider").on("slide", function (e) {
    var result = e.value * 3.5112;
    $(".card-estimate .card-estimate-result span").html("₺ " + formatNumber(result.toFixed(0)));
  });
});
