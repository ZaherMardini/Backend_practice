<x-app-layout>
  <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <x-tabs.tab>
      @foreach ($categories as $category)
      <x-tabs.option link="###">
        {{$category->name}}
      </x-tabs.option>
      @endforeach
    </x-tabs.tab>

    {{-- Flow bite component --}}

    {{-- {{dd($posts)}} --}}
    <div class="post_container flex justify-center flex-wrap">
      @forelse ($posts as $post)
        <x-post :imgPath="$post->Image" :header="$post->title" :content="$post->content" link="#"></x-post>
      @empty
        <div class="text-gray-400 my-12">No posts to show</div>
      @endforelse
    </div>
    {{$posts->links()}}
  </div>

    {{-- end Flow bite component --}}
</x-app-layout>
