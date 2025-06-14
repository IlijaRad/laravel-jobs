<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>

    <h2 class="font-bold mb-2">{{$job['title']}}</h2>
    <p>This job pays {{$job['salary']}}</p>
</x-layout>