<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">



    <link href="/css/login/bootstrap-responsive.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/xzouserr/login.css">


  </head>
<body id="login">


        <div class="login-xzouserr">
            <form  action="/users/login" method="post" accept-charset="utf-8"><div style="display:none;"><input type="hidden" name="_method" value="POST"></div>
    <legend>Sign in to <span ><a href="http://facebook.com/xzouserr" id="titlelogin">XZOUSERR</a></span></legend>

                    <img src="http://i.giphy.com/26uf4963Hv7BHsgdG.gif" alt="Kim So Huyn" class="img-circle" style="width: 100px ;height: 100px">
            
                <div class="body">
                    <label><b>Username</b></label>
    <input type="text" placeholder="Username" name="data[User][username]" required>
                    
    <label><b>Password</b></label>
    <input type="password" placeholder="Password" name="data[User][password]" required>
            
                    <label class="checkbox inline" name="data[User][password]">
                        <input type="checkbox" id="inlineCheckbox1" value="option1"> Remember me
                    </label>
                                
                    <button type="submit" id="submitxzouserr">Sign In</button>
                            </div>

            </form>
        </div>


    <footer class="white navbar-fixed-bottom">
<a id="signup" href="add" class="btn btn-xzouserr">Sign Up</a>
    </footer>


    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/js/login/jquery.js"></script>
    <script src="/js/login/bootstrap.js"></script>
    <script src="/js/login/backstretch.min.js"></script>
    <script src="/js/login/login.js"></script>














<head>
<title>Facebook Login JavaScript Example</title>
<meta charset="UTF-8">
</head>
<body>
<script>
  // This is called with the results from from FB.getLoginStatus().
  function statusChangeCallback(response) {
    console.log('statusChangeCallback');
    console.log(response);
    // The response object is returned with a status field that lets the
    // app know the current login status of the person.
    // Full docs on the response object can be found in the documentation
    // for FB.getLoginStatus().
    if (response.status === 'connected') {
      // Logged into your app and Facebook.
      testAPI();
    } else if (response.status === 'not_authorized') {
      // The person is logged into Facebook, but not your app.
      document.getElementById('status').innerHTML = 'Please log ' +
        'into this app.';
    } else {
      // The person is not logged into Facebook, so we're not sure if
      // they are logged into this app or not.
      document.getElementById('status').innerHTML = 'Please log ' +
        'into Facebook.';
    }
  }

  // This function is called when someone finishes with the Login
  // Button.  See the onlogin handler attached to it in the sample
  // code below.
  function checkLoginState() {
    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });
  }

  window.fbAsyncInit = function() {
  FB.init({
    appId      : '{your-app-id}',
    cookie     : true,  // enable cookies to allow the server to access 
                        // the session
    xfbml      : true,  // parse social plugins on this page
    version    : 'v2.5' // use graph api version 2.5
  });

  // Now that we've initialized the JavaScript SDK, we call 
  // FB.getLoginStatus().  This function gets the state of the
  // person visiting this page and can return one of three states to
  // the callback you provide.  They can be:
  //
  // 1. Logged into your app ('connected')
  // 2. Logged into Facebook, but not your app ('not_authorized')
  // 3. Not logged into Facebook and can't tell if they are logged into
  //    your app or not.
  //
  // These three cases are handled in the callback function.

  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
  });

  };

  // Load the SDK asynchronously
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));

  // Here we run a very simple test of the Graph API after login is
  // successful.  See statusChangeCallback() for when this call is made.
  function testAPI() {
    console.log('Welcome!  Fetching your information.... ');
    FB.api('/me', function(response) {
      console.log('Successful login for: ' + response.name);
      document.getElementById('status').innerHTML =
        'Thanks for logging in, ' + response.name + '!';
    });
  }
</script>

<!--
  Below we include the Login Button social plugin. This button uses
  the JavaScript SDK to present a graphical Login button that triggers
  the FB.login() function when clicked.
-->

<fb:login-button scope="public_profile,email" onlogin="checkLoginState();">
</fb:login-button>

<div id="status">
</div>


  </body>




</html>
