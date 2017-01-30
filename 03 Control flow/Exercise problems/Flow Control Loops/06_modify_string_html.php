<form method="get">
    <span>
        Input string:
        <input type="text" name="input">

    </span>

   <span><input type="radio" name="radio" value="palindrome">Check Palindrome</span>
    <span><input type="radio" name="radio" value="reverse">Reverse String</span>
    <span><input type="radio" name="radio" value="split">Split</span>
    <span><input type="radio" name="radio" value="hash">Hash String</span>
    <span><input type="radio" name="radio" value="shuffle">Shuffle String</span>

    <input type="submit" name="submit" value="Submit">

</form>

<?php if (isset($output)) : ?>

<div><?= $output?> </div>

<?php endif;?>

<?php if (isset($error)) : ?>

    <div><?= $error?> </div>

<?php endif;?>
