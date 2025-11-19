@props(['src' => Auth::user()->image, 'size' => 'max-w-[200px] max-h-full'])

@php
  $styles = "object-cover $size rounded-base mb-4 md:mb-0";
  $attributeDefaults = ['class' => $styles];
@endphp

<div>
  <img src="{{Storage::url($src)}}" {{$attributes->merge($attributeDefaults)}}>
</div>