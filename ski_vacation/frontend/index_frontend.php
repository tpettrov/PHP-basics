<?php /** @var $data \Data\IndexViewData */ ?>

<form>

    <fieldset>
        First Name: <input type="text" name="firstName">
        Last Name: <input type="text" name="lastName">
        Email: <input type="text" name="email">
        Phone: <input type="text" name="phone">
    </fieldset>

    <fieldset>
        Type of accomodation: <select name="type_id">
            <?php foreach ($data->getTypes() as $accommodation_Type): ?>
                <option <?= isset($data->getFormData()['type_id'])
                && $data->getFormData()['type_id'] == $accommodation_Type->getId()
                    ? 'selected'
                    : '';?> value="<?=$accommodation_Type->getId();?>">
                    <?=$accommodation_Type->getName(); ?>
                </option>
            <?php endforeach; ?>
        </select><br/>
        Number of children: <input type="text" name="lastName">
        Number of adults: <input type="text" name="email">
        Rooms: <input type="text" name="phone">
    </fieldset>


    <fieldset>
        Check-in: <input type="text" name="firstName">
        Check-out: <input type="text" name="lastName">

        Lift Pass: <input type="checkbox" name="email">
        Ski Instructor: <input type="text" name="phone">
    </fieldset>

<input type="submit">
</form>