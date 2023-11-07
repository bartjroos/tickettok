<x-public-layout>
    
    <h1 class="mb-5 text-bold font-bold italic text-3xl">Aankomende events</h1>
    <div class="grid grid-cols-6 gap-12">
    @foreach ($events as $event)
        <div class="flex h-56 shadow-md bg-white rounded-md overflow-hidden @if($loop->index < 4) col-span-3 @else col-span-2 @endif">
            <img class="max-w-[50%] object-cover" src="https://picsum.photos/300/200?{{ $event->id }}" alt="{{ $event->title }}">
            <div class="p-3 overflow-hidden">
                <h2 class="truncate font-bold text-red-800 text-lg">{{ $event->title }}</h2>
                <p class="mb-3 text-gray-500 text-sm">
                    <i class="fa-solid fa-location-dot fa-fw"></i> {{ $event->location }}<br />
                    <i class="fa-regular fa-clock fa-fw"></i>
                     {{ $event->date->format('d-m-Y') }} {{ substr($event->time, 0, 5) }}</p>
                <p class="text-sm text-gray-500 text-clip">{{ $event->description }}</p>
            </div>
        </div>
    @endforeach
    </div>

</x-public-layout>