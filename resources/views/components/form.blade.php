<div class="mt-16 px-6 py-4 bg-white md:mx-auto shadow-md overflow-hidden sm:rounded-lg ">

    <x-form-paragraph>{{__('Add New Post')}}</x-form-paragraph>

    <form action="{{ route('posts.store') }}" method="POST">
        
        @csrf
        
        <div>
            <x-input-label for="formItemTitle" :value="__('Title')" />

            <x-text-input id="formItemTitle" class="block mt-1 w-full" type="text" name="title" :value="old('title')"  required autofocus />

            <x-input-error :messages="$errors->get('title')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="formItemDescription" :value="__('Description')" />

            <textarea class="block w-full" name="description" rows="6" maxlength="250"></textarea>
    
            <x-input-error :messages="$errors->get('description')" class="mt-2" />
        </div>
        
        <div class="flex items-center mt-4">    

            <x-primary-button>
                {{ __('Add') }}
            </x-primary-button>

        </div>
    
    </form>
    
</div>
