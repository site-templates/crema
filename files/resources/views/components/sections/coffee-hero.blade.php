@props([
    'kind' => 'Single origin filter',
    'name' => 'Coffee',
    'notes' => '',
    'origin' => '',
    'region' => '',
    'price' => '',
    'bagSize' => '250g',
    'roastLevel' => 3,
    'roastLabel' => 'Medium',
    'backText' => 'All coffees',
    'backLink' => '/coffees',
    'originLabel' => 'Grown',
    'roastSuffix' => 'roast',
])
<!--
    The opening of a coffee's page: the tasting notes set as the headline,
    because that is what anyone actually wants to read first. The name sits
    above it and the price hangs off the right edge.
-->
<section id="coffee-hero" class="border-b border-line pt-32 pb-14 sm:pt-40 sm:pb-16">
    <div class="mx-auto w-full max-w-6xl px-6">

        <a href="{{ $backLink }}" class="inline-flex items-center gap-1.5 text-sm font-medium text-muted transition-colors duration-200 hover:text-accent-text" data-reveal>
            <svg viewBox="0 0 16 16" class="size-3.5 rotate-180 fill-current" aria-hidden="true"><path d="M6.2 3.3 10.9 8l-4.7 4.7-1.1-1.1L8.7 8 5.1 4.4z"/></svg>
            {{ $backText }}
        </a>

        <div class="mt-10 grid gap-10 lg:grid-cols-[1.5fr_1fr] lg:items-end lg:gap-20">

            <div data-reveal>
                <p class="text-xs font-medium tracking-[0.22em] text-accent-text uppercase">{{ $kind }}</p>
                <p class="mt-4 font-display text-[clamp(2.5rem,5vw,3.75rem)] leading-[1.05]">{{ $name }}</p>
                <p class="mt-5 max-w-lg text-xl/8 text-pretty text-muted">{{ $notes }}</p>
            </div>

            <!-- Three columns on one baseline: every cell is label then value. -->
            <div class="reveal-1 grid grid-cols-3 items-start gap-6 border-t border-line pt-6" data-reveal>
                <div>
                    <p class="text-xs font-medium tracking-[0.22em] text-muted uppercase">{{ $originLabel }}</p>
                    <p class="mt-3 text-base/6 text-ink">{{ $origin }}</p>
                    <p class="text-sm/6 text-muted">{{ $region }}</p>
                </div>
                <div>
                    <p class="text-xs font-medium tracking-[0.22em] text-muted uppercase">{{ $roastSuffix }}</p>
                    <span class="mt-3.5 block text-accent"><x-roast-scale :level="$roastLevel"/></span>
                    <p class="mt-2 text-sm/6 text-muted">{{ $roastLabel }}</p>
                </div>
                <div>
                    <p class="text-xs font-medium tracking-[0.22em] text-muted uppercase">{{ $bagSize }}</p>
                    <p class="mt-2 font-display text-3xl leading-none">{{ $price }}</p>
                </div>
            </div>

        </div>
    </div>
</section>
