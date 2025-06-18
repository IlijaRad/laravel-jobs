<x-layout>
    <x-slot:heading>
        Jobs
    </x-slot:heading>
    <div class="space-y-4">
        @foreach ($jobs as $job)
            <a href="/jobs/{{ $job['id'] }}" class="block rounded-lg px-4 py-6 border border-gray-200">
                <div class="font-bold text-blue-500 text-sm">{{ $job->employer->name }}</div>
                <span class="font-bold">{{ $job['title']}}</span>: Pays {{ $job['salary'] }} per year.
            </a>
        @endforeach
    </div>

    <div>
        {{ $jobs->links() }}
    </div>
</x-layout>