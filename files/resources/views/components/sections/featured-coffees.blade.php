@props([
    'eyebrow' => 'On the shelf',
    'heading' => 'What we are roasting right now',
    'body' => 'Three of the five coffees currently in the green store. Everything is roasted to order twice a week and stamped with the date it came off the drum.',
    'linkText' => 'All five coffees',
    'linkHref' => '/coffees',
    'coffees' => [],
])
<!--
    The showcase. Deliberately not three equal cards: the first coffee runs
    the full width of the row as a wide bag label, and the pair below sit
    beneath it (see .featured-grid in site.css). Each card is drawn in markup
    rather than photographed — it is the label off the bag, so it restyles
    with the palette and never goes out of date.
-->
<section id="featured-coffees" class="bg-raised py-20 sm:py-28 lg:py-32">
    <div class="mx-auto w-full max-w-6xl px-6">

        <div class="flex flex-wrap items-end justify-between gap-6" data-reveal>
            <div class="max-w-xl">
                <p class="text-xs font-medium tracking-[0.22em] text-muted uppercase">{{ $eyebrow }}</p>
                <h2 class="mt-5 font-display text-3xl leading-[1.15] text-balance sm:text-4xl">{{ $heading }}</h2>
                <p class="mt-5 text-base/7 text-pretty text-muted">{{ $body }}</p>
            </div>
            @if ($linkText)
            <a href="{{ $linkHref }}" class="inline-flex items-center gap-1.5 text-sm font-medium text-ink underline decoration-accent decoration-2 underline-offset-4 transition-colors duration-200 hover:text-accent-text">
                {{ $linkText }}
                <svg viewBox="0 0 16 16" class="size-3.5 fill-current" aria-hidden="true"><path d="M6.2 3.3 10.9 8l-4.7 4.7-1.1-1.1L8.7 8 5.1 4.4z"/></svg>
            </a>
            @endif
        </div>

        <div class="featured-grid mt-12 grid gap-5 sm:grid-cols-2">
            @foreach ($coffees as $coffee)
                @if ($loop->index < 3)
                <a href="{{ $coffee->link }}" class="group reveal-{{ $loop->iteration }} flex flex-col rounded-2xl border border-line bg-panel p-8 transition-colors duration-200 hover:border-accent sm:p-9" data-reveal>
                    <div class="flex items-start justify-between gap-4">
                        <p class="text-xs font-medium tracking-[0.22em] text-accent-text uppercase">{{ $coffee->kind }}</p>
                        <p class="text-sm text-muted">{{ $coffee->price }} / {{ $coffee->bagSize }}</p>
                    </div>

                    <!-- On the wide first card these two blocks sit side by side; see .featured-grid in site.css. -->
                    <div class="card-body mt-5 flex-1">
                        <div>
                            <p class="font-display text-3xl leading-tight transition-colors duration-200 group-hover:text-accent-text">{{ $coffee->name }}</p>
                            <p class="mt-2 text-sm text-muted">{{ $coffee->origin }} · {{ $coffee->process }}</p>
                        </div>
                        <div class="card-notes mt-6">
                            <p class="max-w-md text-base/7 text-pretty text-ink">{{ $coffee->notes }}</p>
                            <p class="mt-3 max-w-md text-sm/7 text-pretty text-muted">{{ $coffee->description }}</p>
                        </div>
                    </div>

                    <div class="mt-auto flex items-center gap-4 pt-8 text-accent">
                        <x-roast-scale :level="$coffee->roastLevel"/>
                        <span class="text-xs font-medium tracking-[0.16em] text-muted uppercase">{{ $coffee->roastLabel }} roast</span>
                    </div>
                </a>
                @endif
            @endforeach
        </div>

    </div>
</section>
