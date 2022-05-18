<?php 

$title='Success';
require_once 'includes/header.php';

require_once 'db/conn.php';

if (isset($_POST["submit"])){
    $id=$_POST["id"] ;
    $name1=$_POST["name1"];
    $name2=$_POST["name2"];
    $street=$_POST["street"];
    $plz=$_POST["plz"];
    $ort=$_POST["ort"];

    // call crud 
    $result=$crud->updateMemberDetails($id,$name1, $name2, $street, $plz, $ort);

    if ($result){
        header("Location: viewrecords.php");
    

    }else {
        include 'includes/errormessage.php';
     header ('Location:viewrecords.php');

    
}
}
   ?>
<?php 
include_once 'includes/footer.php';

?>