@props([
    'imageOne' => '/images/roastery.jpg',
    'imageOneAlt' => 'The drum roaster mid-batch, cooling tray out',
    'captionOne' => 'The 12kg drum, Monday morning.',
    'imageTwo' => '/images/counter.jpg',
    'imageTwoAlt' => 'The counter from the doorway, cups stacked on the machine',
    'captionTwo' => 'Eighteen seats, four more outside when it is dry.',
])
<!--
    Two photographs at different heights, breaking the container on the right
    so the pair reads as a spread rather than a gallery. Captions are set
    small under each frame like a printed plate.
-->
<section id="photo-pair" class="overflow-hidden pb-20 sm:pb-28">
    <div class="mx-auto w-full max-w-6xl px-6">
        <div class="grid gap-8 sm:grid-cols-[1fr_1.25fr] sm:gap-12">

            <figure class="sm:mt-20" data-reveal>
                <div class="img-zoom rounded-2xl border border-line bg-raised">
                    @if ($imageOne)
                    <img src="{{ $imageOne }}" alt="{{ $imageOneAlt }}" class="aspect-4/5 w-full object-cover" width="1200" height="1500" loading="lazy">
                    @endif
                </div>
                <figcaption class="mt-4 text-sm text-muted">{{ $captionOne }}</figcaption>
            </figure>

            <figure class="reveal-2 sm:-mr-24 lg:-mr-40" data-reveal>
                <div class="img-zoom rounded-2xl border border-line bg-raised">
                    @if ($imageTwo)
                    <img src="{{ $imageTwo }}" alt="{{ $imageTwoAlt }}" class="aspect-4/3 w-full object-cover" width="1600" height="1200" loading="lazy">
                    @endif
                </div>
                <figcaption class="mt-4 max-w-sm text-sm text-muted">{{ $captionTwo }}</figcaption>
            </figure>

        </div>
    </div>
</section>
