<x-layout>

    <x-slot:heading>Job Page</x-slot:heading>

    <h1>{{ $job['title'] }}</h1>
    <p>
        This job pay {{ $job['salary'] }} Per years.
    </p>
</x-layout>
