<x-layout>
    <x-slot:heading>
        Loan {{$loan['id']}}
    </x-slot:heading>

    <h2 class="font-bold text-lg">{{ $loan['title'] }}</h2>

    <p>
        We offer {{ $loan['salary'] }} with 12 installments
    </p>
</x-layout>