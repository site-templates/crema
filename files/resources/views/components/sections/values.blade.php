@props([
    'eyebrow' => 'How we work',
    'heading' => 'Three things we will not budge on',
    'values' => [],
])
<!--
    Numbered rules rather than three equal cards: the numeral is set large in
    the left margin and each rule runs across the page as a ruled row.
-->
<section id="values" class="bg-board py-20 text-board-ink sm:py-28">
    <div class="mx-auto w-full max-w-6xl px-6">

        <div class="max-w-xl" data-reveal>
            <p class="text-xs font-medium tracking-[0.22em] text-board-muted uppercase">{{ $eyebrow }}</p>
            <h2 class="mt-5 font-display text-3xl leading-[1.15] text-balance sm:text-4xl">{{ $heading }}</h2>
        </div>

        <ul class="mt-12 border-b border-board-line">
            @foreach ($values as $value)
                <li class="reveal-{{ $loop->iteration }} grid gap-x-8 gap-y-3 border-t border-board-line py-9 sm:grid-cols-[2.5rem_1fr] lg:grid-cols-[2.5rem_18rem_1fr]" data-reveal>
                    <p class="font-display text-3xl text-board-accent">{{ $loop->iteration }}</p>
                    <p class="font-display text-2xl leading-tight">{{ $value->title }}</p>
                    <p class="max-w-xl text-base/8 text-pretty text-board-muted">{{ $value->body }}</p>
                </li>
            @endforeach
        </ul>

    </div>
</section>
