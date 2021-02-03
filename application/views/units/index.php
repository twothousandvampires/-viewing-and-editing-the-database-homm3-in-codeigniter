
<table class="table table-bordered table-hover">
 <thead class="thead-dark">
        <tr class='bg-info'>
            <td class='text-center'>Имя</td>
            <td></td>
            <td>Уровень</td>
            <td>Фракция</td>
            <td>Мин. урон</td>
            <td>Макс. урон</td>
            <td>Атака</td>
            <td>Защита</td>
            <td>Здоровье</td>
            <td>Скорость</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </thead>
    <tbody>
    <? foreach($units as $item){ ?>
        <tr>
            <td style='font-size:20px'><?=$item['name']?></td>
            <td><img src="<?=$item['img_data']?>" alt=""></td>
            <td><?=$item['level']?></td>
            <td><?=$item['fraction']?></td>
            <td><?=$item['min_damage']?></td>
            <td><?=$item['max_damage']?></td>
            <td><?=$item['attack']?></td>
            <td><?=$item['defence']?></td>
            <td><?=$item['hp']?></td>
            <td><?=$item['speed']?></td>
            <td><a class="text-decoration-none text-warning" href="../units/delete/<?=$item['id']?>">Удалить</a></td>
            <td><a class="text-decoration-none text-secondary" href="../units/edit/<?=$item['id']?>">Редактировать</a></td>
            <td><a class="text-decoration-none text-info" href="../units/view/<?=$item['id']?>">Просмотр</a></td>
        </tr>
    <?}?>
    </tbody>
   
</table>