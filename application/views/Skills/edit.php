<form action="../update/<?=$item['id']?>" method = 'post' class='d-flex flex-column align-items-center mb-5'>
    <label for="name">Имя</label>
    <input type="text" name="name" id="name" value='<?=$item['name']?>'>

    <label for="without">Без навыка</label>
    <textarea name="without" id="without" cols="30" rows="10" ><?=$item['without']?></textarea>

    <label for="base">Базовый</label>
    <textarea name="base" id="base" cols="30" rows="10" ><?=$item['base']?></textarea>


    <label for="advanced">Продвинутый</label>
    <textarea name="advanced" id="advanced" cols="30" rows="10" ><?=$item['advanced']?></textarea>

    <label for="expert">Експерт</label>
    <textarea name="expert" id="expert" cols="30" rows="10" ><?=$item['expert']?></textarea>

    <button type= 'submit'>Редактировать</button>
    <a  class="text-decoration-none" href="../index">Назад</a>
</form>