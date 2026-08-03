@props([
    'eyebrow' => 'Today at the bar',
    'heading' => 'The board',
    'statusText' => 'Pour-over until 15:30',
    'espressoHeading' => 'Espresso',
    'filterHeading' => 'Filter & brew',
    'todayLabel' => 'On filter today',
    'todayName' => 'Kirundo',
    'todayOrigin' => 'Nkonge Hill · Kayanza, Burundi',
    'todayNotes' => 'Redcurrant, brown sugar, orange peel',
    'todayProcess' => 'Washed Red Bourbon, 1,750 m',
    'todayLinkText' => 'Read about this coffee',
    'todayLink' => '/coffee/kirundo',
    'footnote' => 'Prices in pounds. Oat, soy and whole milk cost the same, and a filter refill is half price on the same day.',
    'espresso' => [],
    'filter' => [],
])
<!--
    THE COUNTER BOARD — the board behind the till, set in type.

    Two columns of dot-leader rows under hand-set headings, with the day's
    filter coffee set into the middle as a card. The leaders are drawn in CSS
    (see .leader-row in site.css) from currentColor, so they follow the
    palette rather than being an image. The two lists read the espresso and
    filter collections directly; edit them in the Content drawer.
-->
<section id="counter-board" class="bg-board py-20 text-board-ink sm:py-28 lg:py-32">
    <div class="mx-auto w-full max-w-6xl px-6">

        <div class="flex flex-wrap items-end justify-between gap-6 border-b border-board-line pb-8" data-reveal>
            <div>
                <p class="text-xs font-medium tracking-[0.22em] text-board-muted uppercase">{{ $eyebrow }}</p>
                <h2 class="mt-3 font-display text-4xl sm:text-5xl">{{ $heading }}</h2>
            </div>
            <p class="inline-flex items-center gap-2.5 rounded-full border border-board-line px-4 py-2 text-sm text-board-muted">
                <span class="size-1.5 rounded-full bg-board-accent" aria-hidden="true"></span>
                {{ $statusText }}
            </p>
        </div>

        <div class="mt-12 grid gap-x-16 gap-y-12 lg:grid-cols-[1fr_auto_1fr]">

            <div class="reveal-1" data-reveal>
                <p class="text-xs font-medium tracking-[0.22em] text-board-muted uppercase">{{ $espressoHeading }}</p>
                <ul class="mt-6 flex flex-col gap-4">
                    @foreach ($espresso as $item)
                        <li class="menu-item text-board-ink">
                            <span class="leader-row">
                                <span class="shrink-0 text-lg">{{ $item->name }}</span>
                                <span class="leader" aria-hidden="true"></span>
                                <span class="leader-price text-lg">{{ $item->price }}</span>
                            </span>
                            <span class="mt-1 block max-w-md text-sm text-board-muted">{{ $item->detail }}</span>
                        </li>
                    @endforeach
                </ul>
            </div>

            <!-- The day's filter, set into the board like a pinned card. -->
            <div class="reveal-2 self-start rounded-2xl border border-board-line bg-board-line/40 p-8 lg:w-72" data-reveal>
                <p class="text-xs font-medium tracking-[0.22em] text-board-accent uppercase">{{ $todayLabel }}</p>
                <p class="mt-4 font-display text-3xl leading-tight">{{ $todayName }}</p>
                <p class="mt-2 text-sm text-board-muted">{{ $todayOrigin }}</p>
                <p class="mt-6 border-t border-board-line pt-5 text-base/7 text-board-ink">{{ $todayNotes }}</p>
                <p class="mt-2 text-sm text-board-muted">{{ $todayProcess }}</p>
                <a href="{{ $todayLink }}" class="mt-6 inline-flex items-center gap-1.5 text-sm font-medium text-board-ink underline decoration-board-accent underline-offset-4 transition-colors duration-200 hover:text-board-accent">
                    {{ $todayLinkText }}
                    <svg viewBox="0 0 16 16" class="size-3.5 fill-current" aria-hidden="true"><path d="M6.2 3.3 10.9 8l-4.7 4.7-1.1-1.1L8.7 8 5.1 4.4z"/></svg>
                </a>
            </div>

            <div class="reveal-3" data-reveal>
                <p class="text-xs font-medium tracking-[0.22em] text-board-muted uppercase">{{ $filterHeading }}</p>
                <ul class="mt-6 flex flex-col gap-4">
                    @foreach ($filter as $item)
                        <li class="menu-item text-board-ink">
                            <span class="leader-row">
                                <span class="shrink-0 text-lg">{{ $item->name }}</span>
                                <span class="leader" aria-hidden="true"></span>
                                <span class="leader-price text-lg">{{ $item->price }}</span>
                            </span>
                            <span class="mt-1 block max-w-md text-sm text-board-muted">{{ $item->detail }}</span>
                        </li>
                    @endforeach
                </ul>
            </div>

        </div>

        <p class="mt-14 border-t border-board-line pt-8 text-sm text-board-muted" data-reveal>{{ $footnote }}</p>

    </div>
</section>
