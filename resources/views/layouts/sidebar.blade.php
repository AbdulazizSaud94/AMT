<nav class="col-md-2 d-md-block sidebar p-0">
    <div class="sidebar-sticky">
        <ul class="nav flex-column align-items-center justify-content-center">
            <li class="nav-item mb-4">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <div class="logo">
                        <img src="/AMT/public/images/logow.png"
                             alt="logo"/>
                    </div>
                </a>
            </li>
            <li class="nav-item">
                <h5 class="m-0 text-light"> {{ Auth::user()->name  }} </h5>
            </li>
            <li class="nav-item">
                <p>{{ Auth::user()->title  }}</p>
            </li>
        </ul>
        <ul class="nav flex-column align-items-baseline d-block">
            <li class="nav-item">
                <a class="nav-link mt-3" href="/AMT/public">
                    <i class="material-icons">
                        dashboard
                    </i>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="rfqs">
                    <i class="material-icons">
                        assignment
                    </i>
                    RfQs
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="users">
                    <i class="material-icons">
                        contacts
                    </i>
                    Users
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="projects">
                    <i class="material-icons">
                        work
                    </i>
                    Projects
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="systems">
                    <i class="material-icons">
                        computer
                    </i>
                    Systems
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="clients">
                    <i class="material-icons">
                        group
                    </i>
                    Clients
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="divisions">
                    <i class="material-icons">
                        category
                    </i>
                    Divisions
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="material-icons">
                        description
                    </i>
                    Cost Sheets
                </a>
            </li>
        </ul>
    </div>
</nav>