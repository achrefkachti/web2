document.getElementById("form").addEventListener("submit", function(e)
{

   var erreur; 
   var idcl = document.getElementById("idcl"); 
   var nomcl = document.getElementById("nomcl"); 
   var quantite = document.getElementById("quantite");
   var prix =document.getElementById("prix");
   var nomprod =document.getElementById("nomprod");

   //var dateact=new Date().format('d-m-Y');

   if (!idcl.value)
   {
      erreur="Veuillez remplir tous les champs"
   }

   if (!nomcl.value)
   {
      erreur="Veuillez remplir tous les champs"
   }

   if (!quantite.value)
   {
      erreur="Veuillez remplir tous les champs"
   }
   if(!nomprod.value)
   {
     erreur="Veuillez remplir tous les champs"
   }
   if(!prix.value)
    {erreur="Veuillez remplir tous les champs"}
   
   if (erreur)
   {
      e.preventDefault(); 
     // document.getElementById("erreur").innerHTML = erreur; 
      alert(erreur);
      return false; 
   }
   


    else
    {
         alert('Produit Ajouté');
    }


});
/*document.getElementById("form").addEventListener("submit", function(e)
  var o;
  var dat=document.getElementById("date");
  var dateact=new Date().format('d-m-Y');

  if(date<dateact)
  {
    o="date nnnnnnnnnnn"
  }
  if(o){e.preventDefault();
    alert(o);
    return false;}


  )};*/