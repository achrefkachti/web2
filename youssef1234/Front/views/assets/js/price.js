                function surligne(champ, erreur)
{
   if(erreur)
      champ.style.backgroundColor = "#fba";
   else
      champ.style.backgroundColor = "";
}


function verifmin($champ)
{


	 var prix = parseInt(champ.value);
   if(isNaN(prix) || prix <0 || prix >1000)
   {
      surligne(champ, true);
      return false;
   }
   else
   {
      surligne(champ, false);
      return true;
   }
}
function verifmax($champ)
{

   
    var prix = parseInt(champ.value);
   if(isNaN(prix) || prix <=1000 || prix >2000)
   {
      surligne(champ, true);
      return false;
   }
   else
   {
      surligne(champ, false);
      return true;
   }
}


function verifref(champ)
{
    var zip = parseInt(champ.value);
   if(isNaN(zip) || zip <0 || zip >9999)
   {
      surligne(champ, true);
      return false;
   }
   else
   {
      surligne(champ, false);
      return true;
   }
}