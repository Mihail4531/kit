<x-app :title="$title">
    <x-container>
        <section class="">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
              <h2 class="font-manrope text-4xl font-bold text-gray-900 text-center mb-16">{{$title}}</h2>
              <div class="flex justify-center  gap-y-8 lg:gap-y-0 flex-wrap md:flex-wrap lg:flex-nowrap lg:flex-row lg:justify-between lg:gap-x-8">

                @foreach ($posts as $post )
                 <div class="group w-full max-lg:max-w-xl lg:w-1/3 border border-gray-300 rounded-2xl">
                  <div class="flex items-center">
                      <img src="{{url("storage", $post->image)}}" alt="" class="rounded-t-2xl w-full object-cover">
                  </div>
                  <div class="p-4 lg:p-6 transition-all duration-300 rounded-b-2xl group-hover:bg-gray-50">
                      <span class="text-indigo-600 font-medium mb-3 block">{{$post->created_at}}</span>
                      <h4 class="text-xl text-gray-900 font-medium leading-8 mb-5">{{$post->name}}</h4>
                      <p class="text-gray-500 leading-6 mb-10">{{$post->small_text}}</p>
                      <a href="{{route("post.single", $post->id)}}" class="cursor-pointer text-lg text-indigo-600 font-semibold">Читать далее</a>
                  </div>
                 </div>
                 @endforeach
              </div>
            </div>
        </section>
</x-container>
</x-app>
