@props([
    'originHeading' => 'Origin',
    'processHeading' => 'Process',
    'roastHeading' => 'Roast',
    'priceHeading' => 'Per 250g',
    'footnote' => 'Everything is roasted to order on Mondays and Thursdays and stamped with the date. Subscriptions run fortnightly — ask at the bar.',
    'coffees' => [],
])
<!--
    The green list. Every coffee as a ruled row rather than a card — the way a
    roaster hands you the sheet. Deliberately not the card grid used on the
    home page, so the two surfaces read differently.
-->
<section id="coffees-list" class="py-16 sm:py-20 lg:py-24">
    <div class="mx-auto w-full max-w-6xl px-6">

        <div class="grid grid-cols-[1fr_auto] gap-6 border-b border-line pb-4 text-xs font-medium tracking-[0.22em] text-muted uppercase lg:grid-cols-[2fr_1fr_1fr_auto]">
            <p>{{ $originHeading }}</p>
            <p class="max-lg:hidden">{{ $processHeading }}</p>
            <p class="max-lg:hidden">{{ $roastHeading }}</p>
            <p class="text-right">{{ $priceHeading }}</p>
        </div>

        <ul>
            @foreach ($coffees as $coffee)
                <li data-reveal>
                    <a href="{{ $coffee->link }}" class="group grid grid-cols-[1fr_auto] gap-x-6 gap-y-4 border-b border-line py-8 transition-colors duration-200 hover:bg-raised lg:grid-cols-[2fr_1fr_1fr_auto] lg:items-baseline">

                        <div>
                            <p class="text-xs font-medium tracking-[0.22em] text-accent-text uppercase">{{ $coffee->kind }}</p>
                            <p class="mt-3 font-display text-3xl leading-tight transition-colors duration-200 group-hover:text-accent-text">{{ $coffee->name }}</p>
                            <p class="mt-2 text-sm text-muted">{{ $coffee->origin }} · {{ $coffee->region }}</p>
                            <p class="mt-4 max-w-md text-base/7 text-pretty text-ink">{{ $coffee->notes }}</p>
                            <p class="mt-3 max-w-md text-sm/7 text-pretty text-muted lg:hidden">{{ $coffee->varietal }} · {{ $coffee->process }} · {{ $coffee->altitude }}</p>
                        </div>

                        <div class="max-lg:hidden">
                            <p class="text-base text-ink">{{ $coffee->process }}</p>
                            <p class="mt-2 text-sm text-muted">{{ $coffee->varietal }}</p>
                            <p class="mt-2 text-sm text-muted">{{ $coffee->altitude }}</p>
                        </div>

                        <div class="max-lg:hidden">
                            <span class="text-accent"><x-roast-scale :level="$coffee->roastLevel"/></span>
                            <p class="mt-3 text-sm text-muted">{{ $coffee->roastLabel }}</p>
                        </div>

                        <div class="text-right">
                            <p class="font-display text-2xl">{{ $coffee->price }}</p>
                            <p class="mt-2 text-sm text-muted">{{ $coffee->bagSize }}</p>
                        </div>

                    </a>
                </li>
            @endforeach
        </ul>

        <p class="mt-10 max-w-2xl text-sm/7 text-muted" data-reveal>{{ $footnote }}</p>

    </div>
</section>
