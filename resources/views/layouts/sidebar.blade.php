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
        <li class="border-top p-2 sidebar-link" onclick="window.location = '{{url('/')}}' ">Dashboard</li>
        <li class="border-top p-2 sidebar-link " onclick="window.location = '{{url('rfqs')}}' ">RFQ</li>
        <li class="border-top p-2 sidebar-link"  onclick="window.location = '{{url('users')}}' ">Users</li>
        <li class="border-top p-2 sidebar-link " onclick="window.location = '{{url('projects')}}' ">Project</li>
        <li class="border-top p-2 sidebar-link " onclick="window.location = '{{url('systems')}}' ">System</li>
        <li class="border-top p-2 sidebar-link " onclick="window.location = '{{url('clients')}}' ">Client</li>
        <li class="border-top p-2 sidebar-link border-bottom" onclick="window.location = '{{url('divisions')}}' ">Division</li>