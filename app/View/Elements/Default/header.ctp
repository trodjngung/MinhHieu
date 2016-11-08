<body>
<HEADER>
    <nav class="navbar navbar-inverse navbar-fixed-top" >
    <div class="container-fluid" >
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" >
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      <span><a  class="navbar-brand" href="#" id="xz" >XZOUSERR</a></span>
    </div>
          <ul id="navxz" >
  <li><a href="http://192.168.33.33/posts">Home</a></li>
  <li><a href="http://facebook.com/xzouserr"  target="_blank">Facebook</a></li>
          <li class="dropdown">
    <a href="#" class="dropbtn">Admin</a>
    <div class="dropdown-content">
      <a href="http://192.168.33.33/admin">Admin</a>
      <a href="http://192.168.33.33/users">Users</a>
    </div>
  </li>       
        <<ul class="nav navbar-nav navbar-right">
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
  </nav>
</HEADER>
</body>
<body>


<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/58141e3cc7829d0cd36d1f6e/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</body>


<style type="text/css">
  /*HEADER DEFAULT*/

#navxz {
text-align:center;
height: 40px;

}
#navxz li {
display:inline-table;

}
ul#navxz{
  text-align: center;
  height: 20px;

}
li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color:white;
    min-width: 160px;
    box-shadow: 0px 4px 16px 4px red;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {    
    color: white;
    background-color: black;
    height: 43px;
    box-shadow: 0px 4px 16px 4px blue;
}

li a:hover, .dropdown:hover .dropbtn {
    color: black;
  text-decoration:none;
    background-color: white;
    padding-bottom: 20px;
    box-shadow: 0px 4px 16px 4px red;
}

.dropdown:hover .dropdown-content {
    display: block;
    box-shadow: 0px 4px 16px 4px red}




div#googlexz{
  margin-top: 5px;
  height: 33px;

  padding:4px;
  width:15em;
}

ul#navrightxz{
  text-align:center;
}

input#inputgooglexz{
  alignment-baseline: middle;
}

/*/HEADER DEFAULT*/

</style>