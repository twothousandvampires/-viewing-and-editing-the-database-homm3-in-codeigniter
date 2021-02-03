
<table class="table table-bordered table-hover">
 <thead class="thead-dark">
        <tr class='bg-info'>
            <td class='text-center'>Имя</td>
            <td></td>
            <td>Без навыка</td>
            <td>Базовый</td>
            <td>Продвинутый</td>
            <td>Эксперт</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </thead>
    <tbody>
    <? foreach($skills as $item){ ?>
        <tr>
            <td style='font-size:20px'><?=$item['name']?></td>
            <td><img src="<?=$item['img_data']?>" alt=""></td>
            <td><?=$item['without']?></td>
            <td><?=$item['base']?></td>
            <td><?=$item['advanced']?></td>
            <td><?=$item['expert']?></td>
            <td><a class="text-decoration-none text-warning" href="../skills/delete/<?=$item['id']?>">Удалить</a></td>
            <td><a class="text-decoration-none text-secondary" href="../skills/edit/<?=$item['id']?>">Редактировать</a></td>
            <td><a class="text-decoration-none text-info" href="../skills/view/<?=$item['id']?>">Просмотр</a></td>
        </tr>
    <?}?>
    </tbody>
   
</table>