<!--/**-->
<!-- * Created by PhpStorm.-->
<!-- * User: Toni-->
<!-- * Date: 3/3/2017-->
<!-- * Time: 12:21-->
<!-- */-->


<form>

    <fieldset>
        <input type="text" name="firstName"> <br>
        <input type="text" name="lastName"> <br>
        <input type="text" name="email"> <br>
        <input type="text" name="phoneNum"> <br>

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
        Programming languages <br>
        <div>
            <input type="text" name="progLang[]">
            <select name="level[]">
                <option value="beginner">Beginner</option>

            </select>
        </div>

        <div>
            <input type="text" name="progLang[]"> <br>
            <select name="level[]">
                <option value="advanced">Advanced</option>

            </select>
        </div>


    </fieldset>

    </fieldset>

    <fieldset>

        Languages <br>

        <input type="text" name="languages[]">
        <select name="reading">

            <option value="intermediate">Intermediate</option>
        </select>
        <select name="writing">

            <option value="beginner">Beginner</option>
        </select>



    </fieldset>

    <input type="submit" name="submit" value="Generate CV">

</form>
