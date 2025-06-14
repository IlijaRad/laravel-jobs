@props(['active' => false, 'type' => 'a'])

@if ($type === 'a')
   <a class="{{ $active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:text-white hover:bg-gray-700' }} rounded-md px-3 py-2 text-sm font-medium" aria-current="page" {{$attributes}}>
        {{ $slot }}
   </a>
@else
    <button class="{{ $active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:text-white hover:bg-gray-700' }} rounded-md px-3 py-2 text-sm font-medium cursor-pointer" aria-current="page" {{$attributes}}>
        {{ $slot }}
   </button>
@endif