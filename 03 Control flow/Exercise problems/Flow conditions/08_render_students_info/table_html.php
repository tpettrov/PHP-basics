
<table border="1" cellpadding="0">

    <thead>
    <tr>
        <th>Name</th>
        <th>Age</th>
    </tr>
    </thead>
    <tbody>
        <?php for ($i=0; $i< count($names); $i++):?>

    <tr>
        <td><?= $names[$i]; ?></td>
        <td><?= $ages[$i]; ?></td>

    </tr>
        <?php endfor; ?>
    </tbody>

</table>

