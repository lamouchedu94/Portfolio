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
    </div>
</form>  -->



<!-- <form name="form" action="" method="get">
  <input type="text" name="subject" id="subject" value="">
</form>
<?php echo $_GET['subject']; ?> -->

<div class="aboutMeHaut">
    <div class="mail">
        <h4><?php echo $info['email'];?></h4>
    </div>
    <div>
        <img src="img/kisspng-the-legend-of-zelda-the-minish-cap-the-legend-of-zelda-link-png-file-5a79869f03d344.7265453615179137590157.png" height="200" width="200">
    </div>
</div>
<div>
    <h2>Expériences</h2>
    <ol>
        <li>
            <p>contenu1</p> 
        </li>
        <li>
            <p>contenu2</p>
        </li>
    </ol>
</div>
<div>
    <h2>Compétences</h2>
    <ul>
        <li>contenu</li>
    </ul>
</div>
<?php
require "footer.php"
?>