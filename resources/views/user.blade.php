<html>
<head>
    <title>user view </title>
</head>
  <form action="userController" method="post">
      @csrf
      <input type="text" name="name">
      <br><br>
      <input type="text" name="email">
      <br><br>
      <input type="submit" name="submit" value="Submit">
  </form>
</html>
