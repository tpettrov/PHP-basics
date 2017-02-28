
<!--/**-->
<!-- * Created by PhpStorm.-->
<!-- * User: apetrov-->
<!-- * Date: 2/28/2017-->
<!-- * Time: 2:43 PM-->
<!-- */-->


<form method="POST">

    <label for="text">Enter tags:</label>
    <input type="text" name="text" >
    <input type="submit" name="submit" value="Submit">
    <input type="submit" name="clear" value="Clear">

</form>

<?php if (isset($_SESSION))  : ?>

    <?php foreach ($_SESSION as $key=> $value) : ?>

    <div><?= $key ?> : <?= $value ?></div>

    <?php endforeach; ?>

    <div>Most frequent tag is: <?= array_search($mostFreqTag, $_SESSION)?></div>
<?php endif; ?>
