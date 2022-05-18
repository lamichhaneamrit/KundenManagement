<?php
$title='Success';
require_once 'includes/header.php';
require_once 'db/conn.php';

    if(isset($_POST["submit"])){
        
        $name1 = $_POST["name1"];
        $name2 = $_POST["name2"];
        $street = $_POST["street"];
        $plz = $_POST["plz"];
        $ort = $_POST["ort"];
   
        $isSuccess = $crud->createMember($name1,$name2,$street,$plz,$ort);
   
    

            if($isSuccess){
                    include "includes/successmessage.php"; 

            }else {
                    include "includes/errormessage.php";
                    header ("Location:viewrecords.php");

            }

            
        }

        
?>


<!-- First Trying with GET METHODS and then changing to Post afterwards  -->


<div class='card' style="width:18rem">
    <input type='hidden' name='id' value="<?php echo $_POST['kunde_id']?>" />
    <div class="card-body">
        <h5 class="card-title">
            <?php echo $_POST["name1"]. ' ' . $_POST["name2"];  ?>
        </h5>
        <h6 class="card-subtitle mb-2 text-muted">
            <?php echo $_POST["street"] ?$_POST["street"]:'' ;  ?>
        </h6>
        <p class="card-text">
            straße : <?php echo $_POST["street"];  ?>
        </p>
        <p class="card-text">
            PLZ : <?php echo $_POST["plz"];  ?>
        </p>
        <p class="card-text">
            Ort: <?php echo $_POST["ort"];  ?>
        </p>

    </div>
</div>




<?php 


include_once 'includes/footer.php';

?>