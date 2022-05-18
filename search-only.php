<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <main>
        <div class="heading">
            <h2>Alle Kunden </h2>
            <form class="form-group" method="GET" action="search.php">
                <input type="text" id="filter" name="filter" autofocus="true" placeholder="suche plz oder vorname"
                    tabindex="0" value="<?= $filter ?? '' ?>" />
                <input type="submit" name="btnFilter" id="btnFilter" value="Go" />
                <input type="submit" name="btnClear" id="btnClear" value="Clear Filters" />
            </form>


            <div class="container">
                <form class="form-group" method="post" action="stat.php">
                    <input type="number" id="filter" name="filter1" autofocus="true" placeholder="suche mit plz "
                        tabindex="1" value="<?= $filter ?? '' ?>" />
                    <input type="submit" name="btnFilter1" id="btnFilter" class="'btn btn-success pull-right"
                        value="Go" />

                </form>

            </div>
        </div>
</body>

</html>