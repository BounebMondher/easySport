<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    EasySport
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                            

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li><a class="nav-link" href="{{ route('register') }}">S'enregistrer</a></li>
                        @else
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ Auth::user()->name }}  <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    
                                        <a class="dropdown-item" href="players/{{Session::get('player')['player_id']}}">Profile</a>
                                        <a class="dropdown-item" href="{{ route('home') }}">Gèrer</a>
                                        <a class="dropdown-item" href="{{ route('home') }}">Rejoindre une équipe</a>
                                        <a class="dropdown-item" href="{{ route('home') }}">Créer une nouvelle équipe</a>
                                        <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        @guest
        @else
        @if(isset($myteams))
        <nav class="navbar navbar-expand-md  " style="background-color:rgb(0, 140, 158);width:80%;margin-left:10%">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        Nom de l'équipe
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
    
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">
                                
                                <li><a class="nav-link" href="{{ route('home') }}">Effectif</a></li>
                                <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Parametre
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="{{ route('home') }}">Modifier équipe</a>
                                                <a class="dropdown-item" href="{{ route('home') }}">Stades</a>
                                                <a class="dropdown-item" href="{{ route('home') }}">Adversaires</a>
                                                <a class="dropdown-item" href="{{ route('home') }}">Taches</a>
                                        </div>
                                </li>
                               
    
                        </ul>
    
                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                           
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        gèrer <span class="caret"></span>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('home') }}">modifier l'équipe</a>
                                            <a class="dropdown-item" href="{{ route('home') }}">Rejoindre une équipe</a>
                                            <a class="dropdown-item" href="{{ route('home') }}">créer une nouvelle équipe</a>
                                            <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="{{ route('logout') }}">
                                            Quitter l'équipe
                                        </a>
    
                                        
                                    </div>
                                </li>
                           
                        </ul>
                    </div>
                </div>
            </nav>
            @endif
            @endguest