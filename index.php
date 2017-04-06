<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <link rel="stylesheet" type="text/css" href="css/basic-blue.css">
    <title>Title Goes Here</title>
  </head>

  <body style="margin:0px;min-height:100%;">
    <div id="main_header" style="min-height:72px;padding-top:8px;">
      <div style="float:left;padding-left:20%;">
        <span style="">Site Name</span>
      </div>
      <div style="float:right;padding-right:20%;width:180px;font">
        <form action="dologin.php" method="post">
          <table cellspacing="4">
            <tbody>
              <tr>
                <td><label for="email" class='login_label'>Username or Email</label></td>
                <td style="padding-left:10px;"><label for="password" class='login_label'>Password</label></td>
                <td></td>
              </tr>
              <tr>
                <td><input type="email" id="email" name="email"/></td>
                <td style="padding-left:10px;"><input type="password"/ id="password" name="password"></td>
                <td style="padding-left:10px;"><input type="submit"/></td>
              </tr>
              <tr>
                <td><label class='login_label_small'>Create Account</label></td>
                <td style="padding-left:10px;"><label class='login_label_small'>Forgot Password</label></td>
                <td></td>
              </tr>
            </tbody>
          </table>
        </form>
      </div>
    </div>
    <div id="main_body">

    </div>
    <footer style="position:absolute;right:0;bottom:0;left:0;padding:1rem;">
      <table style="margin-left:auto;margin-right:auto;">
        <tbody>
          <tr>
            <td>Sign up</td>
            <td style="padding-left:14px;">Log In</td>
          </tr>
        </tbody>
      </table>
    </footer>
  </body>
</html>
