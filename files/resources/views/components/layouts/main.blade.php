@props(['title' => 'Home', 'description' => '', 'navStyle' => 'solid'])
<!doctype html>
<html lang="en" class="scroll-smooth {{ $site->theme->appearance_class ?? '' }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title }} · {{ $site->name }}</title>
    <meta name="description" content="{{ $description }}">

    <link rel="icon" href="/favicon.svg" type="image/svg+xml">

    <!-- DM Serif Display sets the headlines; DM Sans carries the body and the board. -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="{{ $site->theme->fonts_url ?? 'https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=DM+Sans:wght@400;500;600&display=swap' }}" rel="stylesheet">

    <!-- Loads Tailwind, inlines the theme tokens, then the board + motion utilities -->
    @vite(['resources/css/theme.css', 'resources/css/site.css'])

    <!-- Flag JS support before first paint so scroll reveals never flash (see main.js) -->
    <script>document.documentElement.classList.add('js')</script>
    <script src="/js/main.js" defer></script>
</head>
<body class="min-h-dvh bg-canvas font-sans text-ink antialiased">

    <!-- The site-wide bar. Its links live in resources/data/site.json (nav_links). -->
    <x-nav :links="$site->nav_links" :variant="$navStyle"/>

    <!-- Pages that open with photography run under the bar on purpose (navStyle="overlay"). -->
    <main class="relative">
        {{ $slot }}
    </main>

    <x-footer :explore="$site->footer_explore" :hours="$site->hours"/>

</body>
</html>
