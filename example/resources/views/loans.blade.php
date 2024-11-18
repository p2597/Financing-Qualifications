<x-layout>
    <x-slot:heading>
    Loan Offers
    </x-slot:heading>

    <ul>
        @foreach ($loans as $loan)
            <li>
                <a href="/loans/{{ $loan['id'] }}" class="text-blue-500 hover:underline">
                    <strong>{{ $loan['title'] }}:</strong> Pays {{ $loan['salary'] }} per year.
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>