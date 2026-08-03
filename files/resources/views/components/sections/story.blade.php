@props([
    'heading' => 'How this started',
    'body' => "<p>Write the shop's story here.</p>",
    'asideLabel' => 'In short',
    'asideOne' => '',
    'asideTwo' => '',
    'asideThree' => '',
])
<!--
    The long read. Rich-text body with a short summary card hung beside it,
    so someone who is not going to read 400 words still gets the point.
-->
<section id="story" class="py-20 sm:py-28">
    <div class="mx-auto w-full max-w-6xl px-6">
        <div class="grid gap-12 lg:grid-cols-[1.7fr_1fr] lg:gap-20">

            <div data-reveal>
                <h2 class="font-display text-3xl leading-[1.15] text-balance sm:text-4xl">{{ $heading }}</h2>
                <div class="prose mt-8 max-w-[68ch]">{!! $body !!}</div>
            </div>

            <aside class="reveal-2 self-start border-t-2 border-accent pt-7" data-reveal>
                <p class="text-xs font-medium tracking-[0.22em] text-muted uppercase">{{ $asideLabel }}</p>
                <ul class="mt-5 flex flex-col">
                    @if ($asideOne)<li class="border-b border-line py-4 text-base/7 text-pretty text-ink">{{ $asideOne }}</li>@endif
                    @if ($asideTwo)<li class="border-b border-line py-4 text-base/7 text-pretty text-ink">{{ $asideTwo }}</li>@endif
                    @if ($asideThree)<li class="border-b border-line py-4 text-base/7 text-pretty text-ink">{{ $asideThree }}</li>@endif
                </ul>
            </aside>

        </div>
    </div>
</section>
