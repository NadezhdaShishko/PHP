<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
          crossorigin="anonymous">
    <title>Gallery of photos</title>
</head>
<body>
    <div class="container">
        <div class="gallery">

            <?php
                $sqlTable = 'images';
                include 'views.php';
            ?>

        </div>
    </div>

    <div class="overlay" id="overlay"></div>
    <div class="modalForm" id="modalForm">
      <span class="modalClose" id="modalClose"><i class="fas fa-times-circle"></i></span>
      <img id="modalImage" src="" />
    </div>
    <!-- <script src="script.js"></script> -->
</body>
</html>
