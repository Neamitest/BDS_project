<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discount</title>
    <link rel="stylesheet" href="css project/count.css">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;700&display=swap" rel="stylesheet" />
</head>
<body>
    <!-- Start Discount -->
    <div class="discount" id="discount">
      <div class="image">
        <div class="content">
          <h2>contacter-vous </h2>
          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Excepturi asperiores consectetur, recusandae
            ratione provident necessitatibus, cumque delectus commodi fuga praesentium beatae. Totam vel similique
            laborum dicta aperiam odit doloribus corporis.
          </p>
          <img src="img/1679431464015.jpg" alt="" />
        </div>
      </div>
      <div class="form">
        <div class="content">
          <h2>contacter-vous</h2>
          <form action="">
            <input class="input" type="text" placeholder="Vous Nom" name="name" />
            <P class="error_name"></P>
            <input class="input" type="" placeholder="Vous Email" name="email" />
            <P class="error_email"> </P>
            <input class="input" type="text" placeholder="Vous tephone" name="Telphone" />
            <P class="error_Tel"></P>
            <textarea class="input" placeholder="Vous message" name="message"></textarea>
            <P class="error_msg"></P>
            <input type="submit" value="Envoyer" />
          </form>
        </div>
      </div>
    </div>
    <!-- End Discount -->
    <script>
      let nom = document.querySelector('[name="name"]')
      let mail = document.querySelector('[name="email"]')
      let tel = document.querySelector('[name="Telphone"]')
      let  msg = document.querySelector('[name="message"]')
      let errorNom = document.querySelector('.error_name')
      let errorEmail = document.querySelector('.error_email')
      let errorTel = document.querySelector('.error_Tel')
      let error_msg = document.querySelector('.error_msg')
      let form = document.forms[0]
      
      form.onsubmit=function(){
      // valid name
      let validname=/^[A-z0-9]+$/.test(nom.value)
    if(validname === false ){
      errorNom.innerHTML='Nom Invalide !'
       return false
    }
    else{
      errorNom.innerHTML=''
    }
    // valid email
    let validusername=/^([A-z0-9\.]+@[A-z0-9.-]+\.[a-z]{2,})+$/.test(mail.value)
    if(validusername === false ){
        errorEmail.innerHTML='Mail Invalide !'
       return false
    }
    else{
        errorEmail.innerHTML=''
    }
    // valid telphone
    let validtel=/^([0-9]{10})+$/.test(tel.value)
    if(validtel === false ){
      errorTel.innerHTML='Telphone Invalide !'
       return false
    }
    else{
      errorTel.innerHTML=''
    }
    // valid message
    if( msg.value == ''){
      error_msg.innerHTML='message Invalide !'
       return false
    }
    else{
      error_msg.innerHTML=''
    }
     
    
      }
    </script>
</body>
</html>