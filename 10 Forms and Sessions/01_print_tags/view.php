
<!--/*-->
<!-- * Created by PhpStorm.-->
<!-- * User: apetrov-->
<!-- * Date: 2/28/2017-->
<!-- * Time: 11:06 AM-->
<!--*/-->


<form method="POST">

    <label for="text">Enter tags:</label>
    <input type="text" name="text" >
    <input type="submit" value="Submit">

</form>

<?php if(isset($arrTags)) :?>

   <?php  foreach ($arrTags as $key => $tag) : ?>

        <div><?php echo $key ?> : <?php echo htmlspecialchars($tag) ?></div>

<?php endforeach;  ?>

<?php endif; ?>