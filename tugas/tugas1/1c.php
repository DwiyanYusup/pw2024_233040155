<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    .container {
      display: flex;
      flex-direction: column;
    }

    .baris {
      display: flex;
    }

    .kotak {
      width: 30px;
      height: 30px;
      border: 1px solid #000;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0px;
      background-color: pink;
    }
  </style>
</head>
<body>
  <div class="container">
    <!-- Baris pertama -->
    <div class="baris">
      <div class="kotak">1</div>
    </div>
    <!-- Baris kedua -->
    <div class="baris">
      <div class="kotak">2</div>
      <div class="kotak">2</div>
    </div>
    <!-- Baris ketiga -->
    <div class="baris">
      <div class="kotak">3</div>
      <div class="kotak">3</div>
      <div class="kotak">3</div>
    </div>
  </div>

</body>
</html>
