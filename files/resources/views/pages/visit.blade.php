<x-layouts.main title="Visit" description="Opening hours, directions and how to reach us — 114 Ashfield Road, Bristol BS6 5NX.">

    <x-sections.page-header
        eyebrow="Find us"
        heading="114 Ashfield Road"
        body="Two minutes down from Montpelier station, opposite the launderette. No booking, no minimum spend, and the pavement tables go out whenever it is dry."
        meta="Bristol BS6 5NX" />

    <x-sections.visit-panel :hours="$site->hours" />

    <x-sections.events />

    <x-sections.contact-panel />

    <x-sections.cta
        heading="See you on the corner"
        body="If the door is open we are serving. If the board is rubbed out, Tomás is roasting and it will be back up within the hour."
        primaryText="See the menu"
        primaryLink="/menu"
        secondaryText="Read about us"
        secondaryLink="/about" />

</x-layouts.main>
