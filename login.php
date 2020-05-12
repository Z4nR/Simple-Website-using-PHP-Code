<?php

require_once("loginconfig.php");

if(isset($_POST['login'])){

    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

    $sql = "SELECT * FROM users WHERE username=:username OR email=:email";
    $stmt = $db->prepare($sql);

    // bind parameter ke query
    $params = array(
        ":username" => $username,
        ":email" => $username
    );

    $stmt->execute($params);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // jika user terdaftar
    if($user){
        // verifikasi password
        if(password_verify($password, $user["password"])){
            // buat Session
            session_start();
            $_SESSION["user"] = $user;
            // login sukses, alihkan ke halaman timeline
            header("Location: innerindex.php");
        }
    }
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
        <h2>Masukkan Data Diri Anda</h2>
    </div>

    <div class="form">
    <form action="" method="POST">
      <table>
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
              <label for="password">Password </label>
          </td>
          <td>
              <input type="password" name="password" placeholder="buatlah password yang sulit"/>
          </td>
        </tr>
      </table>
      <input class="D" type="submit" value="Login" name="login"/>
      <a href="index.php"><button type="button">Kembali</button></a>
    </form>
    </div>
    <div class="footer">
      @Zulham Ari Nur Ridhwan
    </div>
</body>
</html>
