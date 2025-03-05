<!-- Kõik ülesanded on varustatud kommentaaridega ja vormindatud Bootstrapiga
Jagamine – sisestatakse 2 täisarvulist muutujat. Jaga üks arv teisega. Väljasta ka hoiatav lause, kui kasutaja üritab jagada nulliga. Lisa kontroll, mis ei käivita koodi tühjade lahtrite puhul (N: if(!empty($_GET[‘name’])){lause}, see käivitab koodi siis, kui lahtrisse on midagi lisatud)
Vanus (if…elseif) – sisestatakse kasutaja vanused. Leia, kumb on vanem või on ühevanused. Kood ei käivtu, kui kumbki lahter on jäänud tühjaks
Ristkülik või ruut – kasutaja sisestab ristküliku külgede väärtused. Sinu kood otsustab, kumb on võimalik: ruut või ristkülik
Ristkülik või ruut II – vastavalt kasutaja sisestatud arvudele kuvatakse vastavalt ruut või ristkülik
Juubel – kasutaja lisab sünniaasta ning kood väljastab, kas tegemist on juubeliaastaga. Lisa kontroll, mis ei käivita koodi tühjade lahtrite puhul.
Hinne (switch) – kasutaja sisestab oma KT punktide arvu. kui
ta sai rohkem kui 10p, tuleb kiri SUPER!
5-9p TEHTUD!
alla 5p KASIN!
kui pole punkte lisanud või lisas kogemata teksti tuleb kiri SISESTA OMA PUNKTID! -->
<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harjutused</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <div class="container">
        <h1>Harjutus 4</h1>
        <div class="row">
            <div class="col-md-6">
                <form>
                    <div class="mb-3">
                        <label for="arv1" class="form-label">Arv1</label>
                        <input type="number" class="form-control" name="arv1">
                    </div>
                    <div class="mb-3">
                        <label for="arv2" class="form-label">Arv2</label>
                        <input type="number" class="form-control" name="arv2">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                <?php
                if(isset($_GET["arv1"])&&isset($_GET["arv2"])){
                    $arv1 = $_GET["arv1"];
                    $arv2 = $_GET["arv2"];
                    if($arv2==0){
                        echo '<div class="alert alert-danger" role="alert">
                        Nulliga ei saa jagada!
                      </div>';
                    }else{
                    $jaga = $arv1 / $arv2;
                    printf('<div class="alert alert-success" role="alert">
                        Tubli!
                      </div>%d / %d = %0.2f', $arv1, $arv2, $jaga);
                }
                if($arv1==$arv2){
                    echo '<div class="alert alert-primary" role="alert">
                        Arvud on võrdsed on võimalik joonistada ruut!
                        <img width="50" src="https://e7.pngegg.com/pngimages/440/346/png-clipart-square-frame-miscellaneous-angle-thumbnail.png" alt="pilt">
                      </div>';
                }else if($arv1>$arv2){
                    echo '<div class="alert alert-primary" role="alert">
                        Arv1 on suurem on võimalik joonistada ristkülik!
                        <img width="50" src="https://www.real.edu.ee/matemaatika/sisu/0148/joonis1.gif" alt="pilt">
                      </div>';
                }else if($arv1<$arv2){
                    echo '<div class="alert alert-primary" role="alert">
                        Arv2 on suurem on võimalik joonistada ristkülik!
                        <img width="50" src="https://www.real.edu.ee/matemaatika/sisu/0148/joonis1.gif" alt="pilt">
                      </div>';
                }else{
                    echo '<div class="alert alert-danger" role="alert">
                    Arvud ei ole võrdsed!
                  </div>';
                }
                if($arv1%5==0){
                    echo '<div class="alert alert-primary" role="alert">
                    JUUBEL!
                 </div>';
                }else{
                    echo '<div class="alert alert-primary" role="alert">
                     ei ole JUUBEL!
                  </div>';
                }
                switch($arv1){ 
                case ($arv1 >= 10): echo 'SUPER'; 
                break; 
                case ($arv1 >= 5 and $arv1<10): echo 'TEHTUD KT'; 
                break; 
                case ($arv1 < 5): echo 'KASIN'; 
                break;
                default: echo 'Sisetsa punktid!'; 
                } 
                }
                ?>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
</body>
</html>