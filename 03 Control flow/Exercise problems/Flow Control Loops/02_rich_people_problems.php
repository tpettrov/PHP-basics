/**
* Created by PhpStorm.
* User: Toni
* Date: 1/29/2017
* Time: 19:09
*/

<form method="get">
    <div>
        Enter cars:
        <input type="text" name="cars">

    </div>

    <input type="submit" name="showResult" value="ShowResult">

</form>

<?php


$colors = ['yellow', 'green', 'red', 'blue', 'pink'];

if (isset($_GET['showResult'])) {

    $cars = explode(', ', $_GET['cars']); ?>

    <table border="1">
        <thead>
        <tr>
            <td>Car</td>
            <td>Color</td>
            <td>Count</td>
        </tr>
        </thead>


    <?php foreach ($cars as $car) : ?>

<tr>
    <td><?= $car ?></td>
    <td><?= $colors[array_rand($colors)] ?></td>
    <td><?= rand(1, 5);?></td>
</tr>

<?php endforeach; ?>
<?php } ?>
</table>