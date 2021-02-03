<form action="../update/<?=$item['id']?>" method = 'post' class='d-flex flex-column align-items-center mb-5'>
    <label for="name">Имя</label>
    <input type="text" name="name" id="name" value='<?=$item['name']?>'>

    <label for="class">Фракция</label>
    <input type="text" name="class" id="class" value='<?=$item['class']?>'>

    <label for="race">Раса</label>
    <input type="text" name="race" id="" value='<?=$item['race']?>'>

    <label for="bio">Биография</label>
    <textarea name="bio" id="bio" cols="30" rows="10" ><?=$item['bio']?></textarea>

    <button type= 'submit'>Редактировать</button>
    <a  class="text-decoration-none" href="../index">Назад</a>
</form>