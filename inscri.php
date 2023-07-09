<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inscription | BDS</title>
    <link rel="stylesheet" href="./bootstrap-4.0.0-dist/css/bootstrap.css">  
    <link rel="stylesheet" href="css project/inscri.css">
</head>
<body>
            <div class="card-body">
                <h1 class="card-title text-center">Formulaire d'inscription</h1>
                <p class="text-center p-title">Vous avez déjà un compte ? <a href="">Connexion</a></p>
                <div class="card-text">
                    <form action="#">
                        <div class="container">
                            <div class="content-1">
                                <div class="form-group">
                                    <label for=" nom1">Nom</label>
                                    <input type="text"class="form-control"
                                    id="nom"   >
                                    <p class="error-nom p-form"></p>
                                </div>
                                <div class="form-group">
                                    <label for="prenom1">Prenom</label>
                                    <input type="text"class="form-control  " 
                                    id="prenom" >
                                    <p class="error-prenom p-form"></p>
                                </div>
                                <div class="form-group">
                                    <label for="tel">telephone</label>
                                    <input type="tel"class="form-control" 
                                    id="tel">
                                    <p class="error-tel p-form"></p>
                                </div>
                                <div class="form-group">
                                    <label for="CEF">CEF </label>
                                    <input type="text"class="form-control" 
                                    id="CEF" >
                                    <p class="error-CEF p-form"></p>
                                </div>
                                <div class="form-group">
                                    <label for="email-scol">Email scolaire ou proffessionnelle </label>
                                    <input type="email"class="form-control form-control-sm txt" 
                                    id="email-scol">
                                    <p class="error-email-scol p-form"></p>
                                </div>
                            </div>
                            <div class="content-2">
                                <div class="form-group">
                                    <label for="Filiere">Filiere</label>
                                    <input list="Filiere" id="email-Filiere" class="form-control" >
                                    <datalist id="Filiere">
                                        <option value="Developpment Digital">
                                        <option value="Firefox">
                                        <option value="Chrome">
                                        </datalist>
                                    <p class="error-Fil p-form"></p>
                                </div>
                                <div class="form-group">
                                    <label for="">Groupe </label>
                                    <input type="text"class="form-control" 
                                    id="Groupe">
                                    <p class="error-Groupe p-form"></p>
                                </div>
                                <div class="form-group">
                                    <label for="Specialite">Specialite <span>(pour les fourmateurs)</span></label>
                                    <input type="text"class="form-control" 
                                    id="Specialite">
                                    <p class="error-Spec p-form"></p>
                                </div>
                                <div class="form-group">
                                    <label for="Username">Username</label>
                                    <input type="text"class="form-control form-control-sm" 
                                    id="Username">
                                    <p class="error-User p-form"></p>
                                </div>
                                <div class="form-group">
                                    <label  for="password">Mod de passe <span>(8 car. minimum)</span>  </label>
                                    <input type="password"class="form-control form-control-sm" 
                                    id="password"  >
                                    <p class="error-Pass p-form"></p>
                                </div>
                            </div>
                        </div>
                        <div class="form-group btns">
                            <button type="submit" id="btnSub" class="btn btn-1 ">suivant</button>
                            <button type="reset" class="btn btn-2 ">Supprimer</button>
                        </div>
                    </form>
                </div>
     

    <script>
        // les input
    let nom =document.getElementById("nom");
    let prenom =document.getElementById("prenom");
    let tel =document.getElementById("tel");
    let CEF =document.getElementById("CEF");
    let emailScol =document.getElementById("email-scol");
    let emaiFiliere =document.getElementById("email-Filiere");
    let Groupe=document.getElementById("Groupe");
    let Specialite=document.getElementById("Specialite");
    let Username=document.getElementById("Username");
    let password=document.getElementById("password");
    let btnSub =document.getElementById("btnSub");
    // let text de error
    let errorNom=document.querySelector(".error-nom")
    let errorPreom=document.querySelector(".error-prenom")
    let errorTel =document.querySelector(".error-tel")
    let errorCEF=document.querySelector(".error-CEF")
    // email scolaire
    let errorscol=document.querySelector(".error-email-scol")
    let errorFil=document.querySelector(".error-Fil")
    let errorGroupe=document.querySelector(".error-Groupe")
    // Specialite
    let errorSpec=document.querySelector(".error-Spec")
    // username
    let errorUser=document.querySelector(".error-User")
    let errorPass=document.querySelector(".error-Pass")
    console.log();

        let form = document.forms[0]
 form.onsubmit=function(){
     
    let validNom =/(^[A-z0-9]{3,})+$/ig.test(nom.value);
    let validPrenom=/\b[a-z]{3,}/ig.test(prenom.value);
    let validtel=/^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im.test(tel.value);
    let validCEF=/(^[0-9]{4,})+$/.test(CEF.value);
    let valGFroupe=/(^[0-9]{3})+$/.test(Groupe.value);
    let validusername=/^([a-zA-Z0-9\.]+@[a-zA-Z]+\.[a-zA-Z]{2,})+$/.test(Username.value);
    let validEmailScol=/^([a-zA-Z0-9\.]+@[a-zA-Z]+\.[a-zA-Z]{2,})+$/.test(emailScol.value);
    //  nom
   if(validNom === false){
    errorNom.innerText='nom invalid !'
     return false
   }
   else{
    errorNom.innerText=''
   }
// prenom
   if(validPrenom === false ){
    errorPreom.innerText='prenom invalid !'
     return false
   }
   else{
    errorPreom.innerText=''
   }
// telephone
   if(validtel === false){
    errorTel.innerText='tel invalid !'
     return false
   }
   else{
    errorTel.innerText=''
    }
// CEF
   if(validCEF == false){
    errorCEF.innerText='CEF invalid !'
     return false
   }
   else{errorCEF.innerText=''}
//  EmailScol
   if(validEmailScol === false){
     errorscol.innerText='Email scolaire invalid !'
     return false
   }
   else{errorscol.innerText=''}
//    Filiere
   if(emaiFiliere.value==''){
    errorFil.innerText='Filere invalid !'
     return false
   }
   else{errorFil.innerText=''}
// Groupe
   if(valGFroupe==false){
    errorGroupe.innerText='Groupe invalid !'
     return false
   }
   else{errorGroupe.innerText=''}
// Specialite
   if(Specialite.value==''){
    errorSpec.innerText='Specialite invalid !'
     return false
   }
   else{errorSpec.innerText=''}

   
   
//    if(emaiFiliere.value==''){
//     errorSpec.innerText='Filiere invalid !'
//      return false
//    }
   
   if(validusername === false ){
    errorUser.innerText='username invalid !'
     return false
   }
   else{
    errorUser.innerText=''
   }
   if(password.value.length < 8){
    errorPass.innerText='mod de passe invalid !'
     return false
   }
   else{
    errorPass.innerText=''
   }
   
//    if(CEF.value==''){
//     errorCEF.innerText='CEF invalid !'
//      return false
//    }

    
}
    </script>
    <script src="./bootstrap-4.0.0-dist/js/popper.min.js"></script>
  <script src="./bootstrap-4.0.0-dist/js/jquery-3.6.2.min.js"></script>
  <script src="./bootstrap-4.0.0-dist/js/bootstrap.js"></script>
    
</body>
</html>