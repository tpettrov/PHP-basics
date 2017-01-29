
/**
 * Created by PhpStorm.
 * User: Toni
 * Date: 1/29/2017
 * Time: 14:28
 */

<form method="get">

    <div>
        Delimeter:
        <select name="delimeter">
            <option value=",">,</option>
            <option value="|">|</option>
            <option value="&">&</option>
        </select>
    </div>

    <div>
        Names:
        <input type="text" name="names">
    </div>

    <div>
        Ages:
        <input type="text" name="ages">
    </div>

    <div>
        Names:
        <input type="submit" name="filter" value="Filter!">
    </div>

</form>