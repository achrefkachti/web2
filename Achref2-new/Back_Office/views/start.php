<?PHP
include "../entities/formulaire.php";
include "../core/formulaireC.php";
$formulaire=new Formulaire(75757575,'BEN Ahmed','Salah','achref@epsrit.tn',9345862,'scooters','mar','11/20/1998',5,'ofeifj');
$formulaireC=new FormulaireC();
$formulaireC->afficherFormulaire($formulaire);
echo "****************";
echo "<br>";
echo "cin:".$formulaire->getCin();
echo "<br>";
echo "nom:".$formulaire->getNom();
echo "<br>";
echo "prenom:".$formulaire->getPrenom();
echo "<br>";
echo "email:".$formulaire->getEmail();
echo "<br>";
echo "teleph:".$formulaire->getTelephone();
echo "<br>";
echo "catg:".$formulaire->getCategorie();
echo "<br>";
echo "ref:".$formulaire->getReference();
echo "<br>";
echo "date:".$formulaire->getDate();
echo "<br>";
echo "quant:".$formulaire->getQuantite();
echo "<br>";
echo "demande:".$formulaire->getDemande();
echo "<br>";
/*echo "le salaire est : ";
$employerC->calculerSalaire($employe); */



?>