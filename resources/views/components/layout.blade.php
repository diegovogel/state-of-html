<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0"/>

    <title>{{ $title ?? 'State of HTML Demos' }}</title>

    <link rel="stylesheet"
          href="https://unpkg.com/normalize.css@8.0.1/normalize.css"/>

    @vite(['resources/scss/app.scss', 'resources/js/app.js'])

    @stack('stylesheets')

    @stack('head-scripts')

    <meta http-equiv="X-UA-Compatible"
          content="IE=edge"/>

    <meta charset="UTF-8"/>
</head>

<body>

<main>
    <nav class="main-nav">
        <a href="/demo-a">Demo A</a>
        <a href="/demo-b">Demo B</a>
        <a href="/demo-c">Demo C</a>
        <a href="/more">More</a>
    </nav>
    {{ $slot }}
</main>

@stack('body-scripts')

</body>

</html>
