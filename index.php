<!DOCTYPE html>
<html lang="cs" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>První formulář</title>
  </head>
  <body>
      <form class="" action="submit.php" method="post">
      <label for="">SPZ: </label>
      <input type="SPZ" name="SPZ" value="">

<br />
      <label for="name">Váha vozidla:</label>
      <label for="personal">do 3,5t</label>
      <input type="radio" name="weight" id="personal" value="personal">
      <label for="truck">Nad 3,5t</label>
      <input type="radio" name="weight" id="truck" value="truck"><br>

      <label for="name">Znacka vozidla:</label>
      <select name="brand">
      <option value="volvo">Volvo</option>
      <option value="skoda">Skoda</option>
      <option value="mercedes">Mercedes</option>
      <option value="audi">Audi</option>
      <option value="BMW">BMW</option>
      </select>
<br />
      <label for="name">Barva vozidla:</label>
      <select name="color">
      <option value="Modrá">modrá</option>
      <option value="Červená">červená</option>
      <option value="Bílá">bíla</option>
      <option value="Černá">Černá</option>
      <option value="Žlutá">Žlutá</option>
      </select>

<br />
      <label for="name">Jméno:</label>
      <input type="name" name="name" value="">
<br />
      <input type="submit" name="submit" value="odeslat">
</form>

  </body>
  </html>
