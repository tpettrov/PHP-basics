/**
* Created by PhpStorm.
* User: Toni
* Date: 1/29/2017
* Time: 12:42
*/


<form method="get">

    <div><select name="operation">
            <option value="sum">Sum</option>
            <option value="substract">Substract</option>
        </select>
    </div>

    <div>

        <input type="text" name="num1">

    </div>

    <div>

        <input type="text" name="num2">

    </div>

    <div>

        <input type="submit" name="calculate" value="Calculate!">

    </div>

    <?php if(isset($result)) {?>

    <div>
        <input type="text" disabled="disabled" readonly="readonly" value="<?= $result; ?>"/>
    </div>

    <?php }; ?>


</form>


