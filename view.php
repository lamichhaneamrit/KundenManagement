<?php 
   $title='view single';
     require_once 'includes/header.php';


     require_once 'db/conn.php';
    //  
    if (isset($_GET['id'])){
        $id =$_GET['id'];
        $result=$crud->getMemberDetails($id);
        
    }else {
            include 'includes/errormessage.php';
            header ('Location:viewrecords.php');

    }
?>


<div class='card' style="width:18rem">
    <div class="card-body">
        <h5 class="card-title">
            <?php echo $result["name1"] . ' ' . $result["name2"];  ?>
        </h5>
        <h6 class="card-subtitle mb-2 text-muted">
            <?php echo $result["name1"];  ?>
        </h6>
        <p class="card-text">
            street: <?php echo $result["street"];  ?>
        </p>
        <p class="card-text">
            Plz: <?php echo $result["plz"];  ?>
        </p>
        <p class="card-text">
            Ort: <?php echo $result["ort"];  ?>
        </p>

    </div>
</div>
<br />
<a href="view.php" class="btn btn-info">Zürück</a>
<a href="edit.php?id=<?php echo $result['kunde_id'] ?>" class="btn btn-warning">Edit</a>
<a onclick="return confirm ('Are you sure want to delete this record ?');"
    href="delete.php?id=<?php echo $result['kunde_id'] ?>" class="btn btn-danger">Delete</a>

<?php 
     require_once 'includes/footer.php';