<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iseseisev</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
      .jumbo {
        background-image: url(https://picsum.photos/1600/800);
        background-size: cover;
        background-repeat: no-repeat;
        margin-left: 0px;
        margin-right: 0px;
      }
      .content {
        padding: 20px;
        border-radius: 10px;
        margin-top: 20px;
        max-width: 800px;
        margin-left: auto;
        margin-right: auto;
      }
      .text-block {
        margin-bottom: 20px;
        text-align: center;
      }
      .text-block h1 {
        font-size: 2.5rem;
        font-weight: bold;
        margin-bottom: 20px;
      }
      .text-block p {
        font-size: 1rem;
        line-height: 1.5;
        margin-bottom: 20px;
      }
      .text-block hr {
        margin: 20px auto;
        width: 50%;
        border: 0;
        border-top: 2px solid #ccc;
      }
    </style>
</head>
<body>

<div class="container-fluid jumbo">
    <nav class="navbar navbar-expand-lg bg-transparent">
        <div class="container">
            <a class="navbar-brand text-light" href="#">Agata Brete Jõpiselg</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon text-light"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0 ms-auto">
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
    <div class="p-5 mb-4">
        <div class="container-fluid py-5 text-center text-light">
            <h1 class="display-5 fw-bold text-center">Praktika Maltal</h1>
            <p class="fs-4 text-center display-7">Minu välispraktika HKHKs</p>
        </div>
    </div>
</div>

<div class="container content text-center">
    <?php
    $allikas = 'csv/blogi.csv';

    if (($handle = fopen($allikas, 'r')) !== FALSE) {
        echo '<div class="text-block">';
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            echo '<h1>' . htmlspecialchars($data[0]) . '</h1>';
            if (isset($data[1])) {
                echo '<p>' . htmlspecialchars($data[1]) . '</p>';
            }
            echo '<hr>';
        }

        echo '</div>';
        fclose($handle);
    } else {
        echo '<p>CSV faili ei leitud või seda ei saa avada.</p>';
    }
    ?>
      <div class="container">
        <a class="btn btn-primary btn-float-right" href="#" role="button ">Vanemad postitused -></a>
      </div>
    
    <hr>
    <i class="bi bi-facebook"></i>
    <h6>Agata Brete Jõpiselg</h6>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>