<x-layout>
    <x-slot:heading>
        Loan Offers
    </x-slot:heading>

    <ul class="list-disc pl-5">
        @foreach ($loans as $loan)
            <li class="mb-3">
                <a href="/loans/{{ $loan->id }}" class="text-blue-500 hover:underline">
                    <strong>{{ $loan->name }}:</strong> Offers up to €{{ number_format($loan->amount, 2) }} with {{ $loan->interest_rate }}% interest rate.
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>
