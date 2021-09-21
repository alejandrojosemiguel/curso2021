    {{-- Menu --}}
    <header>
        <div class="container mx-auto">
            <nav class="flex items-center justify-between flex-wrap bg-blue-500 p-6">
                <div class="flex items-center flex-shrink-0 text-white mr-6">
                  <svg class="fill-current h-8 w-8 mr-2" width="54" height="54" viewBox="0 0 54 54" xmlns="http://www.w3.org/2000/svg"><path d="M13.5 22.1c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05zM0 38.3c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05z"/></svg>
                  <span class="font-semibold text-xl tracking-tight">La Caja</span>
                </div>
                <ul class="flex">
                    <li class="mr-6">
                        <a href="{{route('home')}}" class=" hover:text-gray-100 {{request()->routeIs('home') ? 'text-white' : 'text-gray-400'}}">Home</a>
                    </li>
                    <li class="mr-6">
                        <a href="{{route('cursos.index')}}" class="hover:text-gray-100 {{request()->routeIs('cursos.*') ? 'text-white' : 'text-gray-400'}}">Cursos</a>
                    </li>
                    <li class="mr-6">
                        <a href="{{route('nosotros')}}" class="hover:text-gray-100 {{request()->routeIs('nosotros') ? 'text-white' : 'text-gray-400'}}">Nosotros</a>
                    </li>
                    <li class="mr-6">
                        <a href="{{route('contactanos.index')}}" class="hover:text-gray-100 {{request()->routeIs('contactanos.*') ? 'text-white' : 'text-gray-400'}}">Contactanos</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>