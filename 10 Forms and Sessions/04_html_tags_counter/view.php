
<!--/**-->
<!-- * Created by PhpStorm.-->
<!-- * User: apetrov-->
<!-- * Date: 3/1/2017-->
<!-- * Time: 4:40 PM-->
<!-- */-->

<form>

        Enter HTML tag: <input type="text" name="tag">
    <input type="submit" name="submit"  >

</form>

<?php if(isset($_GET['submit'])) : ?>

    <div><?= $_SESSION['count'] ?></div>

   <?php if ($flag) : ?>

       <div>Valid HTML tag !</div>
   <?php else :?>

       <div>Invalid HTML tag !</div>


<?php endif; ?>
<?php endif; ?>
