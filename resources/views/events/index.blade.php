<x-admin-layout>

    <table class="border-collapse w-full tabular-nums">
        <tr class="bg-yellow-50">
            <x-th>Titel</x-th>
            <x-th>Datum</x-th>
            <x-th>Tijd</x-th>
            <x-th>Locatie</x-th>
            <x-th>Prijs</x-th>
            <x-th></x-th>
        </tr>
        @foreach($events as $event)
            <tr class="even:bg-gray-200">
                <x-td>{{ $event->title }}</x-td>
                <x-td>{{ $event->date->format('d-m-Y') }}</x-td>
                <x-td>{{ $event->time }}</x-td>
                <x-td>{{ $event->location }}</x-td>
                <x-td class="text-right">€{{ $event->price }}</x-td>
                <x-td class="text-center">
                    <i class="fa-regular fa-pen-to-square"></i>
                </x-td>
            </tr>
        @endforeach
    </table>

</x-admin-layout>