<!-- header -->
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" >
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      <span><a class="navbar-brand" href="#" id="xz" >XZOUSERR</a></span>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">
    <!-- admin name -->
        <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="menu-toggle"><i class="fa fa-user"></i>
              <?php if ($current_user): ?><?php echo $current_user['username']?><?php endif; ?>
                  <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><i class="fa fa-fw fa-user"></i> Profile</a></li>
                        <li><a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a></li>
                        <li><a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a></li>
                        <li class="divider"></li>
                        <li><a href="/users/logout" ><i action="/users/logout" class="fa fa-fw fa-power-off"></i> Log Out</a></li>
    <!-- /admin name -->
  </ul>
  </li>
  </ul>
    </div>
  </div>
  </nav>
  <!-- /header -->