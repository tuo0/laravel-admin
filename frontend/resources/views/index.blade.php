<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ env('APP_NAME') }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{ mix('css/vendor.css') }}">
    <script>
        if(window.ActiveXObject || "ActiveXObject" in window){
            var polyfill = document.createElement("script");
            polyfill.src = 'js/polyfill.min.js';
            window.document.head.appendChild(polyfill);
        }
    </script>
</head>
<body>
    <div id="app"></div>

    <script src="{{ mix('/js/manifest.js' ) }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.11"></script>
    <script src="//unpkg.com/element-ui@2.13.0/lib/index.js"></script>
    <script src="{{ mix('/js/vendor.js' ) }}"></script>
    <script src="{{ mix('/js/app.js' ) }}"></script>
</body>
</html>
