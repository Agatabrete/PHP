<!-- 
Ülesanne 7
Tervitus
koosta funktsioon, mis tervitab. Näiteks: “Tere päiksekesekene!”
Liitu uudiskirjaga
koosta funktsioon, mis genereerib Bootstrapi uudiskirjaga liitumise vormi (vorm ja nupp)
Kasutajanimi ja email
loo funktsioon, mis muudab kasutajanime väikesteks tähtedeks
täienda funktsiooni, et kasutajanimele luuakse “@hkhk.edu.ee” lõpuga email
täienda funktsiooni nii, et kasutajale luuakse 7-kohaline kood
täienda koodi nii, et luuakse tähed ja numbrid läbisegamini
Arvud
koosta funktsioon, mis lubab kasutajal valida arvude vahemikku. Näiteks 2 ja 8, tekitavad 2, 3, 4, 5, 6, 7, 8
täienda funktsiooni nii, et saab muuta genereeritud arvude sammupikkuse. Näiteks 2 kuni 8 ja samm 3, tekitavad 2, 5, 8
Ristküliku pindala
koosta funktsioon, mis leiab kasutaja antud arvudega ristkülikupindala
Isikukood
koosta funktsioon, mis leiab, kas sisestatud isikukood on õige pikkusega
täienda funktsiooni, et kui isikukood on kirjas leitakse sugu ja sünniaeg
Head mõtted
koosta funktsioon, mis hoiab endas kolme ühepikkust massiivi: alus, öeldis ja sihitis
koosta kood, mis lehele laadimisel valib suvaliselt igast massiivist elemendi ja koostab lause -->


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
        <h1>Ülesanne 7</h1>
        <?php
        echo "<h2>Tervitus</h2>";

        function tervita(){
            return "Tere päiksekesenene";	
        }

        echo tervita();

        echo "<h2>Liitu uudiskirjaga</h2>";
        






        ?>




    </div>
    





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>