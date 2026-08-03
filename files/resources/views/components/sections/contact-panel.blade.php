@props([
    'eyebrow' => 'Get in touch',
    'heading' => 'Who to ask, and about what',
    'body' => 'We read everything, usually within a day. The bar phone is answered between eight and three, and after that it rings in an empty room.',
    'oneLabel' => 'The shop',
    'oneDetail' => 'Lost property, large orders, and anything about a drink you had.',
    'oneValue' => 'hello@crema.coffee',
    'oneLink' => 'mailto:hello@crema.coffee',
    'twoLabel' => 'Wholesale',
    'twoDetail' => 'Cafés, restaurants and offices. We supply within twenty miles.',
    'twoValue' => 'trade@crema.coffee',
    'twoLink' => 'mailto:trade@crema.coffee',
    'threeLabel' => 'The bar phone',
    'threeDetail' => 'Answered between eight and three, most days.',
    'threeValue' => '0117 555 0148',
    'threeLink' => 'tel:01175550148',
    'note' => 'We are not hiring right now, but we keep every CV that comes in and we do go back to them.',
])
<!--
    Contact, split by what you actually want. Three ruled rows rather than a
    form — a small shop answers email, and a fake form that goes nowhere is
    worse than an address.
-->
<section id="contact-panel" class="bg-raised py-20 sm:py-28">
    <div class="mx-auto w-full max-w-6xl px-6">
        <div class="grid gap-12 lg:grid-cols-[1fr_1.4fr] lg:gap-20">

            <div data-reveal>
                <p class="text-xs font-medium tracking-[0.22em] text-muted uppercase">{{ $eyebrow }}</p>
                <h2 class="mt-5 font-display text-3xl leading-[1.15] text-balance sm:text-4xl">{{ $heading }}</h2>
                <p class="mt-6 max-w-md text-base/8 text-pretty text-muted">{{ $body }}</p>
            </div>

            <div class="reveal-2" data-reveal>
                @if ($oneValue)
                <div class="grid gap-x-8 gap-y-2 border-t border-line py-6 sm:grid-cols-[10rem_1fr]">
                    <p class="text-xs font-medium tracking-[0.22em] text-muted uppercase">{{ $oneLabel }}</p>
                    <div>
                        <a href="{{ $oneLink }}" class="font-display text-2xl leading-tight text-ink transition-colors duration-200 hover:text-accent-text">{{ $oneValue }}</a>
                        <p class="mt-2 max-w-sm text-sm/7 text-pretty text-muted">{{ $oneDetail }}</p>
                    </div>
                </div>
                @endif
                @if ($twoValue)
                <div class="grid gap-x-8 gap-y-2 border-t border-line py-6 sm:grid-cols-[10rem_1fr]">
                    <p class="text-xs font-medium tracking-[0.22em] text-muted uppercase">{{ $twoLabel }}</p>
                    <div>
                        <a href="{{ $twoLink }}" class="font-display text-2xl leading-tight text-ink transition-colors duration-200 hover:text-accent-text">{{ $twoValue }}</a>
                        <p class="mt-2 max-w-sm text-sm/7 text-pretty text-muted">{{ $twoDetail }}</p>
                    </div>
                </div>
                @endif
                @if ($threeValue)
                <div class="grid gap-x-8 gap-y-2 border-y border-line py-6 sm:grid-cols-[10rem_1fr]">
                    <p class="text-xs font-medium tracking-[0.22em] text-muted uppercase">{{ $threeLabel }}</p>
                    <div>
                        <a href="{{ $threeLink }}" class="font-display text-2xl leading-tight text-ink transition-colors duration-200 hover:text-accent-text">{{ $threeValue }}</a>
                        <p class="mt-2 max-w-sm text-sm/7 text-pretty text-muted">{{ $threeDetail }}</p>
                    </div>
                </div>
                @endif
                @if ($note)
                <p class="mt-8 max-w-lg text-sm/7 text-pretty text-muted">{{ $note }}</p>
                @endif
            </div>

        </div>
    </div>
</section>
