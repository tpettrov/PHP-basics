
<table border="1" cellpadding="0">

    <thead>
    <tr>
        <th>Name</th>
        <th>Age</th>
    </tr>
    </thead>
    <tbody>
        <?php for ($i=0; $i < 3; $i++):?>

    <tr>
        <td><?= $names[$i]; ?></td>
        <td><?= $ages[$i]; ?></td>

    </tr>
        <?php endfor; ?>
    </tbody>

</table>

<?php if (count($names) > 3) : ?>

    <form method="get">
        <input type="submit" name="next" value="Next">
    </form>

<?php endif; ?>
