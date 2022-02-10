<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-jet-welcome />
            </div>
        </div>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2">
                    <div class="p-6">
                        <div class="flex items-center">
                            <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold">
                                <a href="{{ url('budget/budget-dashboard') }}"> Opret budget </a>
                            </div>
                        </div>
                        <div class="ml-12">
                            <div class="mt-2 text-sm text-gray-500">
                                Her kan du oprette dit budget. Du vil ved oprettelse blive bedt om at indtaste diverse indtægter og udgifter. Du kan altid ændre i dit budget løbende, så du altid har det korrekte budget ved hånden.
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center">
                            <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold">
                                <a href=""> Se budget </a>
                            </div>
                        </div>
                        <div class="ml-12">
                            <div class="mt-2 text-sm text-gray-500">
                                Her kan du få hele overblikket over dit budget. Indtægter, udgifter, restbeløb til måneden osv. Derudover vil du kunne se hvad dine penge bliver brugt på.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
