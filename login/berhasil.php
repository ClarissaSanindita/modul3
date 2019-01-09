<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
    *{
      margin: 0;
      padding: 0;
    }

    @font-face {
      src: url(uol.otf);
      font-family: uol;
    }

    @font-face {
      src: url(tcm.ttf);
      font-family: tcm;
    }

    @font-face {
      src: url(med.ttf);
      font-family: med;
    }

    body{
      background-image:url(1123.jpg);
      background-position: left;
    }

    .kotak{
      width: 600px;
      height: 300px;
      text-align: center;
      margin-top: 200px;
      margin-left: 400px;
      background-color: rgba(59, 145, 158, 55%);
    }

    h1{
      padding-top: 110px;
      margin-bottom: 40px;
      color: white;
      font-size: 50px;

    }

    .inputan{
      width: 200px;
      height: 40px;
      border: none;
      padding-left: 7px;
      font-size: 18px;
      font-family: med;
    }

    .login{
      width: 100px;
      height: 40px;
      border: none;
      font-size: 20px;
      background-color: rgb(52, 92, 98, 80%);
      color: white;
      font-family: med;

    }

    .login:hover{
      background-color: white;
      color: rgb(52, 92, 98, 80%);
      transition: 0.3s;
    }

    .gambar img{
      width: 120px;
      height: 120px;
      position: absolute;
      top: 20%;
      left: 45%;
    }

    a{
      text-decoration: none;
      color: rgb(52, 92, 98);
      transition: 0.3s;
      font-family: med;
    }
    a:hover{
      color: white;
    }

    </style>
  </head>
  <body>
    <div class="kotak">
      <?php

      $username = $_POST['username'];
      $password = $_POST['password'];

      if ($username == "Clarissa" && $password == "123")
      {
        echo "<h1> YEY BERHASIL ^^ </h1>";
      }
      else
      {
        echo"<h1> DATA TIDAK SESUAI :( </h1>";
      }

       ?>
</div>

  </body>
</html>
