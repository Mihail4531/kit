<x-app :title="$title">
    <x-container>
        <div class="">
    <h1 class="text-[48px] font-bold text-black text-center mb-[20px]" >{{ $title }}</h1>



   <div class="bg-gray-100 p-5 mb-10">
    <h2></h2>
    <h1 class="font-bold text-2xl mb-2">{{$post->name}}</h1>
    <p class="my-3">{{$post->content}}</p>

</div>
</div>

</x-container>
</x-app>
