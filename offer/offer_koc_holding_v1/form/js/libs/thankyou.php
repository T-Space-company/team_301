<?php

if (isset($_POST['phone2'])) {
    include_once dirname(__FILE__) . '/config.php';

    // Если есть Facebook Pixel, активируем его
    if ($hasPixel && isset($FacebookPixel)) {
        ;
        echo "
        <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '$FacebookPixel');
        fbq('track', 'Lead');
        </script>
        ";
    }
    $subid = urlencode($_REQUEST['subid']);
    $country = urlencode($_REQUEST['country']);

    $post = [
        'f_name' => $_POST['f_name'],
        'l_name' => $_POST['l_name'],
        'email' => $_POST['email'],
        'phone2' => $_POST['phone2'],
        'lang' => $lang,
        'lp' => $offer,
        'lp_url' => $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'],
        'subid' => $subid,
        'country' => $country,
        'url_params' => $_POST['url_params'],
        'token' => uniqid("tok_", true),
        'domain' => $domain,
        'ip' => $ip,
        't_geo' => $geo,
        'pixel_id' => $FacebookPixel,
        'user_agent' => $_SERVER['HTTP_USER_AGENT'],
    ];

    $hasPixel = $FacebookPixel || $TiktokPixel || $GooglePixel;

    $fullUrl = 'https://dev13media.pro/api/ajax';
    $ch = curl_init($fullUrl);
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type:application/json']);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 3);
    curl_setopt($ch, CURLOPT_TIMEOUT, 3);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($post, JSON_UNESCAPED_UNICODE));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_HEADER, false);
    $resp = curl_exec($ch);
    curl_close($ch);

    $httpStatus = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $resp = json_decode($resp, true);

    if ($resp['success'] && $resp['message'] === 'Lead accepted') {
        $postbackUrl = 'https://' . $_SERVER['HTTP_HOST'] . '/fd5b7ed/postback?' . http_build_query([
            'subid' => $subid,
            'status' => 'lead',
            'sub_id_12' => $_POST['f_name'],
            'sub_id_13' => $_POST['l_name'],
            'sub_id_14' => $_POST['email'],
            'sub_id_15' => $_POST['phone2']
        ]);

        file_get_contents($postbackUrl);

    } elseif ($resp['success'] && $resp['message'] === 'Lead already exists') {
        $postbackUrl = 'https://' . $_SERVER['HTTP_HOST'] . '/fd5b7ed/postback?' . http_build_query([
            'subid' => $subid,
            'status' => 'rejected',
            'sub_id_12' => $_POST['f_name'],
            'sub_id_13' => $_POST['l_name'],
            'sub_id_14' => $_POST['email'],
            'sub_id_15' => $_POST['phone2'],
            'rejected_status' => 'rejected'
        ]);

        file_get_contents($postbackUrl);

    } elseif ($resp['success'] && $resp['message'] === 'Lead double') {
        $postbackUrl = 'https://' . $_SERVER['HTTP_HOST'] . '/fd5b7ed/postback?' . http_build_query([
            'subid' => $subid,
            'status' => 'rejected',
            'sub_id_12' => $_POST['f_name'],
            'sub_id_13' => $_POST['l_name'],
            'sub_id_14' => $_POST['email'],
            'sub_id_15' => $_POST['phone2'],
            'rejected_status' => 'rejected'
        ]);

        file_get_contents($postbackUrl);

    } else {
        $postbackUrl = 'https://' . $_SERVER['HTTP_HOST'] . '/fd5b7ed/postback?' . http_build_query([
            'subid' => $subid,
            'status' => 'lead',
            'sub_id_12' => $_POST['f_name'],
            'sub_id_13' => $_POST['l_name'],
            'sub_id_14' => $_POST['email'],
            'sub_id_15' => $_POST['phone2'],
        ]);

        file_get_contents($postbackUrl);
    }

    $filename = '../../out.txt';
    $text = file_get_contents($filename);
    $text .= "\n\n-------------------------------";
    $text .= "\n\nDate: " . date('m/d/Y H:i:s', time());
    $text .= "\n\nAction: Lead";
    $text .= "\n\nURL: " . $fullUrl;
    $text .= "\n\nData: " . json_encode($post, JSON_UNESCAPED_UNICODE);
    $text .= "\n\nResponse: " . json_encode($resp, JSON_UNESCAPED_UNICODE);
    file_put_contents($filename, $text);

    if ($httpStatus !== 200 || !$resp['success']) {
        sendError('send error', $resp, $post);
    }

    $redirectUrl = basename($thanks) . '?' . http_build_query([
        'f_name' => $_POST['f_name'],
        'l_name' => $_POST['l_name'],
        'country' => $country,
        'pixel' => $FacebookPixel
    ]);

    if ($resp['result']['autologinPage'] !== null && $brokerRedirect) {
        $redirectUrl = $resp['result']['autologinPage'];
    }

    httpRedirect($redirectUrl, $hasPixel ? 303 : 302);
}


