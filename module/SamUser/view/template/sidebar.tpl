<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="index_files/profile_small.jpg">
                             </span>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">Sam Usmael</strong>
                             </span> <span class="text-muted text-xs block">Gospel Passionist <b class="caret"></b></span> </span> </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a href="http://localhost:63342/Dashboard/profile.html">Profile</a></li>
                        <li><a href="http://localhost:63342/Dashboard/contacts.html">Notifications</a></li>
                        <li><a href="http://localhost:63342/Dashboard/mailbox.html">Messages</a></li>
                        <li class="divider"></li>
                        <li><a href="http://localhost:63342/Dashboard/login.html">Logout</a></li>
                    </ul>
                </div>
                <div class="logo-element">
                    IN+
                </div>
            </li>
            <li class="active">
                <a href="http://localhost:63342/Dashboard/index.html"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboards</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse in">
                    <li class="active"><a href="http://localhost:63342/Dashboard/index.html">Dashboard v.1</a></li>
                    <li><a href="http://localhost:63342/Dashboard/dashboard_2.html">Settings</a></li>

                </ul>
            </li>

            <li>
                <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Desciples</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="http://localhost:63342/Dashboard/graph_flot.html">Add</a></li>
                    <li><a href="http://localhost:63342/Dashboard/graph_morris.html">List</a></li>

                </ul>
            </li>

            <li>
                <a href="http://deeplife.cccsea.org/#/layouts%20target="><i class="fa fa-magic"></i> <span class="nav-label">Win </span><span class="label label-info pull-right">62</span></a>
            </li>
            <li>
                <a target="_blank" href="http://deeplife.cccsea.org/#/widgets"><i class="fa fa-magic"></i> <span class="nav-label">Build</span><span class="label label-info pull-right">62</span></a>
            </li>
            <li>
                <a target="_blank" href="http://deeplife.cccsea.org/#/grid_options"><i class="fa fa-magic"></i> <span class="nav-label">Send</span><span class="label label-info pull-right">62</span></a>
            </li>
            <li class="special_link">
                <a href="http://localhost:63342/Dashboard/index.html"><i class="fa fa-database"></i> <span class="nav-label">Tree</span></a>
            </li>
        </ul>

    </div>
</nav>
<div class="right">
    <?php echo $this->childModel; ?>
</div>