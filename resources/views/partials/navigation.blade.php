    {{-- ul>*4>a --}}
    {{-- This is for a funtional navegation --}}
    <nav>    
        <ul>
            {{-- The archive route is for redirection the routes with the name in the web --}}
            {{-- Is better use "{{  }}" fot security in cause of hacking--}}
            <li><a href="{{  route('home') }}">Home</a></li>
            <li><a href=" {{ route('posts.index') }}"> Blog</a></li>
            <li><a href="{{ route('about') }}">About</a></li>
            <li><a href="{{ route('contacto') }}">Contact</a></li>

            <li><a href="{{ route('register') }}"
                class="lg:px-3 py-2 text-sm font-medium rounded-md hover:text-sky-600 dark:hover:text-white {{ request()->routeIs('register') ? 'text-sky-600 dark:text-white' : 'text-slate-400' }}">
                 Register
             </a>

            
        </ul>
    </nav>