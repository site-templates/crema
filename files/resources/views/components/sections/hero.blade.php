@props([
    'eyebrow' => 'Roastery & coffee bar · Bristol',
    'heading' => 'The corner shop that roasts its own',
    'body' => 'Twelve kilos at a time, twice a week, on a drum we can hear from the bar. Whatever is in your cup was green nine days ago and we can tell you whose farm it came from.',
    'image' => '/images/room.jpg',
    'imageAlt' => 'The coffee bar in the late afternoon, sun across the counter',
    'primaryText' => "See what we're pouring",
    'primaryLink' => '/menu',
    'secondaryText' => 'Find the shop',
    'secondaryLink' => '/visit',
    'statusLabel' => 'Open today',
    'statusValue' => '7:00 – 16:00',
])
<!--
    The opening. A full-bleed photograph with the headline set hard against
    the left edge rather than centred, and the day's hours pinned to the
    opposite corner — the asymmetry is the point. Runs under the transparent
    bar, so pages using this section pass navStyle="overlay" to the layout.
-->
<section id="hero" class="relative isolate flex min-h-[92svh] items-end overflow-hidden bg-board">

    @if ($image)
    <img src="{{ $image }}" alt="{{ $imageAlt }}" class="absolute inset-0 -z-10 size-full object-cover" width="2400" height="1600">
    @endif

    <!--
        Two scrims, so the section survives whatever photograph is dropped in.
        The first carries the headline; the second is a short wash under the
        transparent bar, whose type is white and would otherwise disappear
        against a bright ceiling or window.
    -->
    <div class="absolute inset-0 -z-10 bg-gradient-to-t from-board via-board/75 to-board/35" aria-hidden="true"></div>
    <div class="absolute inset-x-0 top-0 -z-10 h-40 bg-gradient-to-b from-board/75 to-transparent" aria-hidden="true"></div>

    <div class="mx-auto w-full max-w-6xl px-6 pt-32 pb-14 sm:pb-20">
        <div class="flex flex-col gap-10 lg:flex-row lg:items-end lg:justify-between">

            <div class="max-w-2xl">
                <p class="text-xs font-medium tracking-[0.22em] text-board-muted uppercase" data-reveal>{{ $eyebrow }}</p>

                <h1 class="reveal-1 mt-6 font-display text-[clamp(3rem,8vw,5.5rem)] leading-[0.95] text-balance text-board-ink" data-reveal>{{ $heading }}</h1>

                <p class="reveal-2 mt-7 max-w-xl text-base/8 text-pretty text-board-muted" data-reveal>{{ $body }}</p>

                <div class="reveal-3 mt-9 flex flex-wrap items-center gap-3" data-reveal>
                    <a href="{{ $primaryLink }}" class="rounded-full bg-accent px-7 py-3.5 text-sm font-medium text-accent-ink transition-opacity duration-200 hover:opacity-90">{{ $primaryText }}</a>
                    <a href="{{ $secondaryLink }}" class="rounded-full border border-board-line px-7 py-3.5 text-sm font-medium text-board-ink transition-colors duration-200 hover:bg-board-line">{{ $secondaryText }}</a>
                </div>
            </div>

            <!-- The hours plate, anchored to the far corner. -->
            <div class="reveal-4 shrink-0 border-l-2 border-accent pl-5" data-reveal>
                <p class="text-xs font-medium tracking-[0.22em] text-board-muted uppercase">{{ $statusLabel }}</p>
                <p class="mt-2 font-display text-3xl text-board-ink">{{ $statusValue }}</p>
            </div>

        </div>
    </div>
</section>
