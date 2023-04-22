@foreach ($posts as $post)

    <div class="p-8 mb-8 bg-white shadow-md">

        <div class="text-lg">
            {{$post->title}} 
            <span class="inline-block bg-gray-200 rounded-full px-2 py-1 text-xs font-small text-gray-700 ml-1">{{$post->user->name}}</span>
        </div>

        <p class="text-zinc-600">{{$post->description}}</p>
        
        <div class="pt-2 pb-2">

            @can('delete', $post) {{-- a user who can update his/her own post can delete it as well --}}

                <form class="inline-block" action="{{ route('posts.destroy', $post->id) }}" method="post">
                    @csrf
                    @method('delete')

                    <x-post-button>{{__('Delete')}}</x-post-button>
                </form>
                
                <x-post-link :href="route('posts.edit', $post->id)">{{__('Edit')}}</x-post-link>

            @endcan

        </div>

    </div>

@endforeach
