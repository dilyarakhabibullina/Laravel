<h2>Newslist</h2></br>
<?php foreach($newsList as $news): ?>
    <div>
<h4>
    <a href="<?=route('showOneNew', ['id'=> $news['id']])?>">
<?=$news['title']?></a>
</h4>
<?=$news['text']?>

</div>
<?php endforeach; ?>





    

