
<div class='d-flex flex-column align-items-center'>
    <div class='d-flex flex-column align-items-center mb-5'>
         <p><?=$item['name']?></p>
         <img src="<?=$item['img_data']?>"  width ="200" height="200" alt="">
    </div>
    <div class='d-flex flex-row justify-content-center'>
    <table class="table table-bordered">
    <tr class='bg-info ' style='font-size:20px'>     
        <td>Класс</td>
        <td>Пол</td>
        <td>Раса</td>
        <td>Биография</td>
    </tr>   
        <tr>          
            <td><?=$item['class']?></td>
            <td><?=$item['sex']?></td>
            <td><?=$item['race']?></td>
            <td><?=$item['bio']?></td>
        </tr>
</table>
    </div>
    <div>
        <p><a class="text-decoration-none text-info" href="../index">Назад</a></p>
    </div>
</div>