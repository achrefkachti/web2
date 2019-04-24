<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "achref");
$columns = array('cin', 'nom', 'prenom', 'email', 'teleph', 'catg', 'ref', 'date', 'quant', 'demande');

$query = "SELECT * FROM formulaire WHERE ";

if($_POST["is_date_search"] == "yes")
{
 $query .= 'date BETWEEN "'.$_POST["start_date"].'" AND "'.$_POST["end_date"].'" AND ';
}

if(isset($_POST["search"]["value"]))
{
 $query .= '
  (cin LIKE "%'.$_POST["search"]["value"].'%" 
  OR nom LIKE "%'.$_POST["search"]["value"].'%" 
  OR prenom LIKE "%'.$_POST["search"]["value"].'%" 
  OR email LIKE "%'.$_POST["search"]["value"].'%" 
  OR teleph LIKE "%'.$_POST["search"]["value"].'%" 
  OR catg LIKE "%'.$_POST["search"]["value"].'%" 
  OR ref LIKE "%'.$_POST["search"]["value"].'%" 
  OR quant LIKE "%'.$_POST["search"]["value"].'%"  
  OR demande LIKE "%'.$_POST["search"]["value"].'%")
 ';
}

if(isset($_POST["order"]))
{
 $query .= 'ORDER BY '.$columns[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' 
 ';
}
else
{
 $query .= 'ORDER BY cin DESC ';
}

$query1 = '';

if($_POST["length"] != -1)
{
 $query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}

$number_filter_row = mysqli_num_rows(mysqli_query($connect, $query));

$result = mysqli_query($connect, $query . $query1);

$data = array();

while($row = mysqli_fetch_array($result))
{
 $sub_array = array();
 $sub_array[] = $row["cin"];
 $sub_array[] = $row["nom"];
 $sub_array[] = $row["prenom"];
 $sub_array[] = $row["email"];
 $sub_array[] = $row["teleph"];
 $sub_array[] = $row["catg"];
 $sub_array[] = $row["ref"];
 $sub_array[] = $row["date"];
 $sub_array[] = $row["quant"];
 $sub_array[] = $row["demande"];
 $data[] = $sub_array;
}

function get_all_data($connect)
{
 $query = "SELECT * FROM formulaire";
 $result = mysqli_query($connect, $query);
 return mysqli_num_rows($result);
}

$output = array(
 "draw"    => intval($_POST["draw"]),
 "recordsTotal"  =>  get_all_data($connect),
 "recordsFiltered" => $number_filter_row,
 "data"    => $data
);

echo json_encode($output);

?>