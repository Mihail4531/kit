<x-app :title="$title">
    <x-container>
    <h1 class="text-[48px] font-bold text-black text-center mb-[20px]" >{{ $title }}</h1>
    <div class="flex flex-wrap gap-[20px]">
   @foreach ($posts as $post )

   <div class="bg-gray-100 p-5 mb-10">
    <h2>{{$post->category->name}}</h2>
    <h1 class="font-bold text-2xl mb-2">{{$post->name}}</h1>
    <p class="my-3">{{$post->content}}</p>
    <button class="text-white font-semibold bg-blue-600 hover:bg-blue-800 p-2 my-1 rounded">Читать далее</button>
</div>
   @endforeach
   </div>
</x-container>
</x-app>
