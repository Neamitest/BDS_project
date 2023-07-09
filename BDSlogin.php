<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap-4.0.0-dist/css/bootstrap.css">
    <link rel="stylesheet" href="css1/all.min.css">

    <link rel="stylesheet" href="css project/BDSlogin.css">

    <title>login</title>
</head>
<body>
    <div class="globel-container">
        <div class="image-login">
            <img src="img/loginn.jpg" alt="" >
        </div>
        <div class="card login-form">
            <img src="./img/logo-2-removebg-preview.png" alt="" class="logo">
            <div class="card-body">
                <p class="title-form">Bienvenue sur bureau des stagiaires !</p>

                <div class="card-text">
                    <form action="#">
                        <div class="form-group">
                            <label for="email1">login</label>
                            <input type="text"
                            class="form-control mail"
                            id="email1" placeholder="Login" name="mail" >
                            <p class="error-email"></p>
                        </div>
                        <div class="form-group">
                            <label for="password1">Mod de passe</label>
                            <input type="password"class="form-control password"  
                            id="password1" placeholder="Mot de passe" name="password">
                            <p class="error-pwd"> </p>
                        </div>
                        
                        <div class="lien-oubliè">
                            <a href="#">Mot de passe oubliè ?</a>
                        </div>
                        <a href="acueill.html"><i title="Retour" class="fa-solid fa-arrow-left"></i></a>
                        <button class="bttn" type="submit">Se connecter</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        
 
 let mail = document.querySelector('[name="mail"]')
 let password = document.querySelector('[name="password"]')
 let errorEmail = document.querySelector('.error-email')
 let errorPwd = document.querySelector('.error-pwd')
 let form = document.forms[0]
  
 form.onsubmit=function(){
    let validusername=/^([a-zA-Z0-9._%-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,})*$/.test(mail.value)
    
    console.log(validusername);
    if(validusername === false || mail.value.length=='' ){

        errorEmail.innerHTML='mail invalide !'
       return false
    }
    else{
        errorEmail.innerHTML=''
    }
    if( password.value.length<8){
        
        errorPwd.innerHTML='mod de passe invalide !'
        return false
    }
    else{
        errorPwd.innerHTML=''
    }
    return true
}
    </script>
    
</body>
</html>