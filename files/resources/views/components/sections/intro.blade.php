@props([
    'eyebrow' => 'Since 2016',
    'heading' => 'We buy the coffee, we roast the coffee, we make you the coffee',
    'body' => 'There is no importer between us and the farm, and no third party between the roastery and the bar. It means we answer for everything in the cup, which is uncomfortable often enough to keep us honest.',
    'bodyTwo' => 'Noor buys twice a year and goes to see the farms she buys from. Tomás roasts on Mondays and Thursdays and writes every batch down on paper. Priya sets the grind each morning before the doors open.',
    'quote' => 'If we cannot tell you whose farm it came from, we did not buy it.',
    'quoteAttribution' => 'Noor Haddad, founder',
    'linkText' => 'How we work',
    'linkHref' => '/about',
])
<!--
    The editorial strip: a short lede on the left, a pull quote hung on the
    right. Deliberately two uneven columns rather than a card row — this is
    the page's quiet section and it should read like a page, not a dashboard.
-->
<section id="intro" class="py-20 sm:py-28 lg:py-32">
    <div class="mx-auto w-full max-w-6xl px-6">
        <div class="grid gap-12 lg:grid-cols-[1.15fr_1fr] lg:gap-24">

            <div data-reveal>
                <p class="text-xs font-medium tracking-[0.22em] text-muted uppercase">{{ $eyebrow }}</p>
                <h2 class="mt-5 max-w-xl font-display text-3xl leading-[1.15] text-balance sm:text-4xl">{{ $heading }}</h2>
                <p class="mt-7 max-w-xl text-base/8 text-pretty text-muted">{{ $body }}</p>
                @if ($bodyTwo)
                <p class="mt-5 max-w-xl text-base/8 text-pretty text-muted">{{ $bodyTwo }}</p>
                @endif
                @if ($linkText)
                <a href="{{ $linkHref }}" class="mt-8 inline-flex items-center gap-1.5 text-sm font-medium text-ink underline decoration-accent decoration-2 underline-offset-4 transition-colors duration-200 hover:text-accent-text">
                    {{ $linkText }}
                    <svg viewBox="0 0 16 16" class="size-3.5 fill-current" aria-hidden="true"><path d="M6.2 3.3 10.9 8l-4.7 4.7-1.1-1.1L8.7 8 5.1 4.4z"/></svg>
                </a>
                @endif
            </div>

            <figure class="reveal-2 self-center border-t-2 border-accent pt-8 lg:border-t-0 lg:border-l-2 lg:pt-0 lg:pl-12" data-reveal>
                <blockquote class="font-display text-2xl leading-[1.35] text-balance sm:text-3xl">{{ $quote }}</blockquote>
                <figcaption class="mt-6 text-sm text-muted">{{ $quoteAttribution }}</figcaption>
            </figure>

        </div>
    </div>
</section>
