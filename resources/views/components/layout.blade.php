<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0"/>

    <title>{{ $title ?? 'State of HTML Demos' }}</title>

    <link rel="stylesheet"
          href="https://unpkg.com/normalize.css@8.0.1/normalize.css"/>

    @vite(['resources/scss/app.scss', 'resources/scss/style.scss', 'resources/js/app.js'])

    <meta http-equiv="X-UA-Compatible"
          content="IE=edge"/>

    <meta charset="UTF-8"/>
</head>

<body>
<main>
    {{ $slot }}
</main>
</body>

</html>
