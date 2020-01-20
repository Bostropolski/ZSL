<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="dane.php" method="post">
      <select name="miasta">
        <option value="poznan">poznan</option>
        <option value="gdansk">gdansk</option>
        <option value="warszawa">warszawa</option>
      </select>
      <input type="text" name="imie" placeholder="podaj imie:">
      <input type="text" name="nazw" placeholder="podaj nazwisko:">
      <input type="radio" name="color" value="czerwony">czerwony
      <input type="radio" name="color" value="zielony">zielony
      <input type="radio" name="color" value="niebieski">niebieski
      <input type="submit" name="button" value="Wyślij">
    </form>
  </body>
</html>
