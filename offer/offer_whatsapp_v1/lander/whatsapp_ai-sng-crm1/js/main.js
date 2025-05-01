const _0x52ffb0 = _0x45e4;
!(function ($, t) {
    let x = _0x45e4,
        e = $();
    for (;;)
        try {
            let o =
                parseInt(x(459)) / 1 +
                (-parseInt(x(413)) / 2) * (-parseInt(x(437)) / 3) +
                (-parseInt(x(449)) / 4) * (parseInt(x(412)) / 5) +
                (parseInt(x(408)) / 6) * (-parseInt(x(450)) / 7) +
                (parseInt(x(427)) / 8) * (parseInt(x(466)) / 9) +
                -parseInt(x(438)) / 10 +
                (-parseInt(x(420)) / 11) * (-parseInt(x(432)) / 12);
            if (230288 === o) break;
            e.push(e.shift());
        } catch (a) {
            e.push(e.shift());
        }
})(_0x4231, 230288);
const year = document[_0x52ffb0(417)](_0x52ffb0(457)),
    greenButton = document[_0x52ffb0(410)](_0x52ffb0(443)),
    modalLead = document[_0x52ffb0(417)](_0x52ffb0(411)),
    blackBtn = document[_0x52ffb0(417)](_0x52ffb0(464)),
    form = document.querySelector(_0x52ffb0(440)),
    leadTitle = document[_0x52ffb0(417)](_0x52ffb0(399)),
    leadSubtitle = document[_0x52ffb0(417)](_0x52ffb0(434)),
    counter = document[_0x52ffb0(417)](_0x52ffb0(423)),
    maxProgressValue = 500;
let previousProfits = {
        apple: 206.21,
        meta: 693.21,
        netflix: 206.21,
        microsoft: 206.21,
    },
    counterStarted = !1,
    counterInterval,
    startCount = localStorage[_0x52ffb0(419)](_0x52ffb0(430))
        ? parseInt(localStorage[_0x52ffb0(419)]("counterValue"))
        : 12432;
