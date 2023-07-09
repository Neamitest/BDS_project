 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>acceill</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="bootstrap-4.0.0-dist/css/bootstrap.css">
    <!-- css -->
    <link rel="stylesheet" href="css project/acueil.css">
    <!-- icon --> 
    <link rel="stylesheet" href="Font _Awesome/all.min.css">
    <!-- jquery -->
    <script src="jquery-3.6.3.min.js"></script>
    <!-- animate -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <!-- swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;700&display=swap" rel="stylesheet" />
 </head>
 <body>
    
    <!-- start header -->
    <header>
        <nav class="navbar">
            <img src="img/logo-2-removebg-preview.png" class="logo" alt="">
            <ul class="nav">
                <li class="aceill" id="home"><a href="#home"  data-scroll="aceill">Acceill</a> </li>  
                <li ><a href="# " data-scroll="mission">Massion et politigue</a></li>  
                <li><a href="#"  data-scroll="Espace vote">Espace vote</a></li>
                <li ><a  href="#" data-scroll="Qui-somme-nous">Qui somme-nous</a></li>  
                <li><a  href="" data-scroll="Bloug">Bloug</a></li>  
            </ul>
        </nav>
        <div class="icon">
            
            <i class="fa-solid fa-moon" onclick="dark()" title="mode sombre"></i>
            <i class="fa-solid fa-earth-americas" title="langue"></i>
            <i class="fa-solid fa-magnifying-glass" id="recherche" title="recherche"></i>
            
        </div>
        <div class="btn-user">
        <a class="x" href="BDSlogin.html" ><i class="fa-solid fa-circle-user"></i></a>
        <span class="title-login">log in</span>
        </div>
        <div class="icon-menu">
            <i class="fa-solid fa-bars " id="open"></i>
        </div>
    </header>
   <div>
     
        <form action="" class="form-search-header ">
            <input type="search" name="" id="" placeholder="search">
            <button type="submit"> <i class=" fa-solid fa-magnifying-glass"></i></button>
            
    </form>
   </div>
<!--  bar responsive / dark mode -->
    <script>
        // nav bar responsive 
    $(document).ready(function(){
        let iconMenu=document.getElementsByClassName("fa-bars")[0]
    iconMenu.onclick=function(){
        iconMenu.classList.toggle("fa-xmark")
        $(".nav").fadeToggle(1000)
    }
    $(".x").hover(function(){
        $(".btn-user .title-login").css("opacity",1)
    })
    $(".x").mouseout(function(){
        $(".btn-user .title-login").css("opacity",0)
    })
    // icon recherche
    let recherche =document.querySelector("#recherche")
    let search =document.querySelector(".form-search-header")
    recherche.onclick=function(){
        search.classList.toggle("toggle")
    }
    // data-scroll
    // $("body").css('paddingTop',$("header").innerHeight())
    $(".navbar li a").click(function(e){
        e.preventDefault()
        let top= $('#'+ $(this).data("scroll")).offset().top
        $("html, body").animate({ scrollTop: top },1000);
        // console.log( $('#'+ $(this).data("scroll")).offset().top);
    })
    
    })
    // dark mode
    function dark(){
    var darkmod = document.body;
    darkmod.classList.toggle('mode-dark');

    var theme;
 
    if (darkmod.classList.contains("mode-dark")){
        console.log("dark mode")
        theme = "DARK";
    }else{
        console.log("light mode");
        theme = "LIGHI";
    }
    localStorage.setItem("pageThme",JSON.stringify(theme));

}
let GetThme = JSON.parse(localStorage.getItem("pageThme"));
console.log(GetThme);
if(GetThme === "DARK"){
    document.body.classList =('mode-dark')
}
    </script>
    <!-- end header -->
    
    <!-- start scroll -->
 <span class="up"><i class="fa-solid fa-arrow-up"></i></span>
 <script>
    let up = document.querySelector(".up")
    window.onscroll =function(){
        if(this.scrollY>=400){
            up.style.opacity='1'
        }
        else{
            up.style.opacity='0'
        }
    }
    up.onclick=function(){
            window.scrollTo({
                top:0,behavior:"smooth"
            })
        }
