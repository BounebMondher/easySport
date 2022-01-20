<header class="masthead mb-auto">
        <div class="inner">
          <h3 class="masthead-brand"><a class="navbar-brand" href="/">EasySport</a></h3>
          <nav class="nav nav-masthead justify-content-center"> 
            <a class="nav-link @if (strpos(Request::url(),"features")==false &&  strpos(Request::url(),"FAQ")==false && strpos(Request::url(),"contact")==false)
            active  
            @endif " href='/'">Acceuil</a>
            <a class="nav-link @if (strpos(Request::url(),"features")!==false)
            active  
            @endif" href="/features">Présentation</a>
            <a class="nav-link @if (strpos(Request::url(),"contact")!==false)
            active  
            @endif" href="/contact">Contact</a>
            <a class="nav-link @if (strpos(Request::url(),"FAQ")!==false)
            active  
            @endif" href="/FAQ">FAQ</a>
            @guest
            @else
            <li class="nav-item" style="margin-left: 10em">
            <a class="nav-link" href="{{route('logout')}}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">se deconnecter</a>
            </li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            @endguest
                        
          </nav>
        </div>
</header>


<!-- <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a class="navbar-brand" href="/">EasySport</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
  
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item @if (strpos(Request::url(),"features")==false &&  strpos(Request::url(),"FAQ")==false && strpos(Request::url(),"contact")==false)
            active  
             @endif ">
              <a class="nav-link" href="/">Acceuillliiiii <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item @if (strpos(Request::url(),"features")!==false)
             active  
             @endif ">
              <a class="nav-link" href="/features">Présentation</a>
            </li>
            <li class="nav-item @if (strpos(Request::url(),"FAQ")!==false)
             active  
             @endif ">
                <a class="nav-link" href="/FAQ">FAQ</a>
            </li>
            <li class="nav-item @if (strpos(Request::url(),"contact")!==false)
             active  
             @endif ">
                <a class="nav-link" href="/contact">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('logout')}}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">se deconnecter</a>
                </li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            
          </ul>
        </div>
      </nav>
    -->