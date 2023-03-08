<x-guest-layout>
    <div class="isolate bg-gray-900">
        <div class="absolute inset-x-0 top-[-10rem] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[-20rem]">
            <svg class="relative left-[calc(50%-11rem)] -z-10 h-[21.1875rem] max-w-none -translate-x-1/2 rotate-[30deg] sm:left-[calc(50%-30rem)] sm:h-[42.375rem]" viewBox="0 0 1155 678">
                <path fill="url(#f4773080-2a16-4ab4-9fd7-579fec69a4f7)" fill-opacity=".2" d="M317.219 518.975L203.852 678 0 438.341l317.219 80.634 204.172-286.402c1.307 132.337 45.083 346.658 209.733 145.248C936.936 126.058 882.053-94.234 1031.02 41.331c119.18 108.451 130.68 295.337 121.53 375.223L855 299l21.173 362.054-558.954-142.079z" />
                <defs>
                    <linearGradient id="f4773080-2a16-4ab4-9fd7-579fec69a4f7" x1="1155.49" x2="-78.208" y1=".177" y2="474.645" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#9089FC" />
                        <stop offset="1" stop-color="#FF80B5" />
                    </linearGradient>
                </defs>
            </svg>
        </div>
        <div class="px-6 pt-6 lg:px-8">
            <nav class="flex items-center justify-between" aria-label="Global">
                <div class="flex lg:flex-1">
                    <a href="{{ route('home') }}" class="-m-1.5 p-1.5">
                        <img class="h-20" src="{{ asset('img/aquoualix.png') }}" alt="Logo Aquoualix" />
                    </a>
                </div>
                <div class="flex flex-1 justify-end space-x-4">
                    @if(Route::has('login'))
                        @auth()
                            <a href="/admin" class="text-sm font-semibold leading-6 text-white">Dashboard</a>
                        @else
                            <a href="/admin/login" class="text-sm font-semibold leading-6 text-white">Log in</a>
                            @if(Route::has('register'))
                                <a href="{{ route('register') }}" class="text-sm font-semibold leading-6 text-white">Register</a>
                            @endif
                        @endauth
                    @endif
                </div>
            </nav>
        </div>
        <main>
            <div class="relative py-24 sm:py-32 lg:pb-40">
                <div class="mx-auto max-w-7xl px-6 lg:px-8">
                    <div class="mx-auto max-w-2xl text-center">
                        <h1 class="text-4xl font-bold tracking-tight text-white sm:text-6xl">
                            Jean Piaaaaar
                        </h1>
                        <p class="mt-6 text-lg leading-8 text-gray-300">
                            Jean piar, c'est l'assistant virtuel personnel de Nikiunderscore, et sur ce site, il a une nouvelle mission : aider les viewers à
                            voir et rejoindre les réseaux de Niki ^-^
                        </p>
                        <img class="h-36 mt-4 mx-auto" src="{{ asset('img/aquoualix.png') }}" alt="Logo Aquoualix" />
                        <div class="mt-10 flex items-center justify-center gap-x-6">
                            <a href="https://www.twitch.tv/nikiunderscore" class="rounded-md bg-indigo-500 px-3.5 py-2.5 font-semibold text-white shadow-sm hover:bg-indigo-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-400">
                                Le Twitch de Niki
                            </a>
                            <a href="{{ route('shop') }}" class="font-semibold leading-6 text-white">La boutique <span aria-hidden="true">→</span></a>
                        </div>
                    </div>
                    <img src="{{ asset('img/equipage.png') }}" alt="App screenshot" width="2432" height="1442" class="mt-16 rounded-md bg-white/5 shadow-2xl ring-1 ring-white/10 sm:mt-24">
                </div>
                <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]">
                    <svg class="relative left-[calc(50%+3rem)] h-[21.1875rem] max-w-none -translate-x-1/2 sm:left-[calc(50%+36rem)] sm:h-[42.375rem]" viewBox="0 0 1155 678">
                        <path fill="url(#ee0717bf-3e43-49df-b1bd-de36422ed3d3)" fill-opacity=".2" d="M317.219 518.975L203.852 678 0 438.341l317.219 80.634 204.172-286.402c1.307 132.337 45.083 346.658 209.733 145.248C936.936 126.058 882.053-94.234 1031.02 41.331c119.18 108.451 130.68 295.337 121.53 375.223L855 299l21.173 362.054-558.954-142.079z" />
                        <defs>
                            <linearGradient id="ee0717bf-3e43-49df-b1bd-de36422ed3d3" x1="1155.49" x2="-78.208" y1=".177" y2="474.645" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#9089FC" />
                                <stop offset="1" stop-color="#FF80B5" />
                            </linearGradient>
                        </defs>
                    </svg>
                </div>
            </div>
        </main>
    </div>

    <livewire:twitch.component.broadcaster-information/>

    <div class="bg-gray-900 py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="-mx-6 grid grid-cols-2 gap-0.5 overflow-hidden sm:mx-0 sm:rounded-2xl md:grid-cols-3">
                <a href="https://www.twitch.tv/nikiunderscore">
                    <div class="bg-white/5 text-white p-6 sm:p-10 flex flex-col items-center space-y-2 hover:bg-purple-500/20">
                        <x-phosphor-twitch-logo-duotone />
                        <p class="text-2xl">Twitch</p>
                    </div>
                </a>
                <a href="https://discord.com/invite/Prvndfx4cf">
                    <div class="bg-white/5 text-white p-6 sm:p-10 flex flex-col items-center space-y-2 hover:bg-purple-500/20">
                        <x-phosphor-discord-logo-duotone />
                        <p class="text-2xl">Discord</p>
                    </div>
                </a>
                <a href="https://twitter.com/NikiUnderscore">
                    <div class="bg-white/5 text-white p-6 sm:p-10 flex flex-col items-center space-y-2 hover:bg-purple-500/20">
                        <x-phosphor-twitter-logo-duotone />
                        <p class="text-2xl">Twitter</p>
                    </div>
                </a>
                <a href="https://www.instagram.com/nikiunderscore">
                    <div class="bg-white/5 text-white p-6 sm:p-10 flex flex-col items-center space-y-2 hover:bg-purple-500/20">
                        <x-phosphor-instagram-logo-duotone />
                        <p class="text-2xl">Instagram</p>
                    </div>
                </a>
                <a href="https://www.tiktok.com/@nikiunderscore_?is_from_webapp=1&sender_device=pc">
                    <div class="bg-white/5 text-white p-6 sm:p-10 flex flex-col items-center space-y-2 hover:bg-purple-500/20">
                        <x-phosphor-tiktok-logo-duotone />
                        <p class="text-2xl">Tiktok</p>
                    </div>
                </a>
                <a href="https://streamlabs.com/nikiunderscore">
                    <div class="bg-white/5 text-white p-6 sm:p-10 flex flex-col items-center space-y-2 hover:bg-purple-500/20">
                        <x-phosphor-coins-duotone />
                        <p class="text-2xl">Tipjar</p>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <livewire:event.component.last-events />

    <div class="bg-indigo-700">
        <div class="py-24 px-6 sm:px-6 sm:py-32 lg:px-8">
            <div class="mx-auto max-w-2xl text-center">
                <div class="flex items-center justify-center w-full -ml-4 space-x-2">
                    <img class="w-14" src="{{ asset('img/thesorority.webp') }}" alt="Le logo The Sorority">
                    <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">
                        The Sorority
                    </h2>
                </div>
                <p class="mx-auto mt-6 max-w-xl text-lg leading-8 text-indigo-200">
                    Jean Piaaar et Niki rappellent aussi qu'iels soutiennent The Sorority, dont l'objectif est
                    d'assurer la sécurité et l'épanouissement des femmes et des personnes issues des minorités de
                    genre
                </p>
                <div class="mt-10 flex items-center justify-center gap-x-6">
                    <a href="https://www.jointhesorority.com/"
                       class="rounded-md bg-white px-3.5 py-2.5 text-sm font-semibold text-indigo-600 shadow-sm hover:bg-indigo-50 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">
                        Découvrir
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
