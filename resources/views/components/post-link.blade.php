@props(['href'])

<a class="inline-block mr-3 rounded bg-neutral-800 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-neutral-50 bg-zinc-700" href="{{$href}}">
    {{$slot}}
</a>
