/**
 * Created by PhpStorm.
 * User: Toni
 * Date: 1/29/2017
 * Time: 18:25
 */
<table border="1px solid">
<thead>
    <td>Number</td>
    <td>Square</td>
</thead>
     <?php $sum = 0; ?>
<?php for ($i=0; $i <=100; $i++) { ?>
    <?php if ($i % 2 == 0) :?>
    <tr>
        <td><?= $i ?></td>
        <td><?= round(sqrt($i),2) ?></td>
    </tr>
        <?php $sum+= round(sqrt($i),2);?>
    <?php endif;?>
    <?php }; ?>

    <tr>
        <td>Total:</td>
        <td><?= $sum ?></td>
    </tr>
</table>