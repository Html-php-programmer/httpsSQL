<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Список студентов</title>
  <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
    crossorigin="anonymous"></script>
  <script src="Javas.js"></script>
  <style>
    body {
      background-color: wheat;
    }
    header {
      text-align: center;
    }
    hr {
      color: blue;
      size: 12pt;
      width: 90%;
    }
    .content {
      display: block;
    }
    table {
      border: 2px solid black;
    }
    td:hover {
      background: #E2EEFF;
    }
    table td.active {
      background: #6598C7;
      color: #fff;
      outline: 0;
    }
    tr td {
      border: 1px solid black;
    }
    select {
      width: 80px;
    }
  </style>
</head>

<body>
  <div class="header">
    <header>
      <h3>Список студентов</h3>
    </header>

    <hr>
  </div>
  <div class="content">
    <!-- Создание select -->
    <?php
      require_once('sqlBegin.php');
    ?>
    <table id="operac">
      <tr>
        <td>Добавить</td>
        <td>Изменить</td>
        <td>Удалить</td>
      </tr>
    </table>
  </div>
  </div>
  <script>
    
  </script>
</body>
</html>