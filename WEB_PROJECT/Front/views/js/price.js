         function surligne(champ, erreur)
{
   if(erreur)
      champ.style.backgroundColor = "#fba";
   else
      champ.style.backgroundColor = "";
}


function verifmin(champ)
{

  
	var p=f.min.value;
   if( p <0 || p >1000)
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
function verifmax(champ)
{

   var p=f.max.value;
   
   if( p <=1000 || p >2000)
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