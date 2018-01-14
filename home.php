<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<link rel="stylesheet" href="form.css">
<link rel='stylesheet' href='bootstrap.min.css'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="funksione.js"></script>
<link href="https://fonts.googleapis.com/css?family=Barlow" rel="stylesheet">
<style>
    #loginpanel div
    {
        display:inline;
        width:45%;
        float:left;

    }
    body
    {
        background-color:#F1F1F1;
        font-family: 'Barlow', sans-serif;
    }

    #openlogin
    {
        float:right;
    }
    #taskbar
    {
        background-color: #55657f;
    }

    #unname
    {
        color:#55657f;
        cursor:pointer;
        text-transform:uppercase;
        font-size:45px;
        margin-top:46px;
    }
    #lmbtn
    {
        background-color: #55657f;
        color:#fff;
        padding:8px 10px;
        font-weight:200;
        margin-top:3px;
    }
    #lmbtn:hover{

    }
    .item{
        padding:20px;
    }
    .item img{
        height:250px;
    }
    #logo:hover{
        cursor:pointer;
        opacity:0.4;

    }
    #about_us_text{
        line-height:2;
    }

    #subtitle{
        color:#b8c4c2;
        position:absolute;
        left:22px;
        font-size:20px;
        top:85px;
    }
    .news{


    }
    #newsec{
        padding:0px 109px;
    }
    .col-md-2 i{
        font-size:35px;
        text-align:center;
        margin-top:20px;
        padding-left:25%;
    }
    .col-md-2 i:hover{
        cursor:pointer;
        color:#55657f;
    }
    .col-md-2 h4{
        padding-left:17%;
    }
</style>
<body>
<?php
if(isset($_REQUEST['wrong'])){
    echo '<div id="loginpanel"  style="display:block; padding-left: 200px"  >';
}
else{
    echo '<div id="loginpanel"  style="display:none; padding-left: 200px"  >';
}

?>


    <div>
        <form class="form-style-4" action="check_login.php?type=1" method="post">
            <h2 style="text-align:center;">Pedagoget</h2>
            <label for="field2">
                <span>Email Address</span><input type="email" id="email" name="email" required="true" />
            </label>
            <label for="field3">
                <span>Password</span><input type="password" id="password" name="password" required="true" />
            </label>
            <label>
                <span>&nbsp;</span><input type="submit" value="Login" />
            </label>

            <?php
            if(isset($_REQUEST['wrong']) && $_REQUEST['wrong']=='pedagog'){
                echo  '<span id="lbl" style="color:red;font-size:15px;">Wrong password or email</span>';
            }
            ?>

        </form>
    </div>

    <div>

        <form class="form-style-4" action="check_login.php?type=2" method="post">
            <h2 style="text-align:center;">Studentet</h2>
            <label for="field2">
                <span>Email Address</span><input type="email" id="email" name="email" required="true" />
            </label>
            <label for="field3">
                <span>Password</span><input type="password" id="password" name="password" required="true" />
            </label>
            <label>
                <span>&nbsp;</span><input type="submit" value="Login" />
            </label>

            <?php
            if(isset($_REQUEST['wrong']) && $_REQUEST['wrong']=='student'){
                echo  '<span id="lbl" style="color:red;font-size:15px;">Wrong password or email</span>';
            }
            ?>


        </form>

    </div>

</div>

<div class="row" id='taskbar'>
    <button id="openlogin" onclick="openpanel()" style=""><span class="glyphicon glyphicon-user"></span> Log In</button>


</div>

<div class='row'>
    <div class='col-md-4'>
        <img src='logo.png' style="margin-left:50px; margin-top: 50px;" width="70" height="70" alt='Log' id='logo'/>
    </div>
    <div class='col-md-8'>
        <h3 id='unname'> Fakulteti i Shkencave te natyres </h3>
        <h4 id='subtitle'>Fakulteti ma i mir nbot </h4>
    </div>
</div>

<div class='row'>
    <div class='col-md-6'>

        <h2></h2>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">

            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>


            <div class="carousel-inner">
                <div class="item active">
                    <img src="wallpaper1.jpg" alt="W1" style="width:100%;height:250px;">
                </div>

                <div class="item">
                    <img src="wallpaper2.jpg" alt="W2" style="width:100%;height:250px;">
                </div>

                <div class="item">
                    <img src="wallpaper3.jpg" alt="Wallpaper 3" style="width:100%;height:250px;">
                </div>
            </div>

            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>

        </div>

    </div>
    <div class='col-md-6'><h3>Rreth Fakultetit</h3>
        <p id='about_us_text'>
            Fakulteti i Shkencave të Natyrës (FSHN) është qendra
            kryesore në Shqipëri për përgatitjen e specialistëve të lartë në informatikë, matematikë, fizikë, kimi, kimi ndustriale, biologji, bioteknologji. FSHN është gjithashtu institucion i rëndësishëm për përgatitjen e mësuesve për shkollat e mesme në lëndët mësimore të matematikës, fizikës, kimisë, biologjisë dhe informatikës në gjithë sistemin e shkollave të mesme në Shqipëri. FSHN ka një staf akademik të brendshëm prej mbi 181 punonjësish, prej të cilëve mbi rreth 80 profesorë ose profesorë shoqërues. Ai drejtohet nga Dekani, i zgjedhur nga votimi i drejteperdrejte i stafit akademik, jo akademik dhe studentet.

        </p>
    </div>
</div>
<br/><br/>
<div class='row'>
    <div class='col-md-2'>
        <i class="fa fa-graduation-cap" ></i>
        <h4>College</h4>
    </div>
    <div class='col-md-2'>
        <i class="fa fa-building-o" ></i>
        <h4>Departaments</h4>
    </div>

    <div class='col-md-2'>
        <i class="fa fa-book" style=""></i>
        <h4>Graduate</h4>
    </div>

    <div class='col-md-6'  id='newsec' >
        <h4 style='text-align:center;'>Lajmerime</h4>
        <p class='news'><strong>Lajm :</strong> Njoftohen të gjithë studentët që përfundojnë Ciklin e Parë të Studimit, Bachelor, viti III, se në mbledhjen e datës 13.07.2016 Senati Akademik i Universitetit të Tiranës, përcaktoi nivelin B1 të njohjes së një prej pesë gjuhëve të huaja të Bashkimit Europian: anglisht, frëngjisht, gjermanisht, italisht, spanjisht, si kriter pranimi në programet e studimit të ciklit të dytë“Master i shkencave” në Universitetin e Tiranës.
        <p class='news'><strong>Lajm :</strong> Në kuadër të atashimit në sistemin informatik të Univesitetit të Tiranës të gjithë studentët e Fakultetit të Shkencave të Natyrës duhet të aksesojnë profilin e tyre personal në portalin universitar të studentit.
    </div>
</div>
</body>
</html>
