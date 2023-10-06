<?php
require "header.php";

// require "linkdatabase.php"
?>

<div>
    <h1>My Portfolio</h1>
    <div>
        <p>Je m'appelle <?php echo $info['firstname'], " ", $info['lastname']?> et voici mon portfolio !</p>
        <p>Je suis née le <?php echo $info['birth_date']?></p>
    </div>
</div>

<?php
require "footer.php"
?>