<?php
require_once("loginconfig.php");

if(isset($_POST['register'])){

    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);

    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);


    $sql = "INSERT INTO users (name, username, email, password)
            VALUES (:name, :username, :email, :password)";
    $stmt = $db->prepare($sql);

    $params = array(
        ":name" => $name,
        ":username" => $username,
        ":password" => $password,
        ":email" => $email
    );

    $saved = $stmt->execute($params);

    if($saved) header("Location: login.php");
}

?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="form-tambah.css">
  <title>Database Mahasiswa STT Pati</title>
</head>

<body>
    <div class="kepala">
        <h2>Registrasikan Diri Anda</h2>
    </div>

    <div class="form">
    <form action="" method="POST">
      <table>
        <tr>
          <td>
              <label for="name">Nama </label>
          </td>
          <td>
              <input type="text" name="name" placeholder="masukan nama asli anda"/>
          </td>
        </tr>

        <tr>
          <td>
              <label for="username">Username </label>
          </td>
          <td>
              <input type="text" name="username" placeholder="username"/>
          </td>
        </tr>

        <tr>
          <td>
              <label for="email">Email </label>
          </td>
          <td>
              <input type"email" name="email" placeholder="alamat email"/>
          </td>
        </tr>

        <tr>
          <td>
              <label for="password">Password </label>
          </td>
          <td>
              <input type="password" name="password" placeholder="buatlah password yang sulit"/>
          </td>
        </tr>
      </table>
      <input class="D" type="submit" value="Daftar" name="register"/>
      <a href="index.php"><button type="button">Kembali</button></a>
    </form>
    </div>
    <div class="footer">
      @Zulham Ari Nur Ridhwan
    </div>
</body>
</html>
