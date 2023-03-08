<div>
    @if($events->count())
        <div class="bg-white py-24 sm:py-32">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="mx-auto max-w-2xl text-center">
                    <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
                        Derniers Events
                    </h2>
                    <p class="mt-2 text-lg leading-8 text-gray-600">
                        Les derniers events de live de Niki :D
                    </p>
                </div>
                <div class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-y-20 gap-x-8 lg:mx-0 lg:max-w-none lg:grid-cols-3">

                    @foreach($events as $event)

                        <article class="flex flex-col items-start justify-between">
                            <a href="{{ route('event', $event) }}">

                                <div class="relative w-full">
                                    <img src="/storage/{{ $event->image }}" alt="" class="aspect-[16/9] w-full rounded-2xl bg-gray-100 object-cover sm:aspect-[2/1] lg:aspect-[3/2]">
                                    <div class="absolute inset-0 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>
                                </div>
                                <div class="w-full">
                                    <div class="mt-8 flex items-center justify-between gap-x-4 text-xs">
                                        <p class="text-gray-500">{{ $event->start_on }}</p>
                                        <p class="text-gray-500">{{ $event->end_on }}</p>
                                    </div>
                                    <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                                        {{ $event->title }}
                                    </h3>
                                    @if($event->donationGoals()->count())
                                        <div class="mt-5 text-sm text-gray-600 flex items-center space-x-4">
                                            <x-phosphor-target-duotone class="w-8"/>
                                            <p class="leading-6 line-clamp-3">
                                                {{ $event->donationGoals()->count() }} Donation Goals
                                            </p>
                                        </div>
                                    @endif
                                </div>

                            </a>
                        </article>

                    @endforeach
                </div>
            </div>
        </div>
    @endif
</div>
