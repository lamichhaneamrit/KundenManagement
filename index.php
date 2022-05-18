<?php 
$title ='homepage';
include 'includes/header.php';
require_once 'db/conn.php';



?>

<br />
<div class="container">
    <h1 class='text-center'>Kunden Management System</h1>

    <form method="post" action="success.php">
        <div class="form-group">
            <label for="FirstName">Vorname</label>
            <input required type="text" class="form-control" id="name1" name="name1" placeholder="Vorname Eingeben">

        </div>
        <div class="form-group">
            <label for="LastName">Nachname</label>
            <input required type="text" class="form-control" id="name2" name="name2" placeholder="Nachname Eingeben">

        </div>

        <div class="form-group">
            <label for="street">Straße und Haus Nummer </label>
            <input required type="text" class="form-control" id="street" name="street"
                placeholder="straße Name Eingeben ">
        </div>



        <div class="form-group">
            <label for="plz">PLZ</label>
            <input required type="number" class="form-control" id="plz" name="plz" placeholder="PLZ Eingeben">

        </div>
        <div class="form-group">
            <label for="ort">Ort</label>
            <input required type="text" class="form-control" id="ort" name="ort" placeholder="Ort Eingeben">

        </div>


        <button type="submit" name="submit" class="btn btn-primary btn-block">Jetz Registeren</button>
    </form>
    <br>
    <br>
    <br>

    <br>
    <?php 
  include 'includes/footer.php';


?>