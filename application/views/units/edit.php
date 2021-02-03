<form action="../update/<?=$item['id']?>" method = 'post' class='d-flex flex-column align-items-center mb-5'>
    <label for="name">Имя</label>
    <input type="text" name="name" id="name" value='<?=$item['name']?>'>
    <label for="fraction">Фракция</label>
    <input type="text" name="fraction" id="fraction" value='<?=$item['fraction']?>'>
    <label for="min_damage">Минимальный урон</label>
    <input type="text" name="min_damage" id="" value='<?=$item['min_damage']?>'>
    <label for="max_damage">Максимальный урон урон</label>
    <input type="text" name="max_damage" id="" value='<?=$item['max_damage']?>'>
    <label for="attack">Атака</label>
    <input type="text" name="attack" id="attack" value='<?=$item['attack']?>'>
    <label for="defence">Защита</label>
    <input type="text" name="defence" id="defence" value='<?=$item['defence']?>'>
    <label for="hp">Здоровье</label>
    <input type="text" name="hp" id="hp" value='<?=$item['hp']?>'>
    <label for="speed">Скорость</label>
    <input type="text" name="speed" id="speed" value='<?=$item['speed']?>'>   
    <button type= 'submit'>Редактировать</button>
    <a  class="text-decoration-none" href="../index">Назад</a>
</form>