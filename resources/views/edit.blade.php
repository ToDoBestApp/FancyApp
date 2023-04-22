<x-app-layout>

    <x-slot name="header">

        <h2 class="font-semibold text-xl text-gray-800 leading-tight">

            <x-nav-link href='/' class="text-xl">{{__('Home')}}</x-nav-link> / {{ __('Post Edit') }}

        </h2>

    </x-slot>

    <div class="flex justify-center">
        
        <x-edit-form :$post></x-edit-form>

    </div>

</x-app-layout>
