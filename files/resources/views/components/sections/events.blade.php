@props([
    'eyebrow' => "What's on",
    'heading' => 'Things that happen here when the bar is quiet',
    'footnote' => 'Sign up on the clipboard by the till, or send us an email. Everything except the supper is walk-in if there is room.',
    'events' => [],
])
<!--
    The diary. A left-anchored rail rather than a card grid — each row is a
    ruled line with the date hung in the left margin, the way a printed
    programme sets it. No boxes, no shadows.
-->
<section id="events" class="py-20 sm:py-28 lg:py-32">
    <div class="mx-auto w-full max-w-6xl px-6">

        <div class="max-w-2xl" data-reveal>
            <p class="text-xs font-medium tracking-[0.22em] text-muted uppercase">{{ $eyebrow }}</p>
            <h2 class="mt-5 font-display text-3xl leading-[1.15] text-balance sm:text-4xl">{{ $heading }}</h2>
        </div>

        <ul class="mt-12 flex flex-col">
            @foreach ($events as $event)
                <li class="reveal-{{ $loop->iteration }} grid gap-x-8 gap-y-2 border-t border-line py-7 sm:grid-cols-[10rem_1fr] lg:grid-cols-[10rem_18rem_1fr]" data-reveal>
                    <div>
                        <p class="text-sm font-medium text-ink">{{ $event->date }}</p>
                        <p class="mt-1 text-sm text-muted">{{ $event->time }}</p>
                    </div>
                    <p class="font-display text-2xl leading-tight">{{ $event->name }}</p>
                    <p class="max-w-lg text-base/7 text-pretty text-muted">{{ $event->detail }}</p>
                </li>
            @endforeach
        </ul>

        <p class="mt-10 max-w-2xl border-t border-line pt-8 text-sm/7 text-muted" data-reveal>{{ $footnote }}</p>

    </div>
</section>
