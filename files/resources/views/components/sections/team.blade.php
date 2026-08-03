@props([
    'eyebrow' => 'Behind the bar',
    'heading' => 'Four people, one roaster, a lot of paper records',
    'team' => [],
])
<!--
    The people, as ruled rows with the portrait inline rather than a grid of
    identical head-shot cards. Two columns on wide screens, one on a phone.
-->
<section id="team" class="py-20 sm:py-28">
    <div class="mx-auto w-full max-w-6xl px-6">

        <div class="max-w-xl" data-reveal>
            <p class="text-xs font-medium tracking-[0.22em] text-muted uppercase">{{ $eyebrow }}</p>
            <h2 class="mt-5 font-display text-3xl leading-[1.15] text-balance sm:text-4xl">{{ $heading }}</h2>
        </div>

        <ul class="mt-12 grid gap-x-16 sm:grid-cols-2">
            @foreach ($team as $person)
                <li class="flex gap-5 border-t border-line py-8" data-reveal>
                    <!-- A real portrait when there is one; otherwise the monogram, drawn in type. -->
                    @if ($person->image)
                    <img src="{{ $person->image }}" alt="{{ $person->name }}" class="size-14 shrink-0 rounded-full object-cover" width="160" height="160" loading="lazy">
                    @else
                    <span class="flex size-14 shrink-0 items-center justify-center rounded-full border border-line bg-raised font-display text-lg text-accent-text" aria-hidden="true">{{ $person->initials }}</span>
                    @endif
                    <div>
                        <p class="font-display text-2xl leading-tight">{{ $person->name }}</p>
                        <p class="mt-1 text-xs font-medium tracking-[0.22em] text-accent-text uppercase">{{ $person->role }}</p>
                        <p class="mt-4 max-w-sm text-base/7 text-pretty text-muted">{{ $person->bio }}</p>
                    </div>
                </li>
            @endforeach
        </ul>

    </div>
</section>
