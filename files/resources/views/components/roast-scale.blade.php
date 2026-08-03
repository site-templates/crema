@props(['level' => 3])
<!--
    Five segments, filled left to right from the entry's roastLevel (1–5).
    The fill is currentColor, so the scale takes the colour of whatever text
    it sits beside and follows every palette swap. Used inside the coffee
    cards and the spec table; it is never a section of its own.
-->
<span class="roast-scale">
    @if ($level >= 1)<span class="is-on"></span>@else<span></span>@endif
    @if ($level >= 2)<span class="is-on"></span>@else<span></span>@endif
    @if ($level >= 3)<span class="is-on"></span>@else<span></span>@endif
    @if ($level >= 4)<span class="is-on"></span>@else<span></span>@endif
    @if ($level >= 5)<span class="is-on"></span>@else<span></span>@endif
</span>
