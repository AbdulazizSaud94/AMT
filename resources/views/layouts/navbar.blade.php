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
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
                <li class="d-none d-sm-block d-md-none">
                    <ul class="list-unstyled">
                        <li class="border-top p-2 sidebar-link" onclick="window.location = '/'">Dashboard</li>
                        <li class="border-top p-2 sidebar-link"  onclick="window.location = '/users'">Users</li>
                        <li class="border-top p-2 sidebar-link " onclick="window.location = '/rfqs'">RFQ</li>
                        <li class="border-top p-2 sidebar-link " onclick="window.location = '/projects'">Project</li>
                        <li class="border-top p-2 sidebar-link " onclick="window.location = '/clients'">Client</li>
                        <li class="border-top p-2 sidebar-link " onclick="window.location = '/systems'">System</li>
                        <li class="border-top p-2 sidebar-link" onclick="window.location = '/divisions'">Division</li>
                    </ul>
                </li>

            </ul>
        </div>
    </div>
</nav>
@endif