<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Budget') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2">
                    <div class="p-6">
                        <div class="flex items-center">
                            <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold">
                                <a href="{{ url('/budget/income') }}"> Tilføj indtægter </a>
                            </div>
                        </div>
                        <div class="ml-12">
                            <div class="mt-2 text-sm text-gray-500">
                                Tilføj de indtægter du har på månedlige basis, du kan tilføje ekstra indtægter på pågældende måneder hvis du fx sælger ting eller får en bonus.
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center">
                            <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold">
                                <a href=""> Tilføj faste udgifter </a>
                            </div>
                        </div>
                        <div class="ml-12">
                            <div class="mt-2 text-sm text-gray-500">
                                Tilføj dine faste udgifter. Faste udgifter kan fx være husleje, mobilabonnemt, tv, streaming, forsikringer osv.
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center">
                            <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold">
                                <a href=""> Tilføj opsparinger </a>
                            </div>
                        </div>
                        <div class="ml-12">
                            <div class="mt-2 text-sm text-gray-500">
                                Hvis du sætter penge ind på en opsparing kan du tilføje beløbene her.
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center">
                            <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold">
                                <a href=""> Tilføj indbetalinger til investering </a>
                            </div>
                        </div>
                        <div class="ml-12">
                            <div class="mt-2 text-sm text-gray-500">
                                Hvis du har brugt penge på at investere i fx aktier, kan disse beløb tilføjes her.
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center">
                            <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold">
                                <a href=""> Tilføj forbrug </a>
                            </div>
                        </div>
                        <div class="ml-12">
                            <div class="mt-2 text-sm text-gray-500">
                                Her skal du tilføje dit forbrug. Dvs. at hver gang du har købt noget skal det tilføjes her. Eks madvare, elektronik og hvad du nu ellers bruger penge på.
                                Det er meget vigtigt at holde dit forbrug up to date, da dit restbeløb vil være afhængig af denne post.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>