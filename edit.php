<?php 
$title ='Edit the Records';
include 'includes/header.php';
require_once 'db/conn.php';


if(!isset($_GET['id'])){

    include 'includes/errormessage.php';
    header ('Location:viewrecords.php');

}else {
    $id=$_GET['id'];
    $kunde =$crud->getMemberDetails($id);




?>

<br />
<div class="container">
    <h1 class='text-center'>Edit Kunden</h1>

    <form method="POST" action="editpost.php">

        <input type='hidden' name='id' value="<?php echo $kunde['kunde_id']?>" />
        <div class="form-group">
            <label for="FirstName">Vorname</label>
            <input type="text" value="<?php echo $kunde['name1'] ?>" class="form-control" id="FirstName" name="name1"
                placeholder="Neue Vorname Eingeben">

        </div>
        <div class=" form-group">
            <label for="LastName">Nachname</label>
            <input type="text" value="<?php echo $kunde['name2'] ?>" class="form-control" id="LastName" name="name2"
                placeholder=" Neue Nachname Eingeben">

        </div>

        <div class="form-group">
            <label for="starsse">Strasse mit Haus Nr.</label>
            <input type="text" value="<?php echo $kunde['street'] ?>" class="form-control" id="street" name="street"
                placeholder=" Neue street Eingeben ">
        </div>



        <div class="form-group">
            <label for="plz">PLZ Eingeben</label>
            <input type="text" value="<?php echo $kunde['plz'] ?>" class="form-control" id="plz" name="plz"
                placeholder="Neue Plz Eingeben">
        </div>
        <div class="form-group">
            <label for="ort">Ort Eingeben</label>
            <input type="text" value="<?php echo $kunde['ort'] ?>" class="form-control" id="ort" name="ort"
                placeholder="Neue Ort Eingeben">

        </div>

        <button type="submit" class="btn btn-success btn-block" name="submit">Save Changes</button>
    </form>


    <?php } ?>

    <br>
    <br>
    <br>
    <br>
    <?php 
   include 'includes/footer.php';

 ?>
</div>