function initCurrentYear() {
    let $ = _0x52ffb0,
        t = new Date()[$(424)]();
    year[$(426)] = t;
}
function getRandomProfit($, t) {
    let x = _0x52ffb0;
    return Math[x(393)](Math[x(458)]() * (t - $ + 1)) + $;
}
function updateProfits() {
    let $ = _0x52ffb0,
        t = getRandomProfit(250, 450),
        x = getRandomProfit(250, 450),
        e = getRandomProfit(250, 450),
        o = getRandomProfit(250, 450);
    updateCompanyProfit($(416), $(396), t, previousProfits.apple),
        updateCompanyProfit(".meta-profit", $(422), x, previousProfits.meta),
        updateCompanyProfit(
            ".netflix-profit",
            $(414),
            e,
            previousProfits.netflix
        ),
        updateCompanyProfit($(453), $(454), o, previousProfits[$(462)]),
        (previousProfits[$(447)] = t),
        (previousProfits[$(467)] = x),
        (previousProfits[$(425)] = e),
        (previousProfits[$(462)] = o);
}
function updateCompanyProfit($, t, x, e) {
    let o = _0x52ffb0,
        a = document[o(417)]($);
    a &&
        (a.classList[o(461)](o(460), o(394)),
        a.offsetWidth,
        x < e ? a[o(444)].add(o(460)) : x > e && a[o(444)][o(409)](o(394)),
        (a[o(465)] = formatProfit(x)),
        (document[o(417)](t)[o(469)][o(463)] = (x / 500) * 100 + "%"));
}
function formatProfit($) {
    let t = _0x52ffb0,
        x = "+€" + $[t(405)](2);
    return x[t(439)]("")
        [t(445)](($) => t(404) + $ + t(391))
        [t(421)]("");
}
function initStartCounter() {
    let $ = _0x52ffb0;
    (counter[$(426)] = startCount),
        (counterInterval = setInterval(startCounter, 2e3));
}
function startCounter() {
    let $ = _0x52ffb0;
    (startCount += Math.floor(3 * Math.random()) + 1),
        (counter[$(426)] = startCount),
        localStorage[$(448)]($(430), startCount);
}
function openModals($) {
    let t = _0x52ffb0;
    $[t(444)].add(t(431)),
        (document[t(456)].style[t(468)] = "hidden"),
        counterStarted || (initStartCounter(), (counterStarted = !0));
}
function _0x4231() {
    let $ = [
        "metaKey",
        "ctrlKey",
        "counterValue",
        "active",
        "60BziVJh",
        "8haNDvd",
        ".modal-lead__content-subtitle",
        "push",
        "DOMContentLoaded",
        "27vOnXle",
        "3483820snIDPu",
        "split",
        ".modal-lead__content-form",
        "addEventListener",
        "block",
        ".green-btn",
        "classList",
        "map",
        "platform",
        "apple",
        "setItem",
        "1636EEydVc",
        "4606zdHHwN",
        "fade-out",
        "Mac",
        ".microsoft-profit",
        ".microsoft-progress",
        "none",
        "body",
        ".current-year",
        "random",
        "356858cMMTpB",
        "spin-up",
        "remove",
        "microsoft",
        "width",
        ".black-btn",
        "innerHTML",
        "4125159limkoB",
        "meta",
        "overflow",
        "style",
        "forEach",
        "</span>",
        "display",
        "floor",
        "spin-down",
        "keydown",
        ".apple-progress",
        "372150KuMURl",
        "ПОСЛЕДНИЙ ШАГ",
        ".modal-lead__content-title",
        "1585377sbcTER",
        "7260QLTKIQ",
        "stopPropagation",
        "1335zQETNI",
        "<span>",
        "toFixed",
        "preventDefault",
        "shift",
        "960RGPZfA",
        "add",
        "querySelectorAll",
        ".modal-lead",
        "3665gbTkBB",
        "74UEkGJY",
        ".netflix-progress",
        "450850uoaWvy",
        ".apple-profit",
        "querySelector",
        "252388twwScw",
        "getItem",
        "370051yFOlSA",
        "join",
        ".meta-progress",
        "#counter",
        "getFullYear",
        "netflix",
        "textContent",
        "8zWnwoE",
    ];
    return (_0x4231 = function () {
        return $;
    })();
}
function changeTextModal() {
    let $ = _0x52ffb0;
    (leadTitle.textContent = $(398)),
        (leadSubtitle[$(426)] = "Забронируйте место в программе!");
}
function showLeadForm() {
    let $ = _0x52ffb0;
    blackBtn.classList[$(409)]($(451)),
        leadTitle.classList[$(409)]("fade-out"),
        leadSubtitle[$(444)][$(409)]($(451)),
        counterInterval && clearInterval(counterInterval),
        setTimeout(() => {
            let t = $;
            (blackBtn[t(469)][t(392)] = t(455)),
                (form[t(469)][t(392)] = t(442)),
                changeTextModal();
        }, 400);
}
function _0x45e4($, t) {
    let x = _0x4231();
    return (_0x45e4 = function ($, t) {
        return x[($ -= 391)];
    })($, t);
}
function initApp() {
    initCurrentYear(),
        updateProfits(),
        setInterval(updateProfits, 5e3),
        setInterval(() => openModals(modalLead), 3e4);
}
function _0x1b5c($, t) {
    var x = _0x37ac();
    return (_0x1b5c = function ($, t) {
        return x[($ -= 106)];
    })($, t);
}
function _0x37ac() {
    let $ = _0x52ffb0;
    var t = [
        $(441),
        $(403),
        $(415),
        $(397),
        $(433),
        $(402),
        "oncontextmenu",
        "9IpTsYt",
        "2304519SPeSIz",
        $(446),
        "keyCode",
        $(400),
        $(429),
        "7528610HBMDNE",
        $(406),
        $(428),
        $(401),
        $(418),
        "body",
    ];
    return (_0x37ac = function () {
        return t;
    })();
}
blackBtn[_0x52ffb0(441)]("click", () => showLeadForm()),
    greenButton[_0x52ffb0(470)](($) => {
        let t = _0x52ffb0;
        $[t(441)]("click", () => {
            openModals(modalLead);
        });
    }),
    document[_0x52ffb0(441)](_0x52ffb0(436), () => {
        initApp();
    }),
    (function ($, t) {
        let x = _0x52ffb0;
        for (var e = _0x1b5c, o = $(); ; )
            try {
                if (
                    parseInt(e(123)) / 1 +
                        -parseInt(e(124)) / 2 +
                        (parseInt(e(109)) / 3) * (parseInt(e(119)) / 4) +
                        (parseInt(e(122)) / 5) * (parseInt(e(118)) / 6) +
                        (-parseInt(e(110)) / 7) * (-parseInt(e(106)) / 8) +
                        parseInt(e(113)) / 9 +
                        -parseInt(e(115)) / 10 ==
                    529645
                )
                    break;
                o.push(o.shift());
            } catch (a) {
                o[x(435)](o[x(407)]());
            }
    })(_0x37ac, 529645),
    (window.onload = function () {
        let $ = _0x52ffb0;
        var t = _0x1b5c;
        (document[t(120)][t(108)] = function () {
            return !1;
        }),
            window[t(121)]("selectstart", function ($) {
                $[t(116)]();
            }),
            document[t(121)](
                $(395),
                function (x) {
                    var e = t;
                    83 == x[e(112)] &&
                        (navigator[e(111)].match($(452))
                            ? x[e(117)]
                            : x[e(114)]) &&
                        (x[e(116)](), x[e(107)]());
                },
                !1
            );
    });
