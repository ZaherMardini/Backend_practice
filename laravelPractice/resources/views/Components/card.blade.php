@props(['highlight' => false])
<div @class(['highlight' => $highlight, 'card'])>
    {{$slot}}
    <a {{$attributes}}>Details</a>
</div>
