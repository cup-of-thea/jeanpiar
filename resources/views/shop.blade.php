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
            <div class="relative overflow-hidden">
                <!-- Decorative background image and gradient -->
                <div aria-hidden="true" class="absolute inset-0">
                    <div class="absolute inset-0 mx-auto max-w-7xl overflow-hidden xl:px-8">
                        <img src="{{ asset('img/LOGO_BANDEAU_THESORORITY.png') }}" alt="" class="h-full w-full object-cover object-center">
                    </div>
                    <div class="absolute inset-0 bg-white bg-opacity-75"></div>
                    <div class="absolute inset-0 bg-gradient-to-t from-white via-white"></div>
                </div>

                <section aria-labelledby="sale-heading" class="relative mx-auto flex max-w-7xl flex-col items-center px-4 pt-32 text-center sm:px-6 lg:px-8">
                    <div class="mx-auto max-w-2xl lg:max-w-none">
                        <h2 id="sale-heading" class="text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl lg:text-6xl">
                            Soutenir The Sorority
                        </h2>
                        <p class="mx-auto mt-4 max-w-xl text-xl text-gray-600">
                            THE SORORITY est une communauté bienveillante de protection, d’entraide et de partage de femmes et personnes issues des minorités de genre prê.te.s à agir au quotidien pour assurer leur sécurité et leur épanouissement. Pour faire face ensemble notamment aux violences conjugales, intra-familiales et à toutes les formes de harcèlement.
                        </p>
                        <a href="https://streamlabscharity.com/teams/@zest-of-charity/zest-of-charity?member=515307901036928912" class="mt-6 inline-block w-full rounded-md border border-transparent bg-gray-900 py-3 px-8 font-medium text-white hover:bg-gray-800 sm:w-auto">
                            Faire un don #ZestOfCharity
                        </a>
                    </div>
                </section>
            </div>

            <section aria-labelledby="trending-heading" class="bg-white">
                <div class="py-16 sm:py-24 lg:mx-auto lg:max-w-7xl lg:py-32 lg:px-8">
                    <div class="flex items-center justify-between px-4 sm:px-6 lg:px-0">
                        <h2 id="trending-heading" class="text-2xl font-bold tracking-tight text-gray-900">
                            Les produits
                        </h2>
                    </div>

                    <div class="relative pt-8 overflow-x-auto">
                        <div class="relative w-full">
                            <ul role="list" class="mx-4 inline-flex space-x-8 sm:mx-6 lg:mx-0 lg:grid lg:grid-cols-4 lg:gap-x-8 lg:space-x-0">
                                <li class="inline-flex w-64 mb-8 flex-col text-center lg:w-auto">
                                    <div class="group relative">
                                        <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-md bg-gray-200">
                                            <img src="{{ asset('img/saintemanette.png') }}" alt="La Sainte Manette" class="h-full w-full object-cover object-center group-hover:opacity-75">
                                        </div>
                                        <div class="mt-6">
                                            <p class="text-sm text-gray-500">
                                                Gaming
                                            </p>
                                            <h3 class="mt-1 font-semibold text-gray-900">
                                                <a href="#">
                                                    <span class="absolute inset-0"></span>
                                                    La Sainte Manette
                                                </a>
                                            </h3>
                                            <p class="text-sm mt-1 text-gray-700">
                                                Juste la meilleure manette au monde (selon Niki, après c'est Niki hein)
                                            </p>
                                            <p class="mt-1 text-gray-900">355 €</p>
                                        </div>
                                    </div>
                                </li>

                                <li class="inline-flex w-64 mb-8 flex-col text-center lg:w-auto">
                                    <div class="group relative">
                                        <span class="absolute transform -rotate-[20deg] z-20 -left-3 -top-3 inline-flex items-center rounded-full bg-yellow-200 border border-yellow-800 px-3 py-1 text-sm font-medium text-yellow-800">
                                            Top des <br> ventes !!!
                                        </span>
                                        <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-md bg-gray-200">
                                            <img src="{{ asset('img/niki okay.png') }}" alt="Niki okay" class="h-full w-full object-cover object-center group-hover:opacity-75">
                                        </div>
                                        <div class="mt-6">
                                            <p class="text-sm text-gray-500">
                                                Regen notre être de lumière
                                            </p>
                                            <h3 class="mt-1 font-semibold text-gray-900">
                                                <a href="#">
                                                    <span class="absolute inset-0"></span>
                                                    Critique de dessin par Regen
                                                </a>
                                            </h3>
                                            <p class="text-sm mt-1 text-gray-700">
                                                Regen critique ton dessin en live et te met en PLS instantanément
                                            </p>
                                            <p class="mt-1 text-gray-900">9 666 €</p>
                                        </div>
                                    </div>
                                </li>

                                <li class="inline-flex w-64 mb-8 flex-col text-center lg:w-auto">
                                    <div class="group relative">
                                        <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-md bg-gray-200">
                                            <img src="{{ asset('img/gni.jpeg') }}" alt="Raton Laveur bordé pour dormir" class="h-full w-full object-cover object-center group-hover:opacity-75">
                                        </div>
                                        <div class="mt-6">
                                            <p class="text-sm text-gray-500">
                                                Hygiène de vie (ce que je n'ai pas)
                                            </p>
                                            <h3 class="mt-1 font-semibold text-gray-900">
                                                <a href="#">
                                                    <span class="absolute inset-0"></span>
                                                    Le dodo du Gni
                                                </a>
                                            </h3>
                                            <p class="text-sm mt-1 text-gray-700">
                                                Gni te raconte une histoire avant d'aller te coucher
                                            </p>
                                            <p class="mt-1 text-gray-900">37,56 €</p>
                                        </div>
                                    </div>
                                </li>

                                <li class="inline-flex w-64 mb-8 flex-col text-center lg:w-auto">
                                    <div class="group relative">
                                        <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-md bg-gray-200">
                                            <img src="{{ asset('img/canette.jpeg') }}" alt="Une cannette de soda au melon" class="h-full w-full object-cover object-center group-hover:opacity-75">
                                        </div>
                                        <div class="mt-6">
                                            <p class="text-sm text-gray-500">
                                                Food
                                            </p>
                                            <h3 class="mt-1 font-semibold text-gray-900">
                                                <a href="#">
                                                    <span class="absolute inset-0"></span>
                                                    Une cannette
                                                </a>
                                            </h3>
                                            <p class="text-sm mt-1 text-gray-700">
                                                Parce que pourquoi pas ?
                                            </p>
                                            <p class="mt-1 text-gray-900">2,56 €</p>
                                        </div>
                                    </div>
                                </li>

                                <li class="inline-flex w-64 mb-8 flex-col text-center lg:w-auto">
                                    <div class="group relative">
                                        <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-md bg-gray-200">
                                            <img src="{{ asset('img/ballondor.jpeg') }}" alt="Le ballon d'or" class="h-full w-full object-cover object-center group-hover:opacity-75">
                                        </div>
                                        <div class="mt-6">
                                            <p class="text-sm text-gray-500">
                                                Festif
                                            </p>
                                            <h3 class="mt-1 font-semibold text-gray-900">
                                                <a href="#">
                                                    <span class="absolute inset-0"></span>
                                                    Ballon d'or
                                                </a>
                                            </h3>
                                            <p class="text-sm mt-1 text-gray-700">
                                                Un ballon à 250 balles (faites des dins)
                                            </p>
                                            <p class="mt-1 text-gray-900">250 €</p>
                                        </div>
                                    </div>
                                </li>

                                <li class="inline-flex w-64 mb-8 flex-col text-center lg:w-auto">
                                    <div class="group relative">
                                        <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-md bg-gray-200">
                                            <img src="{{ asset('img/nikiwoo.gif') }}" alt="Niki woo" class="h-full w-full object-cover object-center group-hover:opacity-75">
                                        </div>
                                        <div class="mt-6">
                                            <p class="text-sm text-gray-500">
                                                Euh...
                                            </p>
                                            <h3 class="mt-1 font-semibold text-gray-900">
                                                <a href="#">
                                                    <span class="absolute inset-0"></span>
                                                    Tabarouette
                                                </a>
                                            </h3>
                                            <p class="text-sm mt-1 text-gray-700">
                                                Je sais pas, je sais plus, je suis fatiguée, laissez-moi aké ?
                                            </p>
                                            <p class="mt-1 text-gray-900">1 250 €</p>
                                        </div>
                                    </div>
                                </li>

                                <li class="inline-flex w-64 mb-8 flex-col text-center lg:w-auto">
                                    <div class="group relative">
                                        <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-md bg-gray-200">
                                            <img src="{{ asset('img/left4dead2.png') }}" alt="Comment je décris ça moi ?" class="h-full w-full object-cover object-center group-hover:opacity-75">
                                        </div>
                                        <div class="mt-6">
                                            <p class="text-sm text-gray-500">
                                                Gaming
                                            </p>
                                            <h3 class="mt-1 font-semibold text-gray-900">
                                                <a href="#">
                                                    <span class="absolute inset-0"></span>
                                                    Niki Carlo
                                                </a>
                                            </h3>
                                            <p class="text-sm mt-1 text-gray-700">
                                                À quand le déguisement de Carlo en live Niki ? Hein ? Hein ? Ok, j'me calme
                                            </p>
                                            <p class="mt-1 text-gray-900">372,56 €</p>
                                        </div>
                                    </div>
                                </li>

                                <li class="inline-flex w-64 mb-8 flex-col text-center lg:w-auto">
                                    <div class="group relative">
                                        <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-md bg-gray-200">
                                            <img src="{{ asset('img/equipage.png') }}" alt="Poster équipage" class="h-full w-full object-cover object-center group-hover:opacity-75">
                                        </div>
                                        <div class="mt-6">
                                            <p class="text-sm text-gray-500">
                                                Goodies
                                            </p>
                                            <h3 class="mt-1 font-semibold text-gray-900">
                                                <a href="#">
                                                    <span class="absolute inset-0"></span>
                                                    Le poster de la bannière de Niki
                                                </a>
                                            </h3>
                                            <p class="text-sm mt-1 text-gray-700">
                                                Huile sur toile (🤣 non je déconne, c'est imprimé)
                                            </p>
                                            <p class="mt-1 text-gray-900">253,56 €</p>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>
</x-guest-layout>
