@props(['clicked' => false])
<a 
class="
{{
$clicked ? 
'bg-gray-900 text-white' :
'text-gray-300 hover:bg-white/5 hover:text-white'
}}
rounded-md px-3 py-2 text-base font-medium"
aria-current="{{$clicked ? 'page' : 'false'}}"
{{$attributes}}>
{{$slot}}
</a>

{{-- aria-current="page"

<a href="/about" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-white/5 hover:text-white">about</a>
<a href="/contact" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-white/5 hover:text-white">Contact</a> --}}
