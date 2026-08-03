@props([
    'links' => [],
    'variant' => 'solid',
    'brand' => 'Crema',
    'ctaText' => 'Order ahead',
    'ctaLink' => '/visit',
])
<!--
    The site header. Every color rides the --nav-* variables in site.css, so
    the bar inverts between its two states: solid pages read ink on canvas,
    while variant "overlay" starts transparent with white type over the hero
    photograph, then takes its surface once the page scrolls. The cup mark is
    inline SVG, so it follows the theme's ink everywhere.
-->
<header id="header" data-nav="{{ $variant }}" class="fixed inset-x-0 top-0 z-40">
    <div class="nav-bar">
        <div class="mx-auto flex w-full max-w-6xl items-center gap-3 px-6 py-4">

            <a href="/" aria-label="Homepage" class="flex items-center gap-2.5 text-(--nav-ink) transition-colors duration-300">
                <svg viewBox="0 0 24 24" class="size-6" fill="currentColor" fill-rule="evenodd" aria-hidden="true"><path d="M12 1.6a10.4 10.4 0 1 0 0 20.8 10.4 10.4 0 0 0 0-20.8Zm0 2.9a7.5 7.5 0 1 1 0 15 7.5 7.5 0 0 1 0-15Z"/><path d="M16.6 14.9A5.9 5.9 0 1 1 9.1 7.4a5.9 5.9 0 0 0 7.5 7.5Z"/></svg>
                <span class="font-display text-2xl">{{ $brand }}</span>
            </a>

            <nav class="ml-auto flex items-center gap-1 max-md:hidden" aria-label="Main">
                @foreach ($links as $link)
                    <a href="{{ $link->url }}" class="rounded-full px-4 py-2 text-sm font-medium text-(--nav-muted) transition-colors duration-200 hover:bg-(--nav-hover) hover:text-(--nav-ink)">{{ $link->text }}</a>
                @endforeach
            </nav>

            <div class="flex items-center gap-2 md:ml-4 max-md:ml-auto">
                <a href="{{ $ctaLink }}" class="rounded-full border border-(--nav-border) px-5 py-2.5 text-sm font-medium text-(--nav-ink) transition-colors duration-200 hover:bg-(--nav-hover) max-sm:hidden">{{ $ctaText }}</a>
                <button type="button" data-menu-button aria-expanded="false" aria-label="Toggle menu" class="flex size-11 items-center justify-center rounded-full border border-(--nav-border) text-(--nav-ink) transition-colors duration-200 hover:bg-(--nav-hover) md:hidden">
                    <svg viewBox="0 0 20 20" class="size-4 fill-current" aria-hidden="true"><path fill-rule="evenodd" d="M2 4.75A.75.75 0 0 1 2.75 4h14.5a.75.75 0 0 1 0 1.5H2.75A.75.75 0 0 1 2 4.75Zm0 10.5a.75.75 0 0 1 .75-.75h14.5a.75.75 0 0 1 0 1.5H2.75a.75.75 0 0 1-.75-.75ZM2 10a.75.75 0 0 1 .75-.75h14.5a.75.75 0 0 1 0 1.5H2.75A.75.75 0 0 1 2 10Z" clip-rule="evenodd"/></svg>
                </button>
            </div>

        </div>
    </div>

    <div data-mobile-panel class="absolute inset-x-0 top-full mx-4 rounded-2xl border border-line bg-panel p-3 shadow-xl shadow-ink/10 md:hidden">
        <nav class="flex flex-col" aria-label="Mobile">
            @foreach ($links as $link)
                <a href="{{ $link->url }}" class="rounded-xl px-4 py-3.5 text-base font-medium text-ink transition-colors duration-200 hover:bg-raised">{{ $link->text }}</a>
            @endforeach
        </nav>
        <div class="mt-2 border-t border-line pt-3">
            <a href="{{ $ctaLink }}" class="block rounded-full bg-accent px-4 py-3.5 text-center text-sm font-medium text-accent-ink">{{ $ctaText }}</a>
        </div>
    </div>
</header>
