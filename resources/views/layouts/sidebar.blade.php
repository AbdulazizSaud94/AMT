<aside>

    <ul class="list-unstyled">
        <li class="m-2"><img src="/images/logow.png" alt="AMT Logo" class="img-fluid"/></li>

        <li>
            <ul class="list-unstyled p-2">
                <li class="h4 text-white text-lg-center font-weight-bold">{{ Auth::user()->name }}</li>
                <li class="h5 text-white text-lg-center font-weight-bold">{{Auth::user()->title}}</li>
            </ul>
        </li>
        <li class="border-top p-2 sidebar-link" onclick="window.location = '{{URL('/')}}'"><i class="material-icons align-bottom">dashboard</i> Dashboard</li>
        <li class="border-top p-2 sidebar-link"  onclick="window.location = '{{URL('/users')}}'"><i class="material-icons align-bottom">contacts</i> Users</li>
        <li class="border-top p-2 sidebar-link " onclick="window.location = '{{URL('/rfqs')}}'"><i class="material-icons align-bottom">assignment</i> RFQ</li>
        <li class="border-top p-2 sidebar-link " onclick="window.location = '{{URL('/projects')}}'"> <i class="material-icons align-bottom">work</i> Project</li>
        <li class="border-top p-2 sidebar-link " onclick="window.location = '{{URL('/clients')}}'"> <i class="material-icons align-bottom">group</i> Client</li>
        <li class="border-top p-2 sidebar-link " onclick="window.location = '{{URL('/systems')}}'"> <i class="material-icons align-bottom">computer</i> System</li>
        <li class="border-top p-2 sidebar-link " onclick="window.location = '{{URL('/competitors')}}'"> <i class="material-icons align-bottom">perm_contact_calendar</i> Competitor</li>
        <li class="border-top p-2 sidebar-link border-bottom" onclick="window.location = '{{URL('/divisions')}}'"> <i class="material-icons align-bottom">category</i> Division</li>
    </ul>
</aside>
