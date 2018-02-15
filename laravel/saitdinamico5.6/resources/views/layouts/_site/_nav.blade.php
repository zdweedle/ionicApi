 <nav>
        <div class="nav-wrapper blue">
            <div class="container">
              <a href="#!" class="brand-logo">site Dinamico</a>
              <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
              <ul class="right hide-on-med-and-down">
                <li><a href="{{ route('site.home')}}">Home</a></li>
                <li><a href="{{ route('site.sobre')}}">sobre</a></li>
                <li><a href="{{ route('site.contato')}}">contato</a></li>
                
              </ul>
              <ul class="side-nav" id="mobile-demo">
                <li><a href="{{ route('site.home')}}">Home</a></li>
                <li><a href="{{ route('site.sobre')}}">sobre</a></li>
                <li><a href="{{ route('site.contato')}}">contato</a></li>
                
              </ul>
              </div>
        </div>
    </nav>