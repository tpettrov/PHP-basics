
<!--/**-->
<!-- * Created by PhpStorm.-->
<!-- * User: Toni-->
<!-- * Date: 3/3/2017-->
<!-- * Time: 12:21-->
<!-- */-->


<form>

<fieldset>
        <input type="text" name="firstName" value="First Name"> <br>
        <input type="text" name="lastName" value="Last Name"> <br>
        <input type="text" name="email" value="Email"> <br>
        <input type="text" name="phoneNum" value="Phone Number"> <br>

        <input type="checkbox" name="gender"> Female
        <input type="checkbox" name="gender"> Male

        <br>
        <label for="birthDate"> Birth Date</label>
        <input type="text" name="birthDate">

</fieldset>


    <fieldset>
        Company Name <input type="text" name="companyName"> <br>
        From <input type="text" name="from"> <br>
        To <input type="text" name="to">


    </fieldset>

    <fieldset>
        Programming languages <input type="text" name="progLang"> <br>
        <select name="level">
            <option value="beginner">Beginner</option>
            <option value="Senior">Senior</option>
            <option value="Advanced">Advanced</option>
        </select>

        <input type="button" onclick="addNew()" value="Add Language">


    </fieldset>



</form>


<script>
    function addNew(){

        console.log('aha');


    }

</script>