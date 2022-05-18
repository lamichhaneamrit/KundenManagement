 <?php
 $title='view searched user';
require_once 'includes/header.php';
require_once 'db/conn.php';
include 'search-only.php';;

?>

 <?php

   if (!empty($_POST["btnFilter1"])){
        $filter=$_POST['filter1'];
        $sql=$pdo->prepare(" SELECT * FROM kunde where plz like '$filter' " ) ;
        $sql->execute();
        $count = $sql->rowCount();
  if($sql->rowCount() > 0){
    echo '<div class="alert alert-success" role="alert">
 '. $count . '  Vorname  gefunden in plz '. $filter .'
</div>
        ';


      ?>

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
    $sql->setFetchMode(PDO::FETCH_ASSOC);
        while($row= $sql->fetch()){ ?>


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
 '. $count . '  Vorname  gefunden in plz '. $filter .' ;
</div>
        ';
      }
    
   

    }
    