<?php
// Range.php
if(isset($_POST["From"], $_POST["to"]))
{
	$conn = mysqli_connect("localhost", "root", "", "web");
	$result = '';
	$query = "SELECT * FROM formulaire WHERE date BETWEEN '".$_POST["From"]."' AND '".$_POST["to"]."'";
	$sql = mysqli_query($conn, $query);
	$result .='
	<table id="order_data" class="table table-bordered border-t0 key-buttons text-nowrap w-100" >
												<thead>
													<tr>
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
												</thead>';
	if(mysqli_num_rows($sql) > 0)
	{
		while($row = mysqli_fetch_array($sql))
		{
			$result .='
			<tr>
			<td>'.$row["cin"].'</td>
			<td>'.$row["nom"].'</td>
			<td>'.$row["prenom"].'</td>
			<td>'.$row["email"].'</td>
			<td>'.$row["teleph"].'</td>
			<td>'.$row["catg"].'</td>
			<td>'.$row["ref"].'</td>
			<td>'.$row["date"].'</td>
			<td>'.$row["quant"].'</td>
			<td>'.$row["demande"].'</td>
			</tr>';
		}
	}
	else
	{
		$result .='
		<tr>
		<td colspan="5">No Purchased Item Found</td>
		</tr>';
	}
	$result .='</table>';
	echo $result;
}
?>