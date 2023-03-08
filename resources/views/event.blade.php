<x-guest-layout>
    <div class="bg-white">

        <header class="relative z-10">
            <nav aria-label="Top">
                <!-- Secondary navigation -->
                <div class="bg-white">
                    <div class="border-b border-gray-200">
                        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                            <div class="flex h-16 items-center justify-between">
                                <!-- Logo (lg+) -->
                                <div class="flex items-center">
                                    <a href="{{ route('home') }}" class="flex space-x-2 items-center">
                                        <img class="h-20" src="{{ asset('img/aquoualix.png') }}" alt="Logo Aquoualix" />
                                        <p>Retour</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <main>
            <div class="bg-white">
                <div class="mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
                    <!-- Product -->
                    <div class="lg:grid lg:grid-cols-7 lg:grid-rows-1 lg:gap-x-8 lg:gap-y-10 xl:gap-x-16">
                        <!-- Product image -->
                        <div class="lg:col-span-4 lg:row-end-1">
                            <div class="aspect-w-4 aspect-h-3 overflow-hidden rounded-lg bg-gray-100">
                                <img src="/storage/{{ $event->image }}" alt="" class="object-cover object-center">
                            </div>
                        </div>

                        <div class="mx-auto w-full mt-14 max-w-2xl sm:mt-16 lg:col-span-3 lg:row-span-2 lg:row-end-2 lg:mt-0 lg:max-w-none">
                            @if($event->nailedDonationGoals()->count())
                                <div>
                                    <h2 class="text-xl font-bold tracking-tight text-gray-900 sm:text-2xl mb-4">
                                        Donation Goals Atteints
                                    </h2>
                                    @foreach($event->nailedDonationGoals as $donationGoal)
                                        <div class="border-b py-4">
                                            <div class="flex space-x-4 text-gray-500 items-center">
                                                @if($donationGoal->is_completed)
                                                    <x-phosphor-circle-wavy-check-duotone class="text-green-600 w-8"/>
                                                @else
                                                    <x-phosphor-circle-wavy-duotone class="text-gray-300 w-8"/>
                                                @endif
                                                <div>
                                                    <p>@if($donationGoal->is_every)Tous les @endif{{ $donationGoal->value }} €</p>
                                                    @if($donationGoal->is_every)
                                                        <p>({{ $donationGoal->every_count }} à réaliser)</p>
                                                    @endif
                                                </div>
                                                <h3 class="font-medium text-gray-900">{{ $donationGoal->title }}</h3>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @endif
                        </div>

                        <div class="mx-auto mt-16 w-full max-w-2xl lg:col-span-4 lg:mt-0 lg:max-w-none">

                            <div class="flex flex-col-reverse">
                                <div class="mt-4">
                                    <h1 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl">
                                        {{ $event->title }}
                                    </h1>

                                    <h2 id="information-heading" class="sr-only">Informations sur l'Event</h2>
                                    <p class="mt-4 text-gray-500">
                                        Du {{ $event->start_on_format }} au {{ $event->end_on_format }}
                                    </p>
                                </div>

                            </div>

                            @if($event->donationGoals()->count())
                                <div class="mt-5 text-sm text-gray-600 flex items-center space-x-4">
                                    <x-phosphor-target-duotone class="w-8"/>
                                    <p class="leading-6 line-clamp-3">
                                        {{ $event->donationGoals()->count() }} Donation Goals
                                    </p>
                                </div>
                                <div>
                                    <div class="flex items-center justify-between">
                                        <p class="font-medium text-gray-600 leading-6 line-clamp-3">
                                            {{ $event->amount_done }} € récoltés
                                        </p>
                                        <div class="flex items-center space-x-2">
                                            <x-phosphor-circle-wavy-check-duotone class="w-6 text-blue-500" />
                                            <p class="text-sm text-gray-600 leading-6 line-clamp-3">
                                                {{ $event->nailedDonationGoals()->count() }} / {{ $event->donationGoals()->count() }}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="w-full bg-indigo-50 rounded-full h-2.5 dark:bg-gray-700">
                                        <div class="bg-indigo-600 h-2.5 rounded-full" style="width: {{ $event->percentage }}%"></div>
                                    </div>
                                </div>
                            @endif

                            @if($event->remainingDonationGoals()->count())
                                <div class="mt-40">
                                    <h2 class="text-xl font-bold tracking-tight text-gray-900 sm:text-2xl mb-4">
                                        Donation Goals Restants
                                    </h2>
                                    @foreach($event->remainingDonationGoals as $donationGoal)
                                        <div class="border-b py-4 opacity-50">
                                            <div class="flex space-x-4 text-gray-500 items-center">
                                                @if($donationGoal->is_completed)
                                                    <x-phosphor-circle-wavy-check-duotone class="text-green-600 w-8"/>
                                                @else
                                                    <x-phosphor-circle-wavy-duotone class="text-gray-300 w-8"/>
                                                @endif
                                                <p>@if($donationGoal->is_every)Tous les @endif{{ $donationGoal->value }} €</p>
                                                <h3 class="font-medium text-gray-900">{{ $donationGoal->title }}</h3>
                                                @if($donationGoal->is_every && $donationGoal->every_count > 0)
                                                    <p>{{ $donationGoal->every_count }} à réaliser</p>
                                                @endif
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

        </main>
    </div>
</x-guest-layout>
