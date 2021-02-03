
<div class='d-flex flex-column align-items-center'>
    <div class='d-flex flex-column align-items-center mb-5'>
         <p><?=$item['name']?></p>
         <img src="<?=$item['img_data']?>"  width ="200" height="200" alt="">
    </div>
    <div class='d-flex flex-row justify-content-center'>
    <table class="table table-bordered">
    <tr class='bg-info ' style='font-size:20px'>     
        <td>Уровень</td>
        <td>Фракция</td>
        <td>Мин. урон</td>
        <td>Макс. урон</td>
        <td>Атака</td>
        <td>Защита</td>
        <td>Здоровье</td>
        <td>Скорость</td>
        <td>Прирост</td>
        <td>Золото</td>
        <td>Ресурсы</td>
        <td>Способности</td>
        <td>AI ценность</td>
    </tr>   
        <tr>          
            <td><?=$item['level']?></td>
            <td><?=$item['fraction']?></td>
            <td><?=$item['min_damage']?></td>
            <td><?=$item['max_damage']?></td>
            <td><?=$item['attack']?></td>
            <td><?=$item['defence']?></td>
            <td><?=$item['hp']?></td>
            <td><?=$item['speed']?></td>
            <td><?=$item['growth']?></td>
            <td><?=$item['gold']?></td>
            <td><?=$item['resources']?></td>
            <td><?=$item['ability']?></td>
            <td><?=$item['ai_value']?></td>
        </tr>
</table>
    </div>
    <div>
        <p><a class="text-decoration-none text-info" href="../index">Назад</a></p>
    </div>
</div>