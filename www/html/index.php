<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css?v=2" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>feel good room</title>
</head>
<body class="body">
    <!-- navbar -->
    <div id="header">
     <div class="banner">
     <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
         <a class="navbar-brand" href="#"><img src="./assets/logo/feelgoodroom.001.png" alt=""></a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarNav">
           <ul class="navbar-nav mr-auto">
             <li class="nav-item">
               <a class="nav-link text-dark" href="view/list/PropertyList.php">購入</a>
             </li>
             <li class="nav-item">
               <a class="nav-link text-dark" href="view/list/PropertyList.php">賃貸</a>
             </li>
             <li class="nav-item">
               <a class="nav-link text-dark" href="view/list/PropertyList.php">売る</a>
             </li>
           </ul>
         </div>
         <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
           <ul class="navbar-nav ml-auto">
             <li class="nav-item  mr-3">
               <a class="nav-link text-dark" href="#">Login</a>
             </li>
             <li class="nav-item">
               <a class="nav-link text-dark" href="view/account/select_register.php">Sign Up</a>
             </li>
             <li class="nav-item">
               <a class="nav-link pl-15 text-dark" href="#">Help</a>
             </li>
           </ul>
         </div>
       </nav>
     </div>
    </div>
    <!-- navbar -->
    <div id="container">
      <nav class="nav-l">left</nav>
      <main class="main">main</main>
      <aside class="nav-r">right</aside>
    </div>
    <footer id="footer">footer</footer>
</html>