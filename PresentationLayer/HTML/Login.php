<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="../CSS/style.css">
  </head>

  <body style="background: #081621;">
    
    <?php
    error_reporting (E_ALL ^ E_WARNING);
    $username = $password = "";

    if(!empty($_POST["remember"]))
    {
        setcookie("username", $_POST["username"],time()+(86400*7));
        setcookie("password", $_POST["password"],time()+(86400*7));
        //echo $_COOKIE['username'];
    }
    else{
        setcookie("username", "");
        setcookie("password", "");
    }


    ?>

<div class="login">
  <div class="size" >
    <form action="../../BusinessLayer/validation.php" method="post" enctype="multipart/form-data">
        <div>
          <h1>Login</h1>
          <div class="textbox">
            <i class="fas fa-user"></i>
            <input type="text" name="username" placeholder="Email" value="<?php if(isset($_COOKIE["username"])) { echo $_COOKIE["username"]; } ?>">
          </div>
  
          <div class="textbox">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" placeholder="Password" value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>">
          </div>
  
          <div class = "checkbox">
            <input type="checkbox" name="remember">Remember Me<br><br>
          </div>
  
        
        <button type="submit" class="btn" >Login</button>

        <p style="text-align: center;">Don't Have an Account? <a style="text-decoration: none;" href="Registrationv2.php">Sign Up</a></p>
        
  
        </div>
  
      </form>
  </div>
  <div class="right">
          <div class="right-text">
            <h2>TROJAN HORSE</h2>
            <h5>TECH & Engineering Ltd</h5>
          </div>
          <div class="right-inductor"></div>
  </div>
</div>
  <!--<?php include 'Footer.php'; //Attaching Footer to this page ?>-->

  <!-- Code injected by live-server -->
<!-- <script type="text/javascript">
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script> -->
</body>

</html>