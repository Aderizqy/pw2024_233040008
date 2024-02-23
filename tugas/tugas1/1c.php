<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pyramid</title>
  <style>
    .pyramid {
    display: flex;
    flex-direction: column;
    }

    .square {
    width: 50px;
      height: 50px;
      border: 1px solid black;
      text-align: center;
      line-height: 50px;
    }

    .row {
    display: flex;
    }

    .row .square {
    background-color: #0ff;
    }
  </style>
</head>
<body>
  <div class="pyramid">
    <div class="row">
      <div class="square">1</div>
    </div>
    <div class="row">
      <div class="square">2</div>
      <div class="square">2</div>
    </div>
    <div class="row">
      <div class="square">3</div>
      <div class="square">3</div>
      <div class="square">3</div>
    </div>
  </div>
</body>
</html>