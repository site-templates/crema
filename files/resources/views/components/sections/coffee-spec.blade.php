@props([
    'heading' => 'The details',
    'producerLabel' => 'Producer',
    'producer' => '',
    'regionLabel' => 'Region',
    'region' => '',
    'altitudeLabel' => 'Altitude',
    'altitude' => '',
    'processLabel' => 'Process',
    'process' => '',
    'varietalLabel' => 'Varietal',
    'varietal' => '',
    'brewHeading' => 'How we brew it',
    'brewMethodLabel' => 'Method',
    'brewMethod' => '',
    'brewDoseLabel' => 'Recipe',
    'brewDose' => '',
    'brewTimeLabel' => 'Time',
    'brewTime' => '',
    'brewTempLabel' => 'Water',
    'brewTemp' => '',
    'brewNote' => 'These are the numbers we use on the bar. Treat them as a starting point and adjust the grind first.',
])
<!--
    The spec: the farm on the left as a ruled table, the brew recipe on the
    right as a card. Structured fields rather than one paragraph, so a shop
    can fill them in without writing prose.
-->
<section id="coffee-spec" class="py-16 sm:py-20">
    <div class="mx-auto w-full max-w-6xl px-6">
        <div class="grid gap-12 lg:grid-cols-[1.4fr_1fr] lg:gap-20">

            <div data-reveal>
                <h2 class="font-display text-3xl leading-tight sm:text-4xl">{{ $heading }}</h2>
                <dl class="mt-8">
                    @if ($producer)
                    <div class="grid grid-cols-[9rem_1fr] gap-6 border-t border-line py-4">
                        <dt class="text-xs font-medium tracking-[0.22em] text-muted uppercase">{{ $producerLabel }}</dt>
                        <dd class="text-base/7 text-ink">{{ $producer }}</dd>
                    </div>
                    @endif
                    @if ($region)
                    <div class="grid grid-cols-[9rem_1fr] gap-6 border-t border-line py-4">
                        <dt class="text-xs font-medium tracking-[0.22em] text-muted uppercase">{{ $regionLabel }}</dt>
                        <dd class="text-base/7 text-ink">{{ $region }}</dd>
                    </div>
                    @endif
                    @if ($altitude)
                    <div class="grid grid-cols-[9rem_1fr] gap-6 border-t border-line py-4">
                        <dt class="text-xs font-medium tracking-[0.22em] text-muted uppercase">{{ $altitudeLabel }}</dt>
                        <dd class="text-base/7 text-ink">{{ $altitude }}</dd>
                    </div>
                    @endif
                    @if ($process)
                    <div class="grid grid-cols-[9rem_1fr] gap-6 border-t border-line py-4">
                        <dt class="text-xs font-medium tracking-[0.22em] text-muted uppercase">{{ $processLabel }}</dt>
                        <dd class="text-base/7 text-ink">{{ $process }}</dd>
                    </div>
                    @endif
                    @if ($varietal)
                    <div class="grid grid-cols-[9rem_1fr] gap-6 border-y border-line py-4">
                        <dt class="text-xs font-medium tracking-[0.22em] text-muted uppercase">{{ $varietalLabel }}</dt>
                        <dd class="text-base/7 text-ink">{{ $varietal }}</dd>
                    </div>
                    @endif
                </dl>
            </div>

            <div class="reveal-2 self-start rounded-2xl border border-line bg-raised p-8" data-reveal>
                <h2 class="font-display text-2xl leading-tight">{{ $brewHeading }}</h2>
                <dl class="mt-6">
                    @if ($brewMethod)
                    <div class="flex justify-between gap-6 border-t border-line py-3">
                        <dt class="text-sm text-muted">{{ $brewMethodLabel }}</dt>
                        <dd class="text-sm text-ink">{{ $brewMethod }}</dd>
                    </div>
                    @endif
                    @if ($brewDose)
                    <div class="flex justify-between gap-6 border-t border-line py-3">
                        <dt class="text-sm text-muted">{{ $brewDoseLabel }}</dt>
                        <dd class="text-sm text-ink">{{ $brewDose }}</dd>
                    </div>
                    @endif
                    @if ($brewTime)
                    <div class="flex justify-between gap-6 border-t border-line py-3">
                        <dt class="text-sm text-muted">{{ $brewTimeLabel }}</dt>
                        <dd class="text-sm text-ink">{{ $brewTime }}</dd>
                    </div>
                    @endif
                    @if ($brewTemp)
                    <div class="flex justify-between gap-6 border-y border-line py-3">
                        <dt class="text-sm text-muted">{{ $brewTempLabel }}</dt>
                        <dd class="text-sm text-ink">{{ $brewTemp }}</dd>
                    </div>
                    @endif
                </dl>
                @if ($brewNote)
                <p class="mt-6 text-sm/7 text-pretty text-muted">{{ $brewNote }}</p>
                @endif
            </div>

        </div>
    </div>
</section>
