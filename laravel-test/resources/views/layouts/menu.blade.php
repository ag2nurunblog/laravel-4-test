<li class="home treeview">
    <a href="{{ url('admin') }}">
        <i class="fa fa-home"></i> <span>Home</span>
    </a>
</li>

<li class="company treeview">
    <a href="#">
        <i class="fa fa-building"></i> <span>Companies</span>
        <i class="fa fa-angle-left pull-right"></i>
    </a>
    <ul class="treeview-menu">
        <li class="new-company"><a href="{{ url('admin/company/new') }}">New Company</a></li>
        <li class="list-companies"><a href="{{ url('admin/companies') }}">All Companies</a></li>
    </ul>
</li>

<li class="group treeview">
    <a href="#">
        <i class="fa fa-users"></i> <span>User Groups</span>
        <i class="fa fa-angle-left pull-right"></i>
    </a>
    <ul class="treeview-menu">
        <li class="new-group"><a href="{{ url('admin/group/new') }}">New Group</a></li>
        <li class="list-groups"><a href="{{ url('admin/groups') }}">All Groups</a></li>
    </ul>
</li>
<li class="users treeview">
    <a href="#">
        <i class="fa fa-user"></i> <span>Users</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
    </a>
    <ul class="treeview-menu">
        <li class="new-user"><a href="{{ url('admin/user/new') }}">New User</a></li>
        <li class="list-users"><a href="{{ url('admin/users') }}">All Users</a></li>
        <li class="perfil"><a href="{{ url('admin/user/perfil/' . Auth::user()->id) }}">Perfil</a></li>
    </ul>
</li>