// scroll home
    let home= document.querySelector("#home")
        home.onclick=function(){
            window.scrollTo({
                top:0,behavior:"smooth"
            })
        }
    
 </script>
 <!-- end scroll -->
 <!-- page acciell  -->
    <section class="page-1" id="icueill">
        <div class="bg">
            <div class="content">
                <div class="title">
                <h2 class="animate__zoomIn">Bureau des Stagaires</h2>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit
                     Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                      </p>
                </div>
                <form action="" class="form-search">
                <input type="search" name="" id="" placeholder="search">
                <button type="submit"> <i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
            </div>
        </div>
    </section>
    

    <!-- start mission -->
    <section  id="mission" class="page-mission ">
        <div>
            <h2 class="title"> Mission <span>Politigue</span></h2>
            <h3> des stagiaires candidats au  
                poste de directeur du BDS. </h3>
        </div>
        <div class="content-mission row-1">
                <div class="card">
                        <img class="card-img " src="./img/card.jpg" alt="">
                    <div class="card-body">
                        <h2 class="card-title ">AHMDE</h2>
                        <p class="card-text">un stagiaire candidats au  
                        poste de directeur du BDS. </p>
                        <!-- <div class="icon-card">
                            <a href=""><i class="fa-brands fa-linkedin"></i></a>
                            <a href=""><i class="fa-brands fa-github"></i></a>
                            <a href=""><i class="fa-brands fa-twitter"></i></a>
                           
                        </div> -->
                        <div class="info">
                            <a href=""> voter  <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                    
                </div>
                <div class="card  ">
                        <img class="card-img " src="./img/belle-jeune-femme-regardant-camera-fille-mode-t-shirt-blanc-ete-decontracte-short-jean-femelle-positive-montre-emotions-faciales-modele-drole-isole-jaune.jpg" alt="">
                    <div class="card-body">
                        <h2 class="card-title">romaysaa</h2>
                        <p class="card-text">un stagiaire candidats au  
                            poste de directeur du BDS. </p>
                            <div class="info">
                                <a href=""> voter  <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                    </div>
                    
                </div>
                <div class="card">
                    <img class="card-img " src="./img/portrait-jeune-homme-souriant-lunettes.jpg" alt="">
                    <div class="card-body">
                        <h2 class="card-title">Abdelkabir</h2>
                        <p class="card-text">un stagiaire candidats au  
                        poste de directeur du BDS. </p>
                        <div class="info">
                            <a href=""> voter   <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                    
                </div> 
                <div class="card">
                    <img class="card-img " src="./img/portrait-homme-affaires-souriant.jpg" alt="">
                    <div class="card-body">
                        <h2 class="card-title">hicham</h2>
                        <p class="card-text">un stagiaire candidats au  
                        poste de directeur du BDS. </p>
                        <div class="info">
                            <a href=""> voter  <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                    
                </div> 
            
        </div>

    <!-- start mission -->
        <div class="page-3">
            <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h3>
           <div class="row-2">
            <div class="card quality">
                <div class="img-holder">
                 <img class="card-img" src="./img/activites-para-pedagogiques.jpg" alt="">
                </div>
                 <div class="card-body">
                     <h2 >Activite</h2>
                     <p >Activite de jeu de biscuts dans la cartouch pour 
                     tous les stagiaire de Mme khawla avec une heare de 9:00 le samedi. </p>
                     <a href="#">More</a>
                 </div>
                 
             </div>
             <div class="card time">
                 <div class="img-holder">
                     <img class="card-img" src="./img/FB_IMG_1672163681345.jpg " alt="">
                 </div>
                 <div class="card-body">
                     <h2 >Motivation</h2>
                     <p >Mme khawla et M Nazha Stadiun feront un cours pour motiver
                     les stagiaires afin de devenir l'un des meilleurs développeues. </p>
                     <a href="#">More</a>
                 </div>
                 
             </div>
             <div class="card passion">
                 <div class="img-holder">
                     <img class="card-img" src="./img/pexels-mizuno-k-12899188.jpg" alt="">
                 </div>
                 <div class="card-body">
                     <h2>Concours</h2>
                     <p> Un concours entre les stagiaires sur le propriétaire
                     du code le plus court et  le propriétaire d'un code ordonné et lié
                     avec une heare de 8:00 le samedi.</p>
                     <a href="#">More</a>
                 </div>
                 
             </div>
           </div>
             
        </div>
    </section>
    <!-- end mission -->
      <!-- end Qui somme nous -->
    <div class="testimonials" id="Qui-somme-nous">
        <h2 >Qui somme nous ?</h2>
        <div class="container">
        <div class="box">
            <img src="imgs/avatar-01.png" alt="" />
            <h3>Mohamed Farag</h3>
            <span class="title-box">Full Stack Developer</span>
            <div class="rate">
                <i class="filled fas fa-star"></i>
                <i class="filled fas fa-star"></i>
                <i class="filled fas fa-star"></i>
                <i class="filled fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores et reiciendis voluptatum, amet est natus
                quaerat ducimus
            </p>
        </div>
        <div class="box">
            <img src="imgs/avatar-02.png" alt="" />
            <h3>Mohamed Ibrahim</h3>
            <span class="title-box">Full Stack Developer</span>
            <div class="rate">
              <i class="filled fas fa-star"></i>
              <i class="filled fas fa-star"></i>
              <i class="filled fas fa-star"></i>
              <i class="filled fas fa-star"></i>
              <i class="far fa-star"></i>
            </div>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores et reiciendis voluptatum, amet est natus
              quaerat ducimus
            </p>
          </div>
          <div class="box">
            <img src="imgs/avatar-03.png" alt="" />
            <h3>Shady Nabil</h3>
            <span class="title-box">Full Stack Developer</span>
            <div class="rate">
              <i class="filled fas fa-star"></i>
              <i class="filled fas fa-star"></i>
              <i class="filled fas fa-star"></i>
              <i class="filled fas fa-star"></i>
              <i class="far fa-star"></i>
            </div>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores et reiciendis voluptatum, amet est natus
              quaerat ducimus
            </p>
          </div>
          <div class="box">
            <img src="imgs/avatar-04.png" alt="" />
            <h3>Amr Hendawy</h3>
            <span class="title-box">Full Stack Developer</span>
            <div class="rate">
              <i class="filled fas fa-star"></i>
              <i class="filled fas fa-star"></i>
              <i class="filled fas fa-star"></i>
              <i class="filled fas fa-star"></i>
              <i class="filled fas fa-star"></i>
            </div>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores et reiciendis voluptatum, amet est natus
              quaerat ducimus
            </p>
          </div>
          <div class="box">
            <img src="imgs/avatar-05.png" alt="" />
            <h3>Sherief Ashraf</h3>
            <span class="title-box">Full Stack Developer</span>
            <div class="rate">
              <i class="filled fas fa-star"></i>
              <i class="filled fas fa-star"></i>
              <i class="filled fas fa-star"></i>
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>
            </div>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores et reiciendis voluptatum, amet est natus
              quaerat ducimus
            </p>
          </div>
          <div class="box">
            <img src="imgs/avatar-06.png" alt="" />
            <h3> Mohamed karim</h3>
            <span class="title-box">Full Stack Developer</span>
            <div class="rate">
              <i class="filled fas fa-star"></i>
              <i class="filled fas fa-star"></i>
              <i class="filled fas fa-star"></i>
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius totam rem reiciendis temporibus rem reiciendis temporibus,  </p>
          </div>
        </div>
        <p class="p-somme">Lorem ipsum, dolor sit amet consectetur adipisicing Lorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe harum sunt perspiciatis doloribus corrupti architecto ipsum distinctio voluptas accusantium eos. elit. Laboriosam iure placeat nostrum adipisci dolorem minima quasi necessitatibus magnam officia perspiciatis. Harum officiis cum facilis velit autem eos delectus nihil veniam.</p>
      </div>

    <!-- end Qui somme nous -->

    <!-- strat footer -->
    <footer>
        <div class="containerr">
            <div>
                <h2>Bureau des <span>Stagiaires</span></h2>
                <div class="link_btn">
                    <a href="count.html">Contact</a> 
                    <a href="oui.html">Aide</a> 
                </div>
            </div>
            <div class="contact">
                <h3>contact info</h3>
                <ul>
                    <li> <i class="fa-solid fa-location-dot"></i> SAFI MAROC</li>
                    <li> <i class="fa-solid fa-phone"></i> +121 641 55 28 95</li>
                    <li> <i class="fa-solid fa-envelope"></i><a href="#">abdlabirneami@gmail.com</a></li>
                   </ul>
            </div>
            <div class="suivez">
                <h3 >Suivez nous</h3>
                <br>
                <a href="#"> <i class="fa-brands fa-facebook"></i></a>
                <a href="#"> <i class="fa-brands fa-linkedin"></i></a>
                <a href="#"> <i class="fa-brands fa-twitter"></i></a>
                <a href="#"> <i class="fa-brands fa-github"></i></a>
            </div>
        </div>
                <hr>
        <div>
            <p class="buttom"> © 2022 -2023 Bureau des <span>Stagiaires</span> .  </p>
        </div>
    </footer>
    <!-- end footer -->
 </body>
 </html>