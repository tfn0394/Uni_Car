<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Modal</title>
  <link rel="stylesheet" href="css/styles.css">
  <script defer src="modal.js"></script>
</head>


<body>
  <button data-modal-target="#modal">Open Modal</button>
  <div class="modal" id="modal">
    <div class="modal-header">
      <div class="title">Example Modal</div>
      <button data-close-button class="close-button">&times;</button>
    </div>
    <div class="modal-body">
   aaaaaaaaaa
    </div>
  </div>
  <div id="overlay"></div>
</body>


</html>