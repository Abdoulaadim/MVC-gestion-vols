<script>
    function desactiver() {

        var radio = document.getElementById('inlineRadio2');
        var radio1 = document.getElementById('inlineRadio1');
      if(radio.checked){
        document.getElementById('search3').style.display="none";
       
      
      
      }
    else if (radio1.checked){
       document.getElementById('search3').style.display="block";  
      
     
      }

    }
</script>

<body>
    <header>
        <div class="bg-dark">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light bg-dark">
                    <a class="navbar-brand" href="#"><img src="ass/img/logo21.png" alt="logo"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                        <nav class="nav ">
                            <a class="nav-link active" href="#">
                                <h3>Home</h3>
                            </a>
                            <a class="nav-link" href="<?php echo BASE_URL; ?>index/vols">
                                <h3>Vols</h3>
                            </a>
                            <a class="nav-link" href="<?php echo BASE_URL; ?>client/login">
                                <img src="ass/img/top-icon.png" alt="login">
                            </a>

                        </nav>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <div class="h-25 d-inline-block">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="ass/img/image1.png" alt="First slide">

                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="ass/img/image2.png" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="ass/img/image3.png" alt="Third slide">
                </div>
            </div>
            <div class="carousel-caption justify-content-center bg-dark px-3  ">
                <form method="post" action="index/vols">
                <div>

<div class="form-check form-check-inline"> 
    <input class="form-check-input" type="radio" onclick="desactiver()" name="inlineRadioOptions1" id="inlineRadio1" value="option1">
    <label class="form-check-label" for="inlineRadio1">Aller-retour</Aller-retour></label>
</div>
<div class="form-check form-check-inline">
    <input class="form-check-input" onclick="desactiver()" type="radio" name="inlineRadioOptions2" id="inlineRadio2" value="option2">
    <label class="form-check-label" for="inlineRadio1">Aller-simple</label>
</div>

</div>
                    <div class="row py-2">
                        <div class="col"><input type="text" name="search" class="form-control" placeholder="ville-départ" aria-label="Username" aria-describedby="basic-addon1"></div>
                        <div class="col"><input type="text" name="search1" class="form-control" placeholder="ville-arrivée" aria-label="Username" aria-describedby="basic-addon1"></div>
                        <div class="col"><input type="date" name="search2" class="form-control" placeholder="date-départ" aria-label="Username" aria-describedby="basic-addon1"></div>
                        <div class="col"><input type="date" name="search3" id="search3" class="form-control" placeholder="date-retour" aria-label="Username" aria-describedby="basic-addon1"></div>
                        <div class="col"><button type="submit" name="find" class="btn btn-primary">Rechercher des vols</button></div>
                    </div>



                </form>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <div class="container bg-dark text-light">
        <div class="text-center py-lg-5">
            <h2>Réservez votre billet d'avion pas cher</h2>
        </div>
        <div class="row">
            <div class="col-sm">
                <h6> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2" viewBox="0 0 16 16">
                        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
                    </svg> Plus de combinaisons de vols que n'importe qui</h6>
            </div>
            <div class="col-sm">
                <h6> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2" viewBox="0 0 16 16">
                        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
                    </svg> Changement de date gratuit sur de nombreux vols</h6>
            </div>
            <div class="col-sm">
                <h6> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2" viewBox="0 0 16 16">
                        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
                    </svg> Nous comparons des millions d'hôtels </h6>
            </div>
        </div>
    </div>
    <section class="p-5">
        <div class="container">
            <div class="text-center">
                <h2>
                    Choose Country
                </h2>
                <p>
                    Select country you want to apply visa for
                </p>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <a href="" class="box">
                        <img src="ass/img/c1.jpg" alt="">
                        <div class="text-center">
                            <h3>
                                France
                            </h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="" class="box">
                        <img src="ass/img/c2.jpg" alt="">
                        <div class="text-center">
                            <h3>
                                Canada
                            </h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#" class="box">
                        <img src="ass/img/c3.jpg" alt="">
                        <div class="text-center">
                            <h3>
                                United States
                            </h3>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <a href="#" class="box">
                        <img src="ass/img/c4.jpg" alt="">
                        <div class="text-center">
                            <h3>
                                New Zealand
                            </h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#">
                        <img src="ass/img/c5.jpg" alt="">
                        <div class="text-center">
                            <h3>
                                Australia
                            </h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#">
                        <img src="ass/img/c6.jpg" alt="">
                        <div class="text-center">
                            <h3>
                                Spain
                            </h3>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>