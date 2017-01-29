<?php
/**
 * Created by PhpStorm.
 * User: Toni
 * Date: 1/29/2017
 * Time: 20:14
 */

$currentYear = date('Y');
// няма смисъл от Include .... кратка задача
?>

<form method="get">
    <div>
        Enter number of years:
        <input type="text" name="years">
    </div>
    <div>
        <input type="submit" name="show" value="Show Costs">
    </div>
</form>

<?php if (isset($_GET['show'])) : ?>

    <table border="1">

        <thead>
        <tr>
            <th>Year</th>
            <?php for ($m=1; $m<=12; $m++) :
                $month = date('F', mktime(0,0,0,$m, 1, date('Y'))); ?>
                <th><?= $month ?></th>
            <?php endfor; ?>
            <th>Total:</th>
        </tr>
        </thead>


   <?php for ($i=1; $i<=$_GET['years']; $i++) : ?>
            <?php $sum = 0 ?>
        <tr>
        <td><?= $currentYear - $i; ?></td>
            <?php for ($j=0; $j<12; $j++) : ?>

                <td><?php $money = rand(0, 999); $sum+=$money; echo "$money" ?></td>

           <?php endfor; ?>
            <td><?= $sum; ?></td>
        </tr>

        <?php endfor; ?>

        <?php endif; ?>


    </table>
