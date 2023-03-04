<div class="relative bg-white">
    <img class="h-96 w-full bg-gray-50 object-cover lg:absolute lg:inset-y-0 lg:left-0 lg:h-full lg:w-1/2"
         src="{{ asset('img/nikiandme.png') }}" alt="Image de la chaine">
    <div class="mx-auto grid max-w-7xl lg:grid-cols-2">
        <div class="px-6 pt-16 pb-24 sm:pt-20 sm:pb-32 lg:col-start-2 lg:px-8 lg:pt-32">
            <div class="mx-auto max-w-2xl lg:mr-0 lg:max-w-lg">
                <h2 class="text-base font-semibold leading-8 text-indigo-600">
                    La chaine de Niki
                </h2>
                <div class="flex mt-8 space-x-4 items-center">
                    <img class="inline-block h-14 w-14 rounded-full" src="{{ $information->profileImageUrl }}"
                         alt="La photo de profil de la chaine">
                    <p class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
                       « {{ $information->description }} »
                    </p>
                </div>
                <p class="mt-6 text-lg leading-8 text-gray-600">
                    {{ $information->displayName }}, {{ $information->broadcasterType }}
                </p>
                <p class="mt-2 text-lg leading-8 text-gray-600">
                    Oui, elle crie beaucoup, mais elle streame avec son cœur 💕 (et son blahaj)
                </p>
                <dl class="mt-16 grid max-w-xl grid-cols-1 gap-8 sm:mt-20 sm:grid-cols-2 xl:mt-16">
                    <div class="flex flex-col gap-y-3 border-l border-gray-900/10 pl-6">
                        <dt class="text-sm leading-6 text-gray-600">Vues</dt>
                        <dd class="order-first text-3xl font-semibold tracking-tight text-gray-900">
                            {{ $information->viewCount }}
                        </dd>
                    </div>

                    <div class="flex flex-col gap-y-3 border-l border-gray-900/10 pl-6">
                        <dt class="text-sm leading-6 text-gray-600">Followers</dt>
                        <dd class="order-first text-3xl font-semibold tracking-tight text-gray-900">
                            {{ $followers }}
                        </dd>
                    </div>
                </dl>

                <div class="mt-16">
                    <a href="https://www.twitch.tv/nikiunderscore" class="rounded-md bg-indigo-500 px-3.5 py-2.5 font-semibold text-white shadow-sm hover:bg-indigo-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-400">
                        Le Twitch de Niki
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

