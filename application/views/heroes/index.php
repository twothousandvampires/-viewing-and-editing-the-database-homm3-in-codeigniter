
<table class="table table-bordered table-hover">
 <thead class="thead-dark">
        <tr class='bg-info'>
            <td class='text-center'>Имя</td>
            <td></td>
            <td>Класс</td>
            <td>Пол</td>
            <td>Раса</td>
            <td>Биография</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </thead>
    <tbody>
    <? foreach($heroes as $item){ ?>
        <tr>
            <td style='font-size:20px'><?=$item['name']?></td>
            <td><img src="<?=$item['img_data']?>" alt=""></td>
            <td><?=$item['class']?></td>
            <td><?=$item['sex']?></td>
            <td><?=$item['race']?></td>
            <td><?=$item['bio']?></td>
            <td><a class="text-decoration-none text-warning" href="../heroes/delete/<?=$item['id']?>">Удалить</a></td>
            <td><a class="text-decoration-none text-secondary" href="../heroes/edit/<?=$item['id']?>">Редактировать</a></td>
            <td><a class="text-decoration-none text-info" href="../heroes/view/<?=$item['id']?>">Просмотр</a></td>
        </tr>
    <?}?>
    </tbody>
   
</table>