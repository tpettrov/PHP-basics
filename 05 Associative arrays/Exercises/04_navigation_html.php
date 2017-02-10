<!––/**
 * Created by PhpStorm.
 * User: apetrov
 * Date: 2/10/2017
 * Time: 11:17 AM
 */  ––>

<form>
    Categories:
    <input type="text" name="categories"></input>
    Tags:
    <input type="text" name="tags"></input>
    Months:
    <input type="text" name="months"></input>
    <input type="submit" value="Generate"/>
</form>

<?php if (isset($ready)) { ?>

<h2>Categories</h2>
    <ul>
    <?php foreach ($categories as $category) : ?>
        <li><?= $category ?></li>
        <?php endforeach; ?>
    </ul>
<h2>Tags</h2>
    <ul>
        <?php foreach ($tags as $tag) : ?>
            <li><?= $tag ?></li>
        <?php endforeach; ?>
    </ul>
<h2>Months</h2>
    <ul>
        <?php foreach ($months as $month) : ?>
            <li><?= $month ?></li>
        <?php endforeach; ?>
    </ul>

<?php } ?>
