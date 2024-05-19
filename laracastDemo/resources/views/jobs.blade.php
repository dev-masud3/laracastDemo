<x-layout>

    <x-slot:heading>Jobs Page</x-slot:heading>

    @foreach ($jobs as $job)
        <ul>
            <a href="/jobs/{{ $job['id'] }}">
                <li><strong>{{ $job['title'] }}</strong> Pays {{ $job['salary'] }} per Year.</li>
            </a>
        </ul>
    @endforeach
</x-layout>
