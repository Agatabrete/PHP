<!-- 10p - 5 (Ćµigeaegselt)
8p - 4
6p - 3

Koosta Bootstrap5 abil samasugune leht 1p
	- kohandub ja valideerub
Koosta menĆ¼Ć¼, millel klikkides sisu muutub dĆ¼naamiliselt 1p
	- teiste lehtede sisse pane lihtsalt pealkiri ja tekst
	- kui lehte ei eksisteeri, siis tuleb vastav teade
Kasuta piltide massiivi, et avalehel bĆ¤nner vahetuks suvaliselt 2p
Postitused tulevad TXT failist (pealkiri, lĆ¼hitekst) 2p
Loo adminni leht, kus admin saab postitusi lisada ja kustutada 4p -->
<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iseseisev</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
      .jumbo{
        background-image: url(https://picsum.photos/1600/800);
        background-size: auto;
        background-repeat: no-repeat;
        margin-left: 0px;
        margin-right: 0px;
      }
    </style>
    <div class="container jumbo">
      <nav class="navbar navbar-expand-lg bg-transparent">
        <div class="container-fluid">
          <a class="navbar-brand text-light" href="#"> Agata Brete Jõpiselg</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon text-light"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0 ms-auto ">
              <li class="nav-item">
                <a class="nav-link active text-light" aria-current="page" href="#">Avaleht</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="#">Minust</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="#">Kontakt</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="#">Admin</a>
              </li>
            </ul>
            
          </div>
        </div> 
    </nav>   
      <div class="p-5 mb-4 ">
      <div class="container-fluid py-5 text-center text-light">
        <h1 class="display-5 fw-bold text-center">Praktika Maltal</h1>
        <p class=" fs-4 text-center display-7">Minu välispraktika HKHKs</p>
      </div>
      
    </div>
    </div>

</head>
<body>


<div class="container">
    <?php



    ?>

</div>
 

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>