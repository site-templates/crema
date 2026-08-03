@props([
    'heading' => 'The story',
    'body' => '<p>Write the story of this coffee here — the farm, the season, and why it is on the shelf.</p>',
])
<!--
    The long read. The body is rich text stored on the coffee's entry, so a
    shop can write as much or as little as it likes without touching Blade.
-->
<section id="coffee-story" class="bg-raised py-16 sm:py-20 lg:py-24">
    <div class="mx-auto w-full max-w-6xl px-6">
        <div class="grid gap-8 lg:grid-cols-[1fr_2fr] lg:gap-20">

            <h2 class="font-display text-3xl leading-tight sm:text-4xl lg:sticky lg:top-28 lg:self-start" data-reveal>{{ $heading }}</h2>

            <div class="prose max-w-[68ch]" data-reveal>{!! $body !!}</div>

        </div>
    </div>
</section>
