<x-app-layout>

    @if(Session::get('edited_ok'))

        <div class="max-w-7xl mx-auto mt-1 bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md" role="alert" >

            <x-alert>{{Session::get('edited_ok')}}</x-alert> 

        </div>

    @endif

    <div class="max-w-7xl mx-auto grid md:grid-cols-3 gap-4 items-start">

        <x-form></x-form>

        <div class="md:col-span-2 my-16 md:mx-6">

            <x-post :$posts></x-post>

            {{ $posts->links() }}

        </div>
    </div>

</x-app-layout>
