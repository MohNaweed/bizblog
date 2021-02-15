<ul class="metismenu" id="menu-bar">
    <li class="menu-title">Navigation</li>

    <li>
        <a href="{{route('dashboard')}}">
            <i data-feather="home"></i>
            <span class="badge badge-success float-right">1</span>
            <span> Dashboard </span>
        </a>
    </li>
    <li class="menu-title">Apps</li>
    <li>
        <a href="{{route('posts.index')}}">
            <i data-feather="calendar"></i>
            <span> Posts </span>
        </a>
    </li>
    <li>
        <a href="javascript: void(0);">
            <i data-feather="inbox"></i>
            <span> Email </span>
            <span class="menu-arrow"></span>
        </a>

        <ul class="nav-second-level" aria-expanded="false">
            <li>
                <a href="/apps/email/inbox">Inbox</a>
            </li>
            <li>
                <a href="/apps/email/read">Read</a>
            </li>
            <li>
                <a href="/apps/email/compose">Compose</a>
            </li>
        </ul>
    </li>
    <li>
        <a href="javascript: void(0);">
            <i data-feather="briefcase"></i>
            <span> Projects </span>
            <span class="menu-arrow"></span>
        </a>

        <ul class="nav-second-level" aria-expanded="false">
            <li>
                <a href="/apps/project/list">List</a>
            </li>
            <li>
                <a href="/apps/project/detail">Detail</a>
            </li>
        </ul>
    </li>
</ul>
