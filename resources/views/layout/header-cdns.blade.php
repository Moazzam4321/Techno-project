<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8" />
    <title>@yield('page-title')</title>

    <!-- Site favicon -->
    <link
        rel="apple-touch-icon"
        sizes="180x180"
        href="/template/vendors/images/apple-touch-icon.png"
    />
    <link
        rel="icon"
        type="image/png"
        sizes="32x32"
        href="/template/vendors/images/favicon-32x32.png"
    />
    <link
        rel="icon"
        type="image/png"
        sizes="16x16"
        href="/template/vendors/images/favicon-16x16.png"
    />

    <!-- Mobile Specific Metas -->
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1"
    />

    <!-- Google Font -->
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet"
    />
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="/template/vendors/styles/core.css" />
    <link
        rel="stylesheet"
        type="text/css"
        href="/template/vendors/styles/icon-font.min.css"
    />
    <link rel="stylesheet" type="text/css" href="/template/vendors/styles/style.css" />
    <!-- Google Tag Manager -->
    <script>
        (function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({ "gtm.start": new Date().getTime(), event: "gtm.js" });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != "dataLayer" ? "&l=" + l : "";
            j.async = true;
            j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, "script", "dataLayer", "GTM-NXZMQSS");
    </script>
    <!-- End Google Tag Manager -->
    @stack('stylesheet')
</head>