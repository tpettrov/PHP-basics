<form>

    <textarea name="input"></textarea>
    <input type="submit"/>
</form>

<?php
/**
 * Created by PhpStorm.
 * User: Toni
 * Date: 2/9/2017
 * Time: 21:20
 */
if (isset($_GET['input'])) {

   $text = strtolower($_GET['input']);
   $repeatArray = [];

   $wordOfTextArray = str_word_count($text, 1);

   foreach ($wordOfTextArray as $word) {

       if(isset($repeatArray[$word])) {

           $repeatArray[$word]++;

       } else {

           $repeatArray[$word] = 1;
       }

   }

}

?>

<table border='2'><?php foreach ($repeatArray as $word => $count) { ?><tr><td><?=$word ?></td><td><?=$count ?></td></tr><?php }?>
</table>

