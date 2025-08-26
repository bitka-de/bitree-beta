@extends('layout.app')

@section('content')
    <section class="flex flex-col gap-4">

        <h1
            class="mb-4 text-4xl text-center font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
            Hallo Internet ✌️
        </h1>

        <p class="max-w-3xl mx-auto px-8 text-center text-gray-500 dark:text-gray-400">
            <span class="font-semibold">Ein Link – unendlich viele Chancen.</span>
            Mit <span class="font-medium text-gray-900 dark:text-white">Bitree</span> präsentierst du dein Unternehmen
            in sozialen Netzwerken professionell,
            <span class="underline decoration-green-500 decoration-2">DSGVO-konform</span> und das
            <span class="underline">in nur wenigen Minuten.</span>
        </p>

        <p class="max-w-3xl mx-auto px-8 text-center text-gray-500 dark:text-gray-400">
            Egal ob <span class="font-medium text-gray-900 dark:text-white">Produkte</span> oder <span
                class="font-medium text-gray-900 dark:text-white">Dienstleistungen</span>:
            Mit nur einem Link kannst du dich zeigen, Kunden gewinnen und direkt verkaufen.
            <span class="font-semibold">Einfach. Schnell. Ohne unnötigen Aufwand.</span>
        </p>
    </section>

    <section class="py-12 mt-8 pb-24 px-6 bg-green-50">
        <div class="max-w-xl mx-auto text-center">
            <h2 class="text-2xl font-bold text-gray-900 mb-4">
                Countdown bis zum Beta-Start 🎉
            </h2>
            <p class="text-gray-600 mb-6">
                Sei bereit! Die Bitree Beta startet am <span class="font-semibold">08.09.2025 um 12:00 Uhr
                    (Berlin)</span>.
            </p>
            <div id="countdown" class="flex justify-center gap-6 text-3xl font-mono text-green-700">
                <div>
                    <span id="days">00</span>
                    <div class="text-xs text-gray-500">Tage</div>
                </div>
                <div>
                    <span id="hours">00</span>
                    <div class="text-xs text-gray-500">Stunden</div>
                </div>
                <div>
                    <span id="minutes">00</span>
                    <div class="text-xs text-gray-500">Minuten</div>
                </div>
                <div>
                    <span id="seconds">00</span>
                    <div class="text-xs text-gray-500">Sekunden</div>
                </div>
            </div>
        </div>
    </section>

    <section class="from-gray-50 py-16 px-6 -mt-12 bg-gradient-to-t">
        <div class="max-w-xl mx-auto -mt-18">
            <div class="bg-white rounded-2xl shadow p-8 sm:p-10">

                <h2 class="text-3xl font-bold text-gray-900 mb-4 text-center text-balance">
                    Sei von Anfang an dabei 🚀
                </h2>

                <p class="text-gray-600 mb-8 text-center">
                    Teste Bitree als einer der Ersten in der exklusiven Beta-Version.
                    Trag dich jetzt ein und sichere dir deinen Zugang, bevor wir offiziell starten.
                </p>

                <form method="POST" action="https://bitree.test/beta-signup" class="space-y-4">
                    <input type="hidden" name="_token" value="cO8OUZRi6uGzs5JPs23t6Htm8KzWvxz5YdGprsGF"
                        autocomplete="off">
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900">
                            Deine E-Mail-Adresse
                        </label>
                        <input type="email" name="email" id="email"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg 
             focus:ring-green-500 focus:border-green-500 block w-full p-2.5"
                            placeholder="name@email.de" required value="">
                    </div>
                    <button type="submit"
                        class="w-full text-white bg-green-600 hover:bg-green-700 
             focus:ring-4 focus:outline-none focus:ring-green-300 
             font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                        Jetzt vormerken
                    </button>
                </form>

                <p class="text-xs text-green-600 mt-6 text-center">
                    100% kostenlos & DSGVO-konform.
                </p>
            </div>
        </div>
    </section>
@endsection
