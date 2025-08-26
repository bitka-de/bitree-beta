<footer class="bg-gray-200 text-gray-500 py-3">
    <div class="max-w-screen-xl mx-auto px-4 flex flex-col md:flex-row items-center justify-between text-xs">
        <span>&copy; {{ date('Y') }} {{ config('app.name') }}. Alle Rechte vorbehalten.</span>
        <ul class="flex space-x-4 mt-4 md:mt-0">
            <li>
                <a href="{{ route('imprint') }}" class="hover:underline">Impressum</a>
            </li>
            <li>
                <a href="{{route('privacy')}}" class="hover:underline">Datenschutz</a>
            </li>
            <li>
                <a href="{{ route('agb') }}" class="hover:underline">AGB</a>
            </li>
        </ul>
    </div>
</footer>