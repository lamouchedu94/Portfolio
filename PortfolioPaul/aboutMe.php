<?php
require "header.php"
?>

<!-- <form name="form" action="" method="get">
    <div class="formBlock1">
        <label for="civility">Civility</label>
        <div>
            <label for="civility">Male</label>
            <input type="radio" id="civility" name="civility">
        </div>
            <div>
            <label for="Civility">Female</label>
            <input type="radio" id="civility" name="civility"><br>
        </div>
    </div>
    <div class="formBlock">
        <label for="Firstname">Firstname</label><br>
        <input type="text" id="fname" name="fname" placeholder="Complete this field"><br>
    </div>
    <div class="formBlock">
        <label for="Lastname">Lastname</label><br>
        <input type="text" id="lname" name="lname" placeholder="Complete this field"><br>
    </div>
    <div class="formBlock">
        <label for="Email">Email</label><br>
        <input type="email" id="email" name="email1" placeholder="Complete this field"><br>
    </div>
    <div class="formBlock">
        <label for="Phone number">Phone number</label><br>
        <input type="number" id="phoneNumber" name="phoneNumber" placeholder="Complete this field">
        <?php echo $_GET['fname']; ?>
    </div>
</form> -->

<?php echo $_GET['lname']; ?>

<?php
require "footer.php"
?>