<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Home</title>
</head>
<body>
    <table>
      <form>
  <tr>
    <td>name:</td>
    <td>
        <input type="text">
    </td>
  </tr>
  <tr>
    <td>
      Password:
    </td>
    <td><input type = "password" name = "password" /></td>
  </tr>
  <tr>
    <td>Gender:</td>
    <td>
        <input type="radio" id="html" name="gender" value="male">
        <label for="html">Male</label>
        <input type="radio" id="css" name="gender" value="female">
        <label for="css">Female</label>
    </td>
  </tr>
  <tr>
    <td>Address:</td>
    <td><textarea rows = "5" cols = "50" name = "address">
                  Enter address
         </textarea></td>
  </tr>
  <tr>
    <td>Hobbies:</td>
    <td> <input type = "checkbox" name = "Gaming" value = "on"> Gaming
          <input type = "checkbox" name = "Cooking" value = "on"> cooking
         <input type = "checkbox" name = "Reading" value = "on"> Reading
         <input type = "checkbox" name = "Reading" value = "on"> Writing
        </td>
  </tr>
  <tr>
    <td>country</td>
    <td> <select name = "dropdown">
            <option value = "india" selected>India</option>
            <option value = "usa">USA</option>
            <option value = "uk">Uk</option>
         </select></td>
  </tr>
  <tr>
    <td>
      <input type="submit" value="Submit">
  </td>
  <td><input type="Reset" value="Reset"></td>
  </tr>
</form>
</table>
</body>
</html>