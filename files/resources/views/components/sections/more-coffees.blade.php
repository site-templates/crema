@props([
    'heading' => 'Also on the shelf',
    'linkText' => 'See all five',
    'linkHref' => '/coffees',
    'current' => '',
    'entries' => [],
])
<!--
    The tail of a coffee's page. `entries` is the whole coffees collection —
    on a dynamic page the collection's own name holds only the matched entry,
    so the page passes :entries="$entries". The current coffee is skipped by
    comparing slugs, and the list stops at three.
-->
<section id="more-coffees" class="py-16 sm:py-20 lg:py-24">
    <div class="mx-auto w-full max-w-6xl px-6">

        <div class="flex flex-wrap items-end justify-between gap-6 border-b border-line pb-6" data-reveal>
            <h2 class="font-display text-3xl leading-tight sm:text-4xl">{{ $heading }}</h2>
            @if ($linkText)
            <a href="{{ $linkHref }}" class="inline-flex items-center gap-1.5 text-sm font-medium text-ink underline decoration-accent decoration-2 underline-offset-4 transition-colors duration-200 hover:text-accent-text">
                {{ $linkText }}
                <svg viewBox="0 0 16 16" class="size-3.5 fill-current" aria-hidden="true"><path d="M6.2 3.3 10.9 8l-4.7 4.7-1.1-1.1L8.7 8 5.1 4.4z"/></svg>
            </a>
            @endif
        </div>

        <ul class="grid gap-x-14 sm:grid-cols-2">
            @foreach ($entries as $entry)
                @if ($entry->slug != $current)
                    @if ($loop->index < 4)
                    <li data-reveal>
                        <a href="{{ $entry->link }}" class="group flex h-full flex-col border-b border-line py-7">
                            <p class="text-xs font-medium tracking-[0.22em] text-accent-text uppercase">{{ $entry->kind }}</p>
                            <p class="mt-3 font-display text-2xl leading-tight transition-colors duration-200 group-hover:text-accent-text">{{ $entry->name }}</p>
                            <p class="mt-2 text-sm text-muted">{{ $entry->origin }} · {{ $entry->process }}</p>
                            <p class="mt-4 text-base/7 text-pretty text-ink">{{ $entry->notes }}</p>
                        </a>
                    </li>
                    @endif
                @endif
            @endforeach
        </ul>

    </div>
</section>
