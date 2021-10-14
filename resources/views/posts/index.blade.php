<x-app-layout>
    <div class="container py-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

            @foreach ($posts as $post)
                <article class="w-full h-80 bg-cover bg-center @if($loop->first) md:col-span-2 @endif" style="background-image:url(@if($post->image){{Storage::url($post->image->url)}}@else https://cdn.pixabay.com/photo/2015/08/13/01/00/keyboard-886462__340.jpg @endif)">
                    <div class="w-full h-full px-8 flex flex-col justify-center">
                       <div>
                           @foreach ($post->tags as $tag)
                               <a href="{{ route('posts.tag',$tag) }}" class="inline-block px-3 h-6 bg-{{ $tag->color }}-600 text-white rounded-full">
                                    {{ $tag->name }}
                               </a>
                           @endforeach
                       </div>
                        <h1 class="text-4xl text-white leading-8 font-bold mt-2">
                            <a href="{{ route('posts.show',$post) }}">
                                {{ $post->name }}
                               
                            </a>
                        </h1>
                      
                        <div class="text-2x font-extrabold bg-white bg-opacity-100">
                            <span class="bg-clip-text text-transparent bg-gradient-to-r from-green-400 to-blue-500">
                              {{  $post->user->email}}
                            </span>
                          </div>
                   </div>
                </article>
            @endforeach

        </div>

        <div class="mt-4">
            {{ $posts->links() }}
        </div>
</div>
</x-app-layout>