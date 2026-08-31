@props([
    'explore' => [],
    'hours' => [],
    'brand' => 'Crema',
    'blurb' => 'A small roastery and coffee bar on the corner of Ashfield and Vine. We roast on Mondays and Thursdays, and we pull shots until the pastries run out.',
    'address' => '114 Ashfield Road',
    'city' => 'Bristol BS6 5NX',
    'phone' => '0117 555 0148',
    'email' => 'hello@crema.coffee',
    'exploreHeading' => 'Explore',
    'hoursHeading' => 'Hours',
    'instagram' => 'https://instagram.com',
    'note' => 'Roasted and poured on the corner since 2016.',
])
<!--
    The footer. Its two lists come from site.json — footer_explore and hours —
    so they stay in step with the Visit page without being written twice.
-->
<footer class="border-t border-line bg-raised">
    <div class="mx-auto w-full max-w-6xl px-6 py-16 sm:py-20">

        <div class="grid gap-12 sm:grid-cols-2 lg:grid-cols-[1.6fr_1fr_1fr]">

            <div class="max-w-sm">
                <a href="/" class="flex items-center gap-2.5 text-ink" aria-label="Homepage">
                    <svg viewBox="0 0 24 24" class="size-6" fill="currentColor" fill-rule="evenodd" aria-hidden="true"><path d="M12 1.6a10.4 10.4 0 1 0 0 20.8 10.4 10.4 0 0 0 0-20.8Zm0 2.9a7.5 7.5 0 1 1 0 15 7.5 7.5 0 0 1 0-15Z"/><path d="M16.6 14.9A5.9 5.9 0 1 1 9.1 7.4a5.9 5.9 0 0 0 7.5 7.5Z"/></svg>
                    <span class="font-display text-2xl">{{ $brand }}</span>
                </a>
                <p class="mt-5 text-sm/7 text-pretty text-muted">{{ $blurb }}</p>
                <a href="{{ $instagram }}" target="_blank" rel="noopener" class="mt-6 inline-flex items-center gap-2 text-sm font-medium text-ink transition-colors duration-200 hover:text-accent-text">
                    <svg viewBox="0 0 24 24" class="size-4 fill-current" aria-hidden="true"><path d="M12 2.2c3.2 0 3.6 0 4.9.07 1.2.05 1.8.25 2.2.42.6.22 1 .48 1.4.9.43.42.69.83.9 1.4.18.4.38 1 .43 2.2.06 1.3.07 1.7.07 4.9s0 3.6-.07 4.9c-.05 1.2-.25 1.8-.42 2.2-.22.6-.48 1-.9 1.4-.42.43-.83.69-1.4.9-.4.18-1 .38-2.2.43-1.3.06-1.7.07-4.9.07s-3.6 0-4.9-.07c-1.2-.05-1.8-.25-2.2-.42-.6-.22-1-.48-1.4-.9-.43-.42-.69-.83-.9-1.4-.18-.4-.38-1-.43-2.2C2.2 15.6 2.2 15.2 2.2 12s0-3.6.07-4.9c.05-1.2.25-1.8.42-2.2.22-.6.48-1 .9-1.4.42-.43.83-.69 1.4-.9.4-.18 1-.38 2.2-.43C8.4 2.2 8.8 2.2 12 2.2Zm0 1.8c-3.1 0-3.5 0-4.7.07-1.1.05-1.7.24-2.1.4-.5.2-.9.44-1.3.83-.4.4-.63.8-.83 1.3-.16.4-.35 1-.4 2.1C2.63 9.9 2.6 10.3 2.6 12s0 2.1.07 3.3c.05 1.1.24 1.7.4 2.1.2.5.44.9.83 1.3.4.4.8.63 1.3.83.4.16 1 .35 2.1.4 1.2.06 1.6.07 4.7.07s3.5 0 4.7-.07c1.1-.05 1.7-.24 2.1-.4.5-.2.9-.44 1.3-.83.4-.4.63-.8.83-1.3.16-.4.35-1 .4-2.1.06-1.2.07-1.6.07-3.3s0-2.1-.07-3.3c-.05-1.1-.24-1.7-.4-2.1-.2-.5-.44-.9-.83-1.3-.4-.4-.8-.63-1.3-.83-.4-.16-1-.35-2.1-.4C15.5 4 15.1 4 12 4Zm0 3.1a4.9 4.9 0 1 1 0 9.8 4.9 4.9 0 0 1 0-9.8Zm0 1.8a3.1 3.1 0 1 0 0 6.2 3.1 3.1 0 0 0 0-6.2Zm5.1-3.3a1.15 1.15 0 1 1 0 2.3 1.15 1.15 0 0 1 0-2.3Z"/></svg>
                    Instagram
                </a>
            </div>

            <div>
                <p class="text-xs font-medium tracking-[0.22em] text-muted uppercase">{{ $exploreHeading }}</p>
                <ul class="mt-5 flex flex-col gap-3">
                    @foreach ($explore as $item)
                        <li><a href="{{ $item->url }}" class="text-sm text-muted transition-colors duration-200 hover:text-accent-text">{{ $item->text }}</a></li>
                    @endforeach
                </ul>
            </div>

            <div>
                <p class="text-xs font-medium tracking-[0.22em] text-muted uppercase">{{ $hoursHeading }}</p>
                <ul class="mt-5 flex flex-col gap-3">
                    @foreach ($hours as $row)
                        <li class="flex justify-between gap-4 text-sm text-muted">
                            <span>{{ $row->days }}</span>
                            <span class="text-ink">{{ $row->time }}</span>
                        </li>
                    @endforeach
                </ul>
                <address class="mt-7 text-sm/7 text-muted not-italic">
                    {{ $address }}<br>
                    {{ $city }}<br>
                    <a href="tel:{{ $phone }}" class="transition-colors duration-200 hover:text-accent-text">{{ $phone }}</a><br>
                    <a href="mailto:{{ $email }}" class="transition-colors duration-200 hover:text-accent-text">{{ $email }}</a>
                </address>
            </div>

        </div>

        <div class="mt-14 flex flex-col gap-2 border-t border-line pt-8 text-xs text-muted sm:flex-row sm:items-center sm:justify-between">
            <p>{{ $note }}</p>
            <p>© {{ $brand }}</p>
        </div>

    </div>
</footer>
