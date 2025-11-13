<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    {{-- Flow bite component --}}
    <x-tabs.tab>
      @foreach ($categories as $category)
        <x-tabs.option link="###">
          {{$category->name}}
        </x-tabs.option>
        @endforeach
    </x-tabs.tab>
    {{-- end Flow bite component --}}
</x-app-layout>
