// JavaScript Document
//function test(){
//var mail = f.email.value;
//var pwd = f.pwd.value;
//var a = "@";
//var pt = ".";
//if( mail.length== 0 || pwd.length== 0)
//{
//alert("Vérifier votre login et votre de mot de passe");
//}
//else{
	
//var prenom = mail.substring(0,mail.indexOf(pt) );
//var nom = mail.substring(mail.indexOf(pt) + 1,mail.indexOf(a));
//alert('Bienvenue ' + prenom + " " + nom ) ;
//window.location="sondage.html";}
//}



function test() {
	a = f.email.value; 
	var pwd = f.pwd.value;
	valide1 = false; 
	for(var j=1;j<(a.length);j++)
	{ 
		if(a.charAt(j)=='@')
	{ 
		if(j<(a.length-4))
	{ 
		for(var k=j;k<(a.length-2);k++)
	{ 
		if(a.charAt(k)=='.') valide1=true; 
	} } } } 
	if(valide1==false || pwd.length== 0)
	{alert("Veuillez saisir une adresse email et un mot de passe valide."); }
	
	return valide1; } 