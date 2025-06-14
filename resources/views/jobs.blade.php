<x-layout>
    <x-slot:heading>
        Jobs
    </x-slot:heading>
    <h1 class="mb-2">Hello from the jobs page</h1>
    
    <ul>
        @foreach ($jobs as $job)
            <li>
                <a href="/jobs/{{ $job['id'] }}" class="hover:underline">
                    <span class="font-bold">{{ $job['title']}}</span>: Pays {{ $job['salary'] }} per year.
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>