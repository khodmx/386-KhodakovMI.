<form method="POST" action="forms.php" enctype="multipart/form-data">
    <div>
    <p>Ваше ФИО<input type="text" name="name" /></p>
    <p>Страна проживания<input type="country" name="country" /></p>
    <p>Ваш любимый цвет<input type="color" name="color" /></p>
    <p>Женщина<input type="radio" name="no" value="no"/></p>
    <p>Мужчина<input type="radio" name="yes" value="yes" /></p>
        <label style="text-transform: none;" class="btn btn-light action-button"for="doc_upload">Выберите аватар</label>
        <input id="doc_upload" type="file" name="uploadedFile"  class="inputfile" />
    </div>
        <input class="btn btn-light action-button" type="submit" name="uploadBtn"/>
</form>