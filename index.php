<?php
$btn__cat = ['nature', 'tech', 'edu', 'sports']
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    * {
      font-family: 'Poppins', sans-serif;
    }

    .btn.active {
      background-color: #db2777;
    }
  </style>
  <title>PHP ASYNC FILTER</title>
</head>

<body class="bg-gray-100 min-h-screen py-20">
  <div class="wrapper max-w-3xl w-full mx-auto">
    <div class="btn_wrapper flex justify-center gap-3 items-center mb-6">
      <?php foreach ($btn__cat as $btn): ?>
        <button onclick="filter('<?= $btn ?>', event)"
          class="uppercase btn bg-orange-600 text-white font-semibold px-10 py-2 hover:bg-teal-600 rounded select-none">
          <?= $btn ?>
        </button>
      <?php endforeach ?>
    </div>
    <div class="data_wrapper grid grid-cols-3 gap-3" id="data_wrapper"></div>
  </div>
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.0/gsap.min.js"></script>
  <script src="app.js"></script>
</body>

</html>