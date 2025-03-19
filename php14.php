
<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harjutused</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<?php
chmod ("img", 0644);
$kataloog = 'img';
$pildid = [];
if (is_dir($kataloog)) {
    $asukoht = opendir($kataloog);
    while ($rida = readdir($asukoht)) {
        if ($rida !== '.' && $rida !== '..') {
            $pildid[] = $rida;
        }
    }
    closedir($asukoht);
}
$suvalise_pildi_suurus = 400;
$veergudearv = 16; 
$vaikse_pildi_laius = 120;
$vaikse_pildi_korgus = 90;
function pildisuurus($pildi_aadress, $max_laius, $max_korgus) {
    global $laius, $korgus;
    $pildi_andmed = getimagesize($pildi_aadress);
    $laius = $pildi_andmed[0];
    $korgus = $pildi_andmed[1];
    if ($laius <= $max_laius && $korgus <= $max_korgus) {
        $ratio = 1;
    } elseif ($laius > $korgus) {
        $ratio = $max_laius / $laius;
    } else {
        $ratio = $max_korgus / $korgus;
    }
    $laius = round($laius * $ratio);
    $korgus = round($korgus * $ratio);
}
$suvaline_pilt = $pildid[array_rand($pildid)];
$suvalise_pildi_asukoht = "$kataloog/$suvaline_pilt";
pildisuurus($suvalise_pildi_asukoht, $suvalise_pildi_suurus, $suvalise_pildi_suurus);
?>
    <div class="container text-center mt-4">
        <h1 class="mb-4">Suvaline pilt</h1>
        <img src="<?php echo $suvalise_pildi_asukoht; ?>" alt="Suvaline pilt" class="img-fluid mb-4" width="<?php echo $laius; ?>" height="<?php echo $korgus; ?>">
        <h1>Suvalised pisipildid</h1>
        <div class="row mt-5 mb-5">
            <?php 
            $piltide_arv = 0;
            do {
                $suvaline_vaike_pilt = $pildid[array_rand($pildid)];
                $vaikse_pildi_tee = "$kataloog/$suvaline_vaike_pilt";
                pildisuurus($vaikse_pildi_tee, $vaikse_pildi_laius, $vaikse_pildi_korgus);
            ?>
            <div class="col-md-3 col-sm-4 col-6 mb-3">
                <a href="<?php echo $vaikse_pildi_tee; ?>" target="_blank"><img src="<?php echo $vaikse_pildi_tee; ?>" alt="Pisipilt" class="img-fluid" width="<?php echo $laius; ?>" height="<?php echo $korgus; ?>"></a>
            </div>
            <?php 
                $piltide_arv++;
            } while ($piltide_arv < $veergudearv); 
            ?>
        </div>
        <button onclick="location.reload();" class="btn btn-primary mt-4 mb-5">Uuenda pilte</button>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>