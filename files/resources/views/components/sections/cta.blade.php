@props([
    'heading' => 'Come and stand at the bar',
    'body' => 'No booking, no minimum spend, no laptops after eleven on Saturdays. Just tell us whether you want it with milk.',
    'primaryText' => 'See the full menu',
    'primaryLink' => '/menu',
    'secondaryText' => 'Get directions',
    'secondaryLink' => '/visit',
])
<!--
    The closing note. The one centred section on the whole site — everything
    else is asymmetric, which is what lets this one land.
-->
<section id="cta" class="py-24 sm:py-32">
    <div class="mx-auto w-full max-w-2xl px-6 text-center" data-reveal>

        <svg viewBox="0 0 24 24" class="mx-auto size-8 text-accent" fill="currentColor" fill-rule="evenodd" aria-hidden="true"><path d="M12 1.6a10.4 10.4 0 1 0 0 20.8 10.4 10.4 0 0 0 0-20.8Zm0 2.9a7.5 7.5 0 1 1 0 15 7.5 7.5 0 0 1 0-15Z"/><path d="M16.6 14.9A5.9 5.9 0 1 1 9.1 7.4a5.9 5.9 0 0 0 7.5 7.5Z"/></svg>

        <h2 class="mt-8 font-display text-4xl leading-[1.1] text-balance sm:text-5xl">{{ $heading }}</h2>
        <p class="mt-6 text-base/8 text-pretty text-muted">{{ $body }}</p>

        <div class="mt-9 flex flex-wrap justify-center gap-3">
            <a href="{{ $primaryLink }}" class="rounded-full bg-accent px-7 py-3.5 text-sm font-medium text-accent-ink transition-opacity duration-200 hover:opacity-90">{{ $primaryText }}</a>
            <a href="{{ $secondaryLink }}" class="rounded-full border border-line px-7 py-3.5 text-sm font-medium text-ink transition-colors duration-200 hover:bg-raised">{{ $secondaryText }}</a>
        </div>

    </div>
</section>
