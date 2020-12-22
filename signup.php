<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>sign up</title>
  </head>
  <body>
  <div class="signup">
    <form action="signup.php" method="get">
      username<br>
      <input type="text" name="username"><br>
      password<br>
      <input type="text" name="password"><br>
      gender<br>
      <input type="radio" name="gender" value="woman"> woman<br>
      <input type="radio" name="gender" value="man"> man<br>
      <input type="radio" name="gender" value="other"> other<br>
      暑がり寒がり<br>
      <input type="radio" name="feel" value="atsugari"> 暑がり<br>
      <input type="radio" name="feel" value="hutu"> 普通<br>
      <input type="radio" name="feel" value="samugari"> 寒がり<br>

      <input type="checkbox" name="agree"> I agree to the Privacy Policy<br>
      <input type="submit" value="Send">
    </form>
  
  </body>
</html>
