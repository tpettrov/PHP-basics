<form method="get">
    <div>
        Input string:
        <input type="text" name="input">

    </div>

    <input type="submit" name="submit" value="Submit">

</form>

<?php
/**
 * Created by PhpStorm.
 * User: Toni
 * Date: 1/29/2017
 * Time: 23:17
 */

if (isset($_GET['submit']) && (!empty($_GET['input']))) :

    $inputArray = explode(',', $_GET['input']); ?>
    <table border="1">

    <?php foreach($inputArray as $value) : ?>

        <tr>
            <td><?= trim($value) ?> </td>
            <td><?= array_sum(str_split($value)) ?: 'I cannot sum that'  ?> </td>
        </tr>

<?php endforeach; ?>


    </table>

<?php endif; ?>