function sendError($text, $err, $lead)
{
    $url = 'https://api.telegram.org/bot5515236176:AAGR6xr4wW3VDnxyeQl9Cbreh4TjD_Wfn0A/sendMessage';
    $requestHeaders = ['Content-Type: application/json'];
    $post = [
        'text' => '*' . $text . '*',
        'attachments' => [
            ['text' => json_encode($err)],
            ['text' => json_encode($lead)],
        ]
    ];

    $ch = curl_init();

    curl_setopt_array($ch, [
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_POSTFIELDS => json_encode($post),
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_HTTPHEADER => $requestHeaders
    ]);

    $response = curl_exec($ch);
    if ($response === false) {
        $err = curl_error($ch);
        curl_close($ch);
        throw new Exception($err);
    }
    curl_close($ch);
}

function httpRedirect($url, $code = 302)
{
    header('Location: ' . $url, true, $code);
    exit;
}
?>
<!doctype html>
<html lang="<? strtolower($lang) ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Congratulations!</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            width: 100%;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
            background-size: 400% 400%;
            animation: gradient 15s ease infinite;
            padding: 0;
            margin: 0;
            color: #fff
        }

        @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        h5 {
            color: white;
            font-size: 50px;
            text-align: center;
        }

        @media(max-width: 576px) {
            h5 {
                font-size: 25px;
            }
        }
    </style>
    <?php if ($_REQUEST['pixel'] || $_REQUEST['p'] || $_REQUEST['pixel_id'] || $_REQUEST['tp'] || $_REQUEST['gp']) {
        $GooglePixel = filter_input(INPUT_GET, 'GooglePixel', FILTER_SANITIZE_STRING);
        $FacebookPixel = filter_input(INPUT_GET, 'pixel', FILTER_SANITIZE_STRING) ?? filter_input(INPUT_GET, 'p', FILTER_SANITIZE_STRING) ?? filter_input(INPUT_GET, 'pixel_id', FILTER_SANITIZE_STRING);
        $TiktokPixel = filter_input(INPUT_GET, 'TiktokPixel', FILTER_SANITIZE_STRING);

        if ($GooglePixel) {
            echo "<!-- Global site tag (gtag.js) - Google Ads: $GooglePixel -->";
            echo "<script async src=\"https://www.googletagmanager.com/gtag/js?id=$GooglePixel\"></script>";
            echo "<script>";
            echo "window.dataLayer = window.dataLayer || [];";
            echo "function gtag(){dataLayer.push(arguments);}";
            echo "gtag('js', new Date());";
            echo "gtag('config', '$GooglePixel');";
            echo "</script>";
        }
    } ?>

    <?php if ($FacebookPixel): ?>
        <!-- Facebook Pixel Code -->
        <script>
            !function (f, b, e, v, n, t, s) {
                if (f.fbq)
                    return; n = f.fbq = function () { n.callMethod ? n.callMethod.apply(n, arguments) : n.queue.push(arguments) };
                if (!f._fbq)
                    f._fbq = n; n.push = n; n.loaded = !0; n.version = '2.0';
                n.queue = []; t = b.createElement(e); t.async = !0;
                t.src = v; s = b.getElementsByTagName(e)[0];
                s.parentNode.insertBefore(t, s)
            }(window, document, 'script',
                'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '<?php echo $FacebookPixel ?>');
            fbq('track', 'Lead');
            fbq('track', 'CompleteRegistration');
        </script>
        <!-- End Facebook Pixel Code -->

    <?php endif; ?>

    <?php if ($TiktokPixel): ?>
        <script>
            !function (w, d, t) {
                w.TiktokAnalyticsObject = t; var ttq = w[t] = w[t] || []; ttq.methods = ["page", "track", "identify", "instances", "debug", "on", "off", "once", "ready", "alias", "group", "enableCookie", "disableCookie"], ttq.setAndDefer = function (t, e) { t[e] = function () { t.push([e].concat(Array.prototype.slice.call(arguments, 0))) } }; for (var i = 0; i < ttq.methods.length; i++) ttq.setAndDefer(ttq, ttq.methods[i]); ttq.instance = function (t) { for (var e = ttq._i[t] || [], n = 0; n < ttq.methods.length; n++) ttq.setAndDefer(e, ttq.methods[n]); return e }, ttq.load = function (e, n) { var i = "https://analytics.tiktok.com/i18n/pixel/events.js"; ttq._i = ttq._i || {}, ttq._i[e] = [], ttq._i[e]._u = i, ttq._t = ttq._t || {}, ttq._t[e] = +new Date, ttq._o = ttq._o || {}, ttq._o[e] = n || {}; var o = document.createElement("script"); o.type = "text/javascript", o.async = !0, o.src = i + "?sdkid=" + e + "&lib=" + t; var a = document.REQUESTElementsByTagName("script")[0]; a.parentNode.insertBefore(o, a) };
                ttq.load('<?php echo $TiktokPixel ?>'); ttq.page();
            }(window, document, 'ttq');
        </script>
    <?php endif; ?>

    </script>


    <!-- PIXELS -->


    <style>
        .preloader {
            width: 100px;
            height: 100px;
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translateX(-50%) translateY(-50%);
            animation: rotatePreloader 2s infinite ease-in
        }

        button .preloader {
            width: 20px;
            height: 20px
        }

        @keyframes rotatePreloader {
            0% {
                transform: translateX(-50%) translateY(-50%) rotateZ(0)
            }

            100% {
                transform: translateX(-50%) translateY(-50%) rotateZ(-360deg)
            }
        }

        .preloader div {
            position: absolute;
            width: 100%;
            height: 100%;
            opacity: 0
        }

        .preloader div:before {
            content: "";
            position: absolute;
            left: 50%;
            top: 0;
            width: 10%;
            height: 10%;
            background-color: #4290fc;
            transform: translateX(-50%);
            border-radius: 50%
        }

        .preloader div:nth-child(1) {
            transform: rotateZ(0);
            animation: rotateCircle1 2s infinite linear;
            z-index: 9
        }

        @keyframes rotateCircle1 {
            0% {
                opacity: 0
            }

            0% {
                opacity: 1;
                transform: rotateZ(36deg)
            }

            7% {
                transform: rotateZ(0)
            }

            57% {
                transform: rotateZ(0)
            }

            100% {
                transform: rotateZ(-324deg);
                opacity: 1
            }
        }

        .preloader div:nth-child(2) {
            transform: rotateZ(36deg);
            animation: rotateCircle2 2s infinite linear;
            z-index: 8
        }

        @keyframes rotateCircle2 {
            5% {
                opacity: 0
            }

            5.0001% {
                opacity: 1;
                transform: rotateZ(0)
            }

            12% {
                transform: rotateZ(-36deg)
            }

            62% {
                transform: rotateZ(-36deg)
            }

            100% {
                transform: rotateZ(-324deg);
                opacity: 1
            }
        }

        .preloader div:nth-child(3) {
            transform: rotateZ(72deg);
            animation: rotateCircle3 2s infinite linear;
            z-index: 7
        }

        @keyframes rotateCircle3 {
            10% {
                opacity: 0
            }

            10.0002% {
                opacity: 1;
                transform: rotateZ(-36deg)
            }

            17% {
                transform: rotateZ(-72deg)
            }

            67% {
                transform: rotateZ(-72deg)
            }

            100% {
                transform: rotateZ(-324deg);
                opacity: 1
            }
        }

        .preloader div:nth-child(4) {
            transform: rotateZ(108deg);
            animation: rotateCircle4 2s infinite linear;
            z-index: 6
        }

        @keyframes rotateCircle4 {
            15% {
                opacity: 0
            }

            15.0003% {
                opacity: 1;
                transform: rotateZ(-72deg)
            }

            22% {
                transform: rotateZ(-108deg)
            }

            72% {
                transform: rotateZ(-108deg)
            }

            100% {
                transform: rotateZ(-324deg);
                opacity: 1
            }
        }

        .preloader div:nth-child(5) {
            transform: rotateZ(144deg);
            animation: rotateCircle5 2s infinite linear;
            z-index: 5
        }

        @keyframes rotateCircle5 {
            20% {
                opacity: 0
            }

            20.0004% {
                opacity: 1;
                transform: rotateZ(-108deg)
            }

            27% {
                transform: rotateZ(-144deg)
            }

            77% {
                transform: rotateZ(-144deg)
            }

            100% {
                transform: rotateZ(-324deg);
                opacity: 1
            }
        }

        .preloader div:nth-child(6) {
            transform: rotateZ(180deg);
            animation: rotateCircle6 2s infinite linear;
            z-index: 4
        }

        @keyframes rotateCircle6 {
            25% {
                opacity: 0
            }

            25.0005% {
                opacity: 1;
                transform: rotateZ(-144deg)
            }

            32% {
                transform: rotateZ(-180deg)
            }

            82% {
                transform: rotateZ(-180deg)
            }

            100% {
                transform: rotateZ(-324deg);
                opacity: 1
            }
        }

        .preloader div:nth-child(7) {
            transform: rotateZ(216deg);
            animation: rotateCircle7 2s infinite linear;
            z-index: 3
        }

        @keyframes rotateCircle7 {
            30% {
                opacity: 0
            }

            30.0006% {
                opacity: 1;
                transform: rotateZ(-180deg)
            }

            37% {
                transform: rotateZ(-216deg)
            }

            87% {
                transform: rotateZ(-216deg)
            }

            100% {
                transform: rotateZ(-324deg);
                opacity: 1
            }
        }

        .preloader div:nth-child(8) {
            transform: rotateZ(252deg);
            animation: rotateCircle8 2s infinite linear;
            z-index: 2
        }

        @keyframes rotateCircle8 {
            35% {
                opacity: 0
            }

            35.0007% {
                opacity: 1;
                transform: rotateZ(-216deg)
            }

            42% {
                transform: rotateZ(-252deg)
            }

            92% {
                transform: rotateZ(-252deg)
            }

            100% {
                transform: rotateZ(-324deg);
                opacity: 1
            }
        }

        .preloader div:nth-child(9) {
            transform: rotateZ(288deg);
            animation: rotateCircle9 2s infinite linear;
            z-index: 1
        }

        @keyframes rotateCircle9 {
            40% {
                opacity: 0
            }

            40.0008% {
                opacity: 1;
                transform: rotateZ(-252deg)
            }

            47% {
                transform: rotateZ(-288deg)
            }

            97% {
                transform: rotateZ(-288deg)
            }

            100% {
                transform: rotateZ(-324deg);
                opacity: 1
            }
        }

        .preloader div:nth-child(10) {
            transform: rotateZ(324deg);
            animation: rotateCircle10 2s infinite linear;
            z-index: 0
        }

        @keyframes rotateCircle10 {
            45% {
                opacity: 0
            }

            45.0009% {
                opacity: 1;
                transform: rotateZ(-288deg)
            }

            52% {
                transform: rotateZ(-324deg)
            }

            102% {
                transform: rotateZ(-324deg)
            }

            100% {
                transform: rotateZ(-324deg);
                opacity: 1
            }
        }
    </style>
</head>

<body>


    <?php if ($_POST['phone2']): ?>
        <div class="preloader">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    <?php else: ?>
        <style>
            body {
                width: 100%;
                height: 100vh;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                background-color: #05072c;
                padding: 0;
                margin: 0;
                color: #fff
            }

            img {}

            h5 {
                color: white;
                font-size: 50px;
                text-align: center;
            }

            @media(max-width: 576px) {
                img {
                    width: 100%;
                }

                h5 {
                    font-size: 25px;
                }
            }
        </style>
        <?php
        if (isset($lang) && $lang == 'pl') {
            $thanks = 'Dziękujemy za złożenie wniosku!';
            $contact = 'Nasz menadżer skontaktuje się z Tobą w ciągu kilku minut i przekaże Ci wszelkie uprawnienia dostępu do systemu.';
        } elseif (isset($lang) && $lang == 'ar') {
            $thanks = 'شكرا لتقديم الطلب!';
            $contact = 'سيتصل بك مديرنا في غضون دقائق قليلة وسيقدم لك جميع حقوق الوصول إلى النظام.';
        } elseif (isset($lang) && $lang == 'es') {
            $thanks = '¡Gracias por enviar la solicitud!';
            $contact = 'Nuestro gerente se comunicará con usted en unos minutos y le proporcionará todos los derechos de acceso al sistema.';
        } elseif (isset($lang) && $lang == 'it') {
            $thanks = 'Grazie per aver inviato la domanda!';
            $contact = 'Il nostro manager ti contatterà entro pochi minuti e ti fornirà tutti i diritti di accesso al sistema.';
        } elseif (isset($lang) && $lang == 'pt') {
            $thanks = 'Obrigado por enviar a solicitação!';
            $contact = 'Nosso gerente entrará em contato com você em alguns minutos e fornecerá todos os direitos de acesso ao sistema.';
        } elseif (isset($lang) && $lang == 'de') {
            $thanks = 'Vielen Dank für die Einreichung der Anfrage!';
            $contact = 'Unser Manager wird sich in wenigen Minuten bei Ihnen melden und Ihnen alle Zugriffsrechte auf das System zur Verfügung stellen.';
        } elseif (isset($lang) && $lang == 'fr') {
            $thanks = 'Merci d\'avoir soumis la demande!';
            $contact = 'Notre responsable vous contactera dans quelques minutes et vous fournira tous les droits d\'accès au système.';
        } elseif (isset($lang) && $lang == 'ru') {
            $thanks = 'Благодарим за заявку!';
            $contact = 'Наш менеджер свяжется с Вами в течение нескольких минут и предоставит все права доступа к системе.';
        } else {
            $thanks = 'Thank you for submitting the application!';
            $contact = 'Our manager will contact you within a few minutes and will provide you with all the access rights to the system.';
        }

        ?>

        <h5>
            <i class="fas fa-cogs"></i>
            <?php echo $thanks; ?>
            <br>
            <?php echo $contact; ?>
            <br>
        </h5>
    <?php endif; ?>

</body>

</html>