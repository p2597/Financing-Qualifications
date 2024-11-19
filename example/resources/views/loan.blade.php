<x-layout>
    <x-slot:heading>
        Loan Offer: {{ $loan->name }}
    </x-slot:heading>

    <h2 class="font-bold text-lg">{{ $loan->name }}</h2>

    <p class="mt-2">
        <strong>Description:</strong> {{ $loan->description }}
    </p>

    <p class="mt-2">
        <strong>Amount Offered:</strong> €{{ number_format($loan->amount, 2) }}
    </p>

    <p class="mt-2">
        <strong>Interest Rate:</strong> {{ $loan->interest_rate }}%
    </p>

    <p class="mt-2">
        <strong>Terms:</strong> {{ $loan->terms }}
    </p>

    <p class="mt-4">
        <strong>Monthly Payment (Estimated):</strong> €{{ number_format($loan->amount / 12, 2) }} for 12 installments
    </p>

    <a href="tel:+123456789" class="inline-block mt-4 bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">
        Call Us Now
    </a>
</x-layout>
