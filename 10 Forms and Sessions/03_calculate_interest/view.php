
<!--/**
 * Created by PhpStorm.
 * User: apetrov
 * Date: 3/1/2017
 * Time: 3:01 PM
 */-->

<form>
<label for="amount">Enter Amount</label>
<input type="text" name="amount"> <br>
<input type="radio" name="currency" value="usd"> USD
<input type="radio" name="currency" value="eur"> EUR
<input type="radio" name="currency" value="bgn"> BGN <br>
<label for="amount">Compound interest amount</label>
<input type="text" name="compound"> <br>

<select name="period">
    <option value="6">6 Months</option>
    <option value="12">1 year</option>
    <option value="24">2 years</option>
    <option value="60">5 years</option>
</select>

<input type="submit" name="submit" value="Calculate">
</form>

<?php if (isset($finalSum)) : ?>

<div><?= $finalSum; ?></div>

<?php endif; ?>