<x-layouts.main title="Menu" description="Espresso, filter, and the kitchen — the full list, priced, with what is in every cup.">

    <x-sections.page-header
        eyebrow="What we pour"
        heading="The menu"
        body="Espresso runs all day on Corner Blend. The second grinder carries whatever single origin is open, and the kitchen stops serving hot food at two."
        meta="Updated weekly · Prices in pounds" />

    <x-sections.menu-list
        heading="Espresso"
        anchor="espresso"
        body="Corner Blend as standard. Ask for the single origin on the second grinder if you want it without milk."
        note="Oat, soy and whole milk cost the same. Decaf is a washed Colombian, swapped in at no charge."
        :items="$espresso" />

    <x-sections.menu-list
        heading="Filter &amp; brew"
        anchor="filter"
        body="Batch brew is on from open. Anything else is brewed to order and takes about four minutes."
        note="A same-day refill of batch brew is half price — keep your cup."
        tone="raised"
        :items="$filter" />

    <x-sections.menu-list
        heading="Not coffee"
        anchor="not-coffee"
        body="For everyone dragged along by someone who wanted coffee."
        :items="$notCoffee" />

    <x-sections.menu-list
        heading="Kitchen"
        anchor="kitchen"
        body="Pastries arrive at seven from the bakery under the arches. Hot food stops at two, or when the bread runs out."
        note="Allergens are listed on the folder by the till — please ask and we will read it with you."
        tone="raised"
        :items="$kitchen" />

    <x-sections.cta
        heading="The board changes, the corner does not"
        body="Whatever is open today is written up behind the till. Come and read it properly."
        primaryText="See the coffees"
        primaryLink="/coffees"
        secondaryText="Opening hours"
        secondaryLink="/visit" />

</x-layouts.main>
