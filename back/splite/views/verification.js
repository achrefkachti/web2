document.getElementById("form").addEventListener("submit", function(e)
{

   var erreur; 
   var nomc = document.getElementById("nomc"); 
   var valeur = document.getElementById("valeur");
   var date =document.getElementById("date");
   //var dateact=new Date().format('d-m-Y');

   
   if (!nomc.value)
   {
      erreur="Veuillez remplir tous les champs"
   }

   if (!valeur.value)
   {
      erreur="Veuillez remplir tous les champs"
   }
   if(!date.value)
   {
     erreur="Veuillez remplir tous les champs"
   }
   /*else if(date<dateact)
    {erreur="nnnnnnnnnnnnnnnnnnn"}
   */
   if (erreur)
   {
      e.preventDefault(); 
     // document.getElementById("erreur").innerHTML = erreur; 
      alert(erreur);
      return false; 
   }
   

/*
    else
    {
         alert('Coupon Ajouté');
    }

*/
});
/*document.getElementById("form").addEventListener("submit", function(e)
  var o;
  var date=document.getElementById("date");
  var dateact=new Date().format('d-m-Y');

  if(date<dateact)
  {
    o="date nnnnnnnnnnn"
  }
  if(o){e.preventDefault();
    alert(o);
    return false;}


  )};*/