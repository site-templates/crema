@props([
    'eyebrow' => 'Find us',
    'heading' => 'On the corner of Ashfield and Vine',
    'body' => 'Two minutes down from the station, opposite the launderette. Eighteen seats inside, four on the pavement when the weather allows, and a bike rack by the door.',
    'address' => '114 Ashfield Road',
    'city' => 'Bristol BS6 5NX',
    'transitLabel' => 'Getting here',
    'transitOne' => 'Montpelier station — 4 minutes on foot',
    'transitTwo' => 'Buses 5, 15 and 72 stop on Cheltenham Road',
    'transitThree' => 'Two hours free parking on Vine Street',
    'hoursHeading' => 'Opening hours',
    'mapLabel' => 'Ashfield & Vine',
    'streetOne' => 'Ashfield Road',
    'streetTwo' => 'Vine Street',
    'linkText' => 'Open in maps',
    'linkHref' => 'https://maps.google.com',
    'hours' => [],
])
<!--
    The Visit panel: hours and directions on the left, a corner drawn in CSS
    on the right. The map is two repeating gradients and a marker (see
    .corner-map in site.css) — sharper than a screenshot at any size, and it
    restyles with the palette instead of going stale.
-->
<section id="visit-panel" class="bg-raised py-20 sm:py-28 lg:py-32">
    <div class="mx-auto w-full max-w-6xl px-6">
        <div class="grid gap-12 lg:grid-cols-[1fr_1.1fr] lg:gap-20">

            <div data-reveal>
                <p class="text-xs font-medium tracking-[0.22em] text-muted uppercase">{{ $eyebrow }}</p>
                <h2 class="mt-5 font-display text-3xl leading-[1.15] text-balance sm:text-4xl">{{ $heading }}</h2>
                <p class="mt-6 max-w-md text-base/8 text-pretty text-muted">{{ $body }}</p>

                <address class="mt-8 font-display text-2xl leading-snug text-ink not-italic">
                    {{ $address }}<br>
                    {{ $city }}
                </address>

                <div class="mt-10">
                    <p class="text-xs font-medium tracking-[0.22em] text-muted uppercase">{{ $hoursHeading }}</p>
                    <ul class="mt-5 flex max-w-sm flex-col">
                        @foreach ($hours as $row)
                            <li class="flex justify-between gap-6 border-t border-line py-3 text-sm">
                                <span class="text-muted">{{ $row->days }}</span>
                                <span class="text-ink">{{ $row->time }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>

            </div>

            <div class="reveal-2 self-start" data-reveal>
                <div class="corner-map relative aspect-4/3 overflow-hidden rounded-2xl border border-line">

                    <!-- The two streets that make the corner. -->
                    <div class="map-road absolute inset-x-0 top-[58%] h-12" aria-hidden="true"></div>
                    <div class="map-road absolute inset-y-0 left-[34%] w-10" aria-hidden="true"></div>

                    <!-- The shop itself. -->
                    <div class="absolute top-[58%] left-[34%] flex -translate-x-1/2 -translate-y-1/2 items-center gap-3">
                        <span class="flex size-5 items-center justify-center rounded-full bg-accent">
                            <span class="size-1.5 rounded-full bg-accent-ink" aria-hidden="true"></span>
                        </span>
                        <span class="rounded-full bg-panel px-3 py-1.5 text-xs font-medium text-ink shadow-sm">{{ $mapLabel }}</span>
                    </div>

                    <p class="absolute bottom-4 left-5 text-xs tracking-[0.16em] text-muted uppercase">{{ $streetOne }}</p>
                    <p class="absolute top-5 right-4 text-xs tracking-[0.16em] text-muted uppercase">{{ $streetTwo }}</p>
                </div>

                @if ($linkText)
                <a href="{{ $linkHref }}" class="mt-5 inline-flex items-center gap-1.5 text-sm font-medium text-ink underline decoration-accent decoration-2 underline-offset-4 transition-colors duration-200 hover:text-accent-text">
                    {{ $linkText }}
                    <svg viewBox="0 0 16 16" class="size-3.5 fill-current" aria-hidden="true"><path d="M6.2 3.3 10.9 8l-4.7 4.7-1.1-1.1L8.7 8 5.1 4.4z"/></svg>
                </a>
                @endif

                <!-- Directions sit with the map rather than under the hours. -->
                <div class="mt-10">
                    <p class="text-xs font-medium tracking-[0.22em] text-muted uppercase">{{ $transitLabel }}</p>
                    <ul class="mt-5 flex flex-col">
                        @if ($transitOne)<li class="border-t border-line py-3 text-sm/7 text-muted">{{ $transitOne }}</li>@endif
                        @if ($transitTwo)<li class="border-t border-line py-3 text-sm/7 text-muted">{{ $transitTwo }}</li>@endif
                        @if ($transitThree)<li class="border-t border-line py-3 text-sm/7 text-muted">{{ $transitThree }}</li>@endif
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>
