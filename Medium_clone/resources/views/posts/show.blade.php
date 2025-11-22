<x-app-layout>
  <div class="container flex flex-col mx-auto p-3 bg-gray-400 max-w-[70%]">
    {{-- User info section --}}
    <h1 class="mx-auto text-2xl font-bold">{{$post->title}}</h1>
    <div class="flex flex-wrap gap-3 p-2">
      <img src="{{Storage::url($post->user->image)}}" class="w-[90px] h-[90px] rounded-full"/>
        <span class="flex flex-col justify-center text-gray-700">
          <div>
            
            <a href="{{route('profile.show', ['user' => $post->user])}}" class="font-bold">{{$username}}</a>

            @if (Auth::user()->id !== $post->user->id)
            <form id="fol" action="{{route('follow', ['user' => $post->user])}}" method="post" hidden>@csrf</form>
            <x-primary-button class="text-emerald-700" form="fol">Follow (dummy)</x-primary-button>
            @endif

            {{-- <x-secondary-button form="fol" class="text-md text-emerald-700 font-bold">Follow (dummy)</x-secondary-button> --}}
          </div>
          <span>{{$post->readingTime()}} min read . {{$post->created_at->format('M d, Y')}}</span>
        </span>
    </div>
    {{-- End User info section --}}

    {{-- Likes section --}}
    <div>
      <div class="w-full h-[2px] my-2 bg-gray-500 text-gray-500"></div>
        {{-- <i class="fa-solid fa-thumbs-up mx-2 text-gray-500"></i><span class="text-gray-700">3.4k</span> --}}
        <i class="fa-regular fa-thumbs-up mx-1 text-gray-500"></i> <span class="text-gray-700">{{$post->likes()}}</span>
        <a href="{{route('comment.show', ['user' => $post->user, 'post' => $post])}}" class="text-gray-700"><i class="fa-regular fa-comment mx-2 text-gray-500"></i>{{$post->comments()}}</a>
      <div class="w-full h-[2px] my-2 bg-gray-500"></div>
    </div>
    {{-- End Likes section --}}

    {{-- content section --}}
    <div class="p-3 my-2">
      {{$post->content}}
    </div>
    {{-- End content section --}}

    {{-- Category section --}}
    <div class="p-2 bg-gray-500 text-white rounded-md w-fit">
      {{$post->category->name}}
    </div>
    {{-- End Category section --}}


    {{-- Image section --}}
    <div class="p-3 my-2">
      <x-profile-img :src="$post->Image" size="w-3/4 h-3/4" class="mx-auto"/>
    </div>
    {{-- End Image section --}}

  </div>
</x-app-layout> 