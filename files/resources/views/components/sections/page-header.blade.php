@props([
    'eyebrow' => 'Crema',
    'heading' => 'Page title',
    'body' => '',
    'meta' => '',
])
<!--
    The interior page opening. Left-aligned under the bar, with the standfirst
    hung in a second column so the headline keeps its own measure.
-->
<section id="page-header" class="border-b border-line pt-36 pb-16 sm:pt-44 sm:pb-20">
    <div class="mx-auto w-full max-w-6xl px-6">
        <div class="grid gap-8 lg:grid-cols-[1.2fr_1fr] lg:items-end lg:gap-20">

            <div data-reveal>
                <p class="text-xs font-medium tracking-[0.22em] text-muted uppercase">{{ $eyebrow }}</p>
                <h1 class="mt-5 font-display text-[clamp(2.5rem,5vw,3.75rem)] leading-[1.05] text-balance">{{ $heading }}</h1>
            </div>

            <div class="reveal-1" data-reveal>
                @if ($body)
                <p class="max-w-md text-base/8 text-pretty text-muted">{{ $body }}</p>
                @endif
                @if ($meta)
                <p class="mt-5 text-xs font-medium tracking-[0.22em] text-muted uppercase">{{ $meta }}</p>
                @endif
            </div>

        </div>
    </div>
</section>
