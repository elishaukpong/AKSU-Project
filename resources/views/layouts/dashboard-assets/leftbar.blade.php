<aside class="left-sidebar" data-sidebarbg="skin6">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar" data-sidebarbg="skin6">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="sidebar-item">
                    <a class="sidebar-link sidebar-link" href="{{route('home')}}"
                                             aria-expanded="false">
                        <i data-feather="home" class="feather-icon"></i>
                        <span class="hide-menu">Dashboard</span>
                    </a>
                </li>
                <li class="list-divider"></li>
                <li class="nav-small-cap">
                    <span class="hide-menu">Menu</span>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link" href="javascript:void(0)" aria-expanded="false">
                        <i class="icon-globe"></i>
                        <span class="hide-menu">Apartments</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level base-level-line in">

                        <li class="sidebar-item ">
                            <a class="sidebar-link" href="{{route('apartments.create')}}"
                               aria-expanded="false">

                                <i class="icon-location-pin"></i>
                                <span
                                    class="hide-menu">Add Apartment
                                </span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{route('apartments.index')}}"
                               aria-expanded="false"><i data-feather="tag" class="feather-icon"></i>
                                <span
                                    class="hide-menu">List Apartments
                                </span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{route('apartments.user.index')}}"
                               aria-expanded="false"><i class="icon-magic-wand"></i>
                                <span
                                    class="hide-menu">My Apartments
                                </span>
                            </a>
                        </li>


                    </ul>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link" href="javascript:void(0)" aria-expanded="false">
                        <i class="icon-people"></i>
                        <span class="hide-menu">Room Mates</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level base-level-line in">

                        <li class="sidebar-item">
                            <a class="sidebar-link" href="ticket-list.html"
                               aria-expanded="false"><i class="icon-people"></i>
                                <span
                                    class="hide-menu">Find Room Mate
                                </span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link" href="ticket-list.html"
                               aria-expanded="false">
                                <i class="icon-user-follow"></i>
                                <span
                                    class="hide-menu">Room Mate Request
                                </span>
                            </a>
                        </li>

                    </ul>
                </li>




                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{route('apartment.types.index')}}"
                       aria-expanded="false"><i class="icon-people"></i>
                        <span
                            class="hide-menu">Apartment Types
                                </span>
                    </a>
                </li>

                <li class="sidebar-item ">
                    <a class="sidebar-link " href="{{route('apartment.tags.index')}}"
                       aria-expanded="false"><i class="icon-people"></i>
                        <span
                            class="hide-menu">Apartment Tags
                                </span>
                    </a>
                </li>

                <li class="list-divider"></li>
                <li class="nav-small-cap"><span class="hide-menu">Users</span></li>
                <li class="sidebar-item ">
                    <a class="sidebar-link " href="{{route('roles.index')}}"
                       aria-expanded="false"><i class="icon-key"></i>
                        <span
                            class="hide-menu">Roles
                                </span>
                    </a>
                </li>

                <li class="list-divider"></li>
                <li class="nav-small-cap"><span class="hide-menu">Alumni</span></li>




                <li class="list-divider"></li>
                <li class="nav-small-cap"><span class="hide-menu">Clique</span></li>

                <li class="list-divider"></li>
                <li class="nav-small-cap"><span class="hide-menu">Gossip</span></li>

                <li class="list-divider"></li>
                <li class="nav-small-cap"><span class="hide-menu">Authentication</span></li>
                <li class="list-divider"></li>


                <li class="sidebar-item"> <a class="sidebar-link sidebar-link" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                                             aria-expanded="false"><i data-feather="log-out" class="feather-icon"></i><span
                            class="hide-menu">Logout</span></a></li>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
