@props(['link' => '#'])
@php
  $classes = "inline-block p-4 border-b border-transparent rounded-t-base hover:text-fg-brand hover:border-brand";
@endphp
<li>
  <a href={{$link}} class="{{ $classes }}">{{$slot}}</a>
</li>