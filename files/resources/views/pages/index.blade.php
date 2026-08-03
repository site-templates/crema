<x-layouts.main title="Home" description="A small roastery and coffee bar on the corner of Ashfield and Vine in Bristol. We roast twice a week and pour until the pastries run out." navStyle="overlay">

    <x-sections.hero />

    <x-sections.counter-board />

    <x-sections.intro />

    <x-sections.featured-coffees />

    <x-sections.events />

    <x-sections.visit-panel :hours="$site->hours" />

    <x-sections.cta />

</x-layouts.main>
