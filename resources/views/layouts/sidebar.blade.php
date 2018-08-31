<aside>

    <ul class="list-unstyled">
        <li class="m-2"><img src="/images/logow.png" alt="AMT Logo" class="img-fluid"/></li>

        <li>
            <ul class="list-unstyled p-2">
                <li class="h4 text-white text-lg-center font-weight-bold">{{ Auth::user()->name }}</li>
                <li class="h5 text-white text-lg-center font-weight-bold">{{Auth::user()->title}}</li>
            </ul>
        </li>
        <li class="border-top p-2 sidebar-link" onclick="window.location = '/'"><i class="material-icons align-bottom">dashboard</i> Dashboard</li>
        <li class="border-top p-2 sidebar-link"  onclick="window.location = '/users'"><i class="material-icons align-bottom">contacts</i> Users</li>
        <li class="border-top p-2 sidebar-link " onclick="window.location = '/rfqs'"><i class="material-icons align-bottom">assignment</i> RFQ</li>
        <li class="border-top p-2 sidebar-link " onclick="window.location = '/projects'"> <i class="material-icons align-bottom">work</i> Project</li>
        <li class="border-top p-2 sidebar-link " onclick="window.location = '/clients'"> <i class="material-icons align-bottom">group</i> Client</li>
        <li class="border-top p-2 sidebar-link " onclick="window.location = '/systems'"> <i class="material-icons align-bottom">computer</i> System</li>
        <li class="border-top p-2 sidebar-link border-bottom" onclick="window.location = '/divisions'"> <i class="material-icons align-bottom">category</i> Division</li>
    </ul>
</aside>