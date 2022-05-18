<?php  
require_once 'includes/header.php';
require_once 'db/conn.php';
include 'search-only.php';



//clear old filters
if(isset($_POST['btnClear'])){
  unset($_SESSION['filter']);
}


$strSQL = "SELECT * FROM kunde ";

if(isset($_GET['filter'])  ){
 //add the filter to the query and save in params
 $filter = trim($_GET['filter']);
 $strSQL .= " WHERE name1 LIKE  '%$filter%' or plz LIKE '%$filter%'";
$_SESSION['filter'] = $filter;

}else{
 if(isset($_SESSION['filter']) && strlen($_SESSION['filter'])>0 ){
//reapply old filter if user is just sorting
$filter = $_SESSION['filter'];
$strSQL .= " WHERE name1 LIKE '%$filter%' or plz LIKE '%$filter%' ";
// $params[] = '%' . $filter . '%';
$_SESSION['filter'] = $filter;


 }


}

$prepared = $pdo->prepare($strSQL);

$prepared->execute();
               

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filtering &amp; Sorting</title>

</head>



<?php
     // echo $prepared->debugDumpParams();
      if($prepared->rowCount() > 0){ ?>

<table class="table">
    <tr>
        <th>S.N</th>
        <th>Vorname</th>
        <th>Nachname</th>
        <th>straße</th>
        <th>PLZ</th>
        <th>Ort</th>
        <th>Action</th>


    </tr>
    <?php
    $prepared->setFetchMode(PDO::FETCH_ASSOC);
        while($row= $prepared->fetch()){ ?>


    <tr>
        <td><?php echo $row['kunde_id']?></td>
        <td><?php echo $row['name1']?></td>
        <td><?php echo $row['name2']?></td>
        <td><?php echo $row['street']?></td>
        <td><?php echo $row['plz']?></td>
        <td><?php echo $row['ort']?></td>

        <td>
            <a href=" view.php?id=<?php echo $row['kunde_id']?>" class="btn btn-primary">View</a>
            <a href="edit.php?id=<?php echo $row['kunde_id'] ?>" class="btn btn-warning">Edit</a>
            <a onclick="return confirm ('Are you sure want to delete this record ?');"
                href="delete.php?id=<?php echo $row['kunde_id'] ?>" class="btn btn-danger">Delete</a>

        </td>


    </tr>
    <?php
        } 
    }else{
        
        echo '<div class="alert alert-danger" role="alert">
   Nicht gefunden !  Suche mit plz und vorname möglich. Nochmal versuchen.!
</div>
        ';
      }
    
    ?>

    </main>
    <script>
    document.getElementById('btnClear').addEventListener('click', (ev) => {
        document.getElementById('filter').value = '';
    })
    </script>
    </body>