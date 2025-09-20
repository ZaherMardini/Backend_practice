  <!-- Navigation -->
  <nav class="bg-gray-800 shadow">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex h-16 items-center justify-between">
        <div class="flex justify-between items-center">
          <div class="shrink-0">
            <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company" class="h-8 w-8" />
          </div>
          <div class="hidden md:block">
            <div class="ml-10 flex items-baseline space-x-4">
              {{-- KEEP THOSE --}}
              {{-- <x-nvLink href="/" :clicked="request()->is('/')">Home</x-nvLink>
              <x-nvLink href="/about" :clicked="request()->is('about')">About</x-nvLink>
              <x-nvLink href="/contact" :clicked="request()->is('contact')">Contact</x-nvLink>
              <x-nvLink href="/jobs" :clicked="request()->is('jobs')">Jobs</x-nvLink> --}}
              {{-- KEEP THOSE --}}

              {{$slot ?? ""}}
            </div>
          </div>
        </div>
      </div>
    </div>
  </nav>
