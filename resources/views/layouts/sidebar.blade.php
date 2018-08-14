<nav class="col-md-2 d-md-block sidebar">
    <div class="sidebar-sticky">
        <ul class="nav flex-column align-items-center justify-content-center">
            <li class="nav-item">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <div class="logo">
                        <img src="http://amt-arabia.com/wp-content/uploads/layerslider/AMT_LayerSlider/AMT_Logo_300x209-300x209.png"
                             alt="logo"/>
                    </div>
                </a>
            </li>
            <li class="nav-item">
                <p class="m-0"> {{ Auth::user()->name  }} </p>
            </li>
            <li class="nav-item">
                <strong>{{ Auth::user()->title  }}</strong>
            </li>
            <li class="nav-item">
                <a class="nav-link active mt-3" href="/AMT/public">
                    Dashboard <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="rfqs">
                    RfQs
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    Cost Sheets
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    Reports
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    Messages
                </a>
            </li>
        </ul>
    </div>
</nav>