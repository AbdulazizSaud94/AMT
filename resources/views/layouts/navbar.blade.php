@if(Auth::user())
<nav class="navbar navbar-expand-md navbar-light navbar-laravel navbar-fixed-top">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="d-none d-sm-block d-md-none">
            <img src="/images/logo.png" alt="AMT Logo" class="w-25"/>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                <li class="d-none d-sm-block d-md-none">
                    <ul class="list-unstyled">
                        <li class="border-top nav-item"> <a class="nav-link" href="{{URL('/')}}"><i class="material-icons align-bottom">dashboard</i>Dashboard</a></li>
                        <li class="border-top nav-item"> <a class="nav-link" href="{{URL('/users')}}"><i class="material-icons align-bottom">contacts</i> Users</a></li>
                        <li class="border-top nav-item"> <a href='{{URL('/rfqs')}}' class="nav-link"><i class="material-icons align-bottom">assignment</i> RFQ</a></li>
                        <li class="border-top nav-item"> <a href= '{{URL('/projects')}}' class="nav-link"><i class="material-icons align-bottom">work</i> Project</a></li>
                        <li class="border-top nav-item"> <a href="{{URL('/systems')}}" class="nav-link"><i class="material-icons align-bottom">computer</i> System</a></li>
                        <li class="border-top nav-item"> <a href= "{{URL('/clients')}}" class="nav-link"><i class="material-icons align-bottom">group</i> Client</a></li>
                        <li class="border-top nav-item"> <a href= "{{URL('/competitors')}}" class="nav-link"><i class="material-icons align-bottom">perm_contact_calendar</i> Competitor Client</a></li>
                        <li class="border-top nav-item border-bottom"> <a href='{{URL('/divisions')}}' class="nav-link"> <i class="material-icons align-bottom">category</i> Division</a></li>

                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link navbar-brand" href="{{ route('logout') }}"
                       onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        <i class="material-icons align-bottom">logout</i> {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>

            </ul>
        </div>
    </div>
</nav>
@endif