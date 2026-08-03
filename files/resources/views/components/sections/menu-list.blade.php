@props([
    'heading' => 'Espresso',
    'body' => '',
    'note' => '',
    'tone' => 'plain',
    'anchor' => 'course',
    'items' => [],
])
<!--
    One course of the menu: the heading held in the left margin, the dot-leader
    rows running down the right. Reused for every list on the menu page — pass
    a different collection each time with :items="$espresso".

    Set tone="raised" to lay the course on the tinted surface so consecutive
    courses alternate instead of running together as one grey wall.
-->
@if ($tone == 'raised')
<section id="{{ $anchor }}" class="bg-raised py-16 sm:py-20">
@else
<section id="{{ $anchor }}" class="py-16 sm:py-20">
@endif
    <div class="mx-auto w-full max-w-6xl px-6">
        <div class="grid gap-8 lg:grid-cols-[1fr_2fr] lg:gap-20">

            <div class="lg:sticky lg:top-28 lg:self-start" data-reveal>
                <h2 class="font-display text-3xl leading-tight sm:text-4xl">{{ $heading }}</h2>
                @if ($body)
                <p class="mt-4 max-w-xs text-base/7 text-pretty text-muted">{{ $body }}</p>
                @endif
                @if ($note)
                <p class="mt-5 max-w-xs text-xs/6 text-muted">{{ $note }}</p>
                @endif
            </div>

            <ul class="flex flex-col gap-6" data-reveal>
                @foreach ($items as $item)
                    <li class="menu-item">
                        <span class="leader-row">
                            <span class="shrink-0 text-lg text-ink">{{ $item->name }}</span>
                            <span class="leader text-muted" aria-hidden="true"></span>
                            <span class="leader-price text-lg text-ink">{{ $item->price }}</span>
                        </span>
                        <span class="mt-1 block max-w-md text-sm text-muted">{{ $item->detail }}</span>
                    </li>
                @endforeach
            </ul>

        </div>
    </div>
</section>
