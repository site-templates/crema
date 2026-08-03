{{-- Dynamic coffee page: one URL per entry of resources/data/collections/coffees.json, matched on `slug` — $coffees is the matched entry, while $entries stays the whole collection. Add an entry there and its page appears. --}}
<x-layouts.main :title="$coffees->name" :description="$coffees->description">

    <x-sections.coffee-hero
        :kind="$coffees->kind"
        :name="$coffees->name"
        :notes="$coffees->notes"
        :origin="$coffees->origin"
        :region="$coffees->region"
        :price="$coffees->price"
        :bagSize="$coffees->bagSize"
        :roastLevel="$coffees->roastLevel"
        :roastLabel="$coffees->roastLabel" />

    <x-sections.coffee-spec
        :producer="$coffees->producer"
        :region="$coffees->region"
        :altitude="$coffees->altitude"
        :process="$coffees->process"
        :varietal="$coffees->varietal"
        :brewMethod="$coffees->brewMethod"
        :brewDose="$coffees->brewDose"
        :brewTime="$coffees->brewTime"
        :brewTemp="$coffees->brewTemp" />

    <x-sections.coffee-story :body="$coffees->content" />

    <x-sections.more-coffees :current="$coffees->slug" :entries="$entries" />

</x-layouts.main>
