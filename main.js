// let mode = document.getElementById("mode");
// let body= document.body;
// mode.onclick = function(){
//    body.style.backgroundColor='#a0a0a8'
   
// }
//  var recherche= document.getElementById("recherche");
//  recherche.onclick = function(){
     
//     recherche.classList.toggle("recherche")
//  }

// let txt = document.getElementsByClassName('txt')[0];

// window.onload = function(){
//    txt.focus()
// }
// window.onload = function(){
//    alert('HELLO')
// }
 let MyBtn = document.getElementsByClassName("MyBtn");

 MyBtn.onclick = function(){
      alert('vous voter ?')
      
    }
    let btnRetour = document.getElementById('btnRetour');
   window.onscroll = function(){
      if (scrollY >= 400) {
         btnRetour.style.display='block'
      }else{
         btnRetour.style.display='none'
      }
   }
   btnRetour.onclick = function(){
       scroll({
         left:0,
         top:0,
         behavior:'smooth'
      })
   }
   const dark = document.getElementById('dark');
   const body = document.body;

   dark.addEventListener('click',function(){
       this.classList.toggle("bi-moon");
      if(this.classList.toggle("bi-brightness-high-fill")){
         body.style.backgroundColor='white'
      }else{
         body.style.backgroundColor='black'

      }
      
   })

// form

