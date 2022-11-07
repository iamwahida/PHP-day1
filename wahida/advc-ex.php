<?php
        $characters = array (
            "micky" => array (
                "pic1" => "https://149363556.v2.pressablecdn.com/wp-content/uploads/2018/05/Disney_Channel_Deuts_36921393.jpg",
                "name1" => "Micky Mouse"
            ),

            "goofy" => array (
                "pic2" => "https://dibujos-online.com/images/imgcolor/Goofy-Divertido-1-para-colorear.jpg",
                "name2" => "Goofy"
            ),
            "donald" => array (
                "pic3" => "https://s.yimg.com/ny/api/res/1.2/fS2edcjyEkiRTZvvqw73VQ--/YXBwaWQ9aGlnaGxhbmRlcjt3PTk2MDtoPTE0ODg-/https://img.huffingtonpost.com/asset/5cf8ec062100003711e6b93b.jpeg",
                "name3" => "Donald Duck",
            ),
            "minnie" => array (
                "pic4" => "https://www.takko.com/on/demandware.static/-/Sites-TakkoMaster/default/dw2b1f4b28/product-images/products/81879101000302_D_2.jpg",
                "name4" => "Minnie Mouse",
            )
        );

        $logo = array (
            "logo" => "https://www.kibrispdr.org/data/899/walt-disney-logo-png-35.jpg"
        );

        $title = "MICKY MOUSE";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advanced</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href=".\style.css">
    <!-- animation -->
    <link
    rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

</head>
<body>
    <!-- NAVBAR -->
    <nav class="d-flex bg-black">
        <div>
            <img class="nav-pic" src="<?= $logo["logo"]?>" alt="">
        </div>
    </nav>
    <h2 class="animate__animated animate__rotateIn">
        <?= $title ?>
    </h2>


    <div class="container d-flex justify-content-center mt-5 gap-3">
        <!-- Micky Mouse -->
        <div class="card" style="width: 20rem;">
            <img src="<?= $characters['micky']['pic1']?>" class="card-img-top" alt="...">
            <div class="card-body pt-5">
                <p class="card-text text-center"><?= $characters['micky']['name1']?></p>
            </div>
        </div>
        <!-- Goofy -->
        <div class="card" style="width: 20rem;">
            <img src="<?= $characters['goofy']['pic2']?>" class="card-img-top" alt="...">
            <div class="card-body pt-5">
                <p class="card-text text-center"><?= $characters['goofy']['name2']?></p>
            </div>
        </div>
        <!-- Donald Duck -->
        <div class="card" style="width: 20rem;">
            <img src="<?= $characters['donald']['pic3']?>" class="card-img-top" alt="...">
            <div class="card-body pt-5">
                <p class="card-text text-center"><?= $characters['donald']['name3']?></p>
            </div>
        </div>
        <!-- Super Mario -->
        <div class="card" style="width: 20rem;">
            <img src="<?= $characters['minnie']['pic4']?>" class="card-img-top" alt="...">
            <div class="card-body pt-5">
                <p class="card-text text-center"><?= $characters['minnie']['name4']?></p>
            </div>
        </div>
</div>
    

    <marquee behavior="" direction="">
        <h3>I may be small, but I’ve got friends that make me feel ten feet tall</h3>
    </marquee>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>