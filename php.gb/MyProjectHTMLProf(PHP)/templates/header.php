<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
          crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/css/style.css">

    <title><?= $title ?></title>

</head>

<body>

<header class="header container-fluid">
    <div class="container headerInside">
        <div class="logo">
            BRAN<span>D</span>
        </div>
        <form class="searchWrap">
            <div class="searchBrowse">
                Browse <i class="fas fa-caret-down"></i>
            </div>
            <input type="text" placeholder="Search for Item...">
            <button>
                <i class="fas fa-search"></i>
            </button>
        </form>
        <img src="./images/cart.png" alt="Cart">
        <button class="accountBtn">
            My Account
            <i class="fas fa-caret-down"></i>
        </button>
    </div>
</header>