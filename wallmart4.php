<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="stylem.css" />
  <title>Form</title>
</head>

<body>
  <div class="login-wrap">
    <div class="login-html">
      <form action="process_form.php" method="post">
        <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
        <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
        <div class="login-form">
          <div class="sign-in-htm">
            <div class="group">
              <label for="username" class="label">Username</label>
              <input id="username" type="text" name="username" class="input">
            </div>
            <div class="group">
              <label for="password" class="label">Password</label>
              <input id="password" type="password" name="password" class="input">
            </div>
            <div class="group">
              <input id="check" type="checkbox" class="check" checked>
              <label for="check"><span class="icon"></span> Keep me Signed in</label>
            </div>
            <div class="group">
              <input type="hidden" name="action" value="signin">
              <input type="submit" class="button" value="Sign In">
            </div>
            <div class="hr"></div>
            <div class="foot-lnk">
              <a href="#forgot">Forgot Password?</a>
            </div>
          </div>
          <div class="sign-up-htm">
            <div class="group">
              <label for="username" class="label">Username</label>
              <input id="username" type="text" name="username" class="input">
            </div>
            <div class="group">
              <label for="password" class="label">Password</label>
              <input id="password" type="password" name="password" class="input">
            </div>
            <div class="group">
              <label for="repeat-password" class="label">Repeat Password</label>
              <input id="repeat-password" type="password" name="repeat-password" class="input">
            </div>
            <div class="group">
              <label for="email" class="label">Email Address</label>
              <input id="email" type="text" name="email" class="input">
            </div>
            <div class="group">
              <input type="hidden" name="action" value="signup">
              <input type="submit" class="button" value="Sign Up">
            </div>
            <div class="hr"></div>
            <div class="foot-lnk">
              <label for="tab-1">Already Member?</label>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</body>

</html>
