<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">


    <!-- Le styles -->
    <link href="/css/login/bootstrap.min.css" rel="stylesheet">
    <link href="/css/login/bootstrap-responsive.min.css" rel="stylesheet">

    <link rel="stylesheet" href="/css/xzouserr/signup.css">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->


  </head>

  <body>


        <div class="login-xzouserr">
            <form  action="/users/add" method="post" accept-charset="utf-8"><div style="display:none;"><input type="hidden" name="_method" value="POST"></div>
                <legend>Sign up to <span><a  href="http://facebook.com/xzouserr" id="titlelogin"> XZOUSERR</a></span></legend>

                    <img src="http://i.giphy.com/26uf4963Hv7BHsgdG.gif" alt="Kim So Huyn" class="img-circle" style="width: 70px ;height: 70px"> 
            
                <div class="body">
                <label><b>Name</b></label>
    <input type="text" placeholder="Name" name="data[User][name]" required>
                <label><b>Username</b></label>
    <input type="text" placeholder="Username" name="data[User][username]" required>
                <label><b>Email</b></label>
    <input type="email" placeholder="Email" name="data[User][email]" required>
                <label><b>Password</b></label>
    <input type="password" placeholder="Password" name="data[User][password]" required>
    <button type="submit" id="submitxzouserr" >Sign Up Now</button>
                    </div>
                           <label for="UserRole" class="adrole"><b>Role</b></label>

                    <select style="color:cyan;" name="data[User][role]" required="required">
<option style="color: red" value="admin">Admin</option>
<option style="color: blue" value="author">Author</option>
</select>
                </div>            
            </form>
        </div>

    <footer class="white navbar-fixed-bottom">
<a id="signin" href="login" class="btn btn-xzouserr">Sign In</a>
    </footer>
    </div>

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/js/login/jquery.js"></script>
    <script src="/js/login/bootstrap.js"></script>
    <script src="/js/login/backstretch.min.js"></script>
    <script src="/js/login/login.js"></script>

  </body>
</html>
