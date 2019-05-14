<meta charset="UTF-8">
<?php  
//export.php  
$connect = mysqli_connect("localhost", "root", "", "web");
$output = '';
if(isset($_POST["export"]))
{
 $query = "SELECT * FROM formulaire";
 $result = mysqli_query($connect, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
                    <tr>
                            <th>ID</th>
                            <th>CIN</th>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Email</th>
                            <th>Téléphone</th>
                            <th>Catégorie</th>
                            <th>Référence</th>
                            <th>Date</th>
                            <th>Quantité</th>
                            <th>Demande</th>
                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>
                            <td><?PHP echo $row["id"]; ?></td>
                            <td><?PHP echo $row["cin"]; ?></td>
                            <td><?PHP echo $row["nom"]; ?></td>
                            <td><?PHP echo $row["prenom"]; ?></td>
                            <td><?PHP echo $row["email"]; ?></td>
                            <td><?PHP echo $row["teleph"]; ?></td>
                            <td><?PHP echo $row["catg"]; ?></td>
                            <td><?PHP echo $row["ref"]; ?></td>
                            <td><?PHP echo $row["date"]; ?></td>
                            <td><?PHP echo $row["quant"]; ?></td>
                            <td><?PHP echo $row["demande"]; ?></td>
                    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=download.xls');
  echo $output;
 }
}
?>