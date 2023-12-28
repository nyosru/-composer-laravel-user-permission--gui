<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Управление правами доступа пользователей</title>

    <link type="image/x-icon" href="https://php-cat.com/phpcat/favcat.ico" rel="shortcut icon"/>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/tw-elements.min.css"/>

    <script src="https://cdn.tailwindcss.com/3.3.0"></script>
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                fontFamily: {
                    sans: ["Roboto", "sans-serif"],
                    body: ["Roboto", "sans-serif"],
                    mono: ["ui-monospace", "monospace"],
                },
            },
            corePlugins: {
                preflight: false,
            },
        };
    </script>

    {{--    @livewireStyles--}}

</head>

<body class="antialiased">

<header>
    @include('phpcatcom/permission-gui::layouts.header')
</header>
<main style="min-height:80vh;">
    <div class="container mx-auto">
        <div class="grid grid-cols-4 gap-4">
            <div>
                @include('phpcatcom/permission-gui::layouts.menu')
            </div>
            <div class="col-span-3">@yield('content')</div>
        </div>
    </div>
</main>
@include('phpcatcom/permission-gui::layouts.footer')
</body>

{{--<script src="/bg/three.min.js"></script>--}}
{{--<script src="/bg/bg-22.js"></script>--}}

{{--<script src="/bg/bg-24.js"></script>--}}
{{--<script src="/bg/bg-42.js"></script>--}}

{{--<style>#bg-42 {--}}
{{--        min-height: 520px;--}}
{{--        margin: 20px 0;--}}
{{--    }</style>--}}

</html>
