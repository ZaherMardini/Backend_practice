<x-app-layout>
<div class="flex">

   <div class="mid-section w-3/4 bg-gray-800 ">
      <div class="cover_img_container w-[95%] mx-auto">
         <x-profile-img :src="$user->cimage" size=""/>
         <div class="line w-full h-[2px] mt-10 bg-gray-500"></div>
         <div class="text-[60px] text-gray-500 font-bold ml-5 mt-5">
            {{$user->name}}
         </div>
         <x-tabs.tab> 
            <x-tabs.option>All posts</x-tabs.option>
            <x-tabs.option>Popular posts</x-tabs.option>
         </x-tabs.tab>
      </div>
      <div class="posts">
         @foreach ($posts as $post)
         <div class="post-likes">
            <x-post class="w-[95%] mx-auto"
            :link="route('post.show', ['username' => $post->user->name,'post' => $post])"
            :imgPath="Storage::url($post->Image)"
            :header="$post->title"
            :content="$post->content">
            <span class="text-gray-500"><i class="fa-regular fa-thumbs-up mx-2 text-gray-500"></i>3.4k (dummy)</span>
            <span class="text-gray-500"><i class="fa-regular fa-comment mx-2 text-gray-500"></i>3.4k (dummy)</span>
            </x-post>
         </div>

         @endforeach
      </div>
   </div>
   <div class="right-side w-1/4 bg-[#1b2533] p-3 border-2 border-l-[#6a7282]">
      <div class="info flex flex-col gap-3 bg-[#009eff21] p-4 text-white">
         <x-profile-img :src="$user->image"/>
            <div>{{$user->name}}</div>
            <div>25 followers (dummy)</div>
            <div class="p-2 bg-emerald-800 w-fit text-white rounded-md">Follow (dummy)</div>
      </div>
   </div>
</div>

</x-app-layout>