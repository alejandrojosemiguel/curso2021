    {{-- Menu --}}
    <header>
        <h1>La Caja</h1>
        <br>
        <ul>
            <li>
                <a href="{{route('home')}}" class="{{request()->routeIs('home') ? 'active' : ''}}">Home</a>
            </li>
            <li>
                <a href="{{route('cursos.index')}}" class="{{request()->routeIs('cursos.*') ? 'active' : ''}}">Cursos</a>
            </li>
            <li>
                <a href="{{route('nosotros')}}" class="{{request()->routeIs('nosotros') ? 'active' : ''}}">Nosotros</a>
            </li>
            <li>
                <a href="{{route('contactanos.index')}}" class="{{request()->routeIs('contactanos.*') ? 'active' : ''}}">Contactanos</a>
            </li>
        </ul>
    </header>
    <br>