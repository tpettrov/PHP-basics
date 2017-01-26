<?php
/**
 * Created by PhpStorm.
 * User: apetrov
 * Date: 1/26/2017
 * Time: 4:43 PM
 */

?>
<form action="07_Form_Data.php" method="post">
    Name:  <input type="text" name="name" /><br />
    Age: <input type="text" name="age" /><br />
    <input type="radio" name="radio" value="male"> Male
    <input type="radio" name="radio" value="female"> Female
    <input type="submit" name="submit" value="Submit me!" />
</form>

    <?php


            if(isset($_POST['name']) && isset($_POST['age']) && isset($_POST['radio'])) {
?>
         My name is <?php echo $_POST['name']?>. I am <?php echo $_POST['age']?> years old. I am <?php echo $_POST['radio']?>.

<?php } ?>