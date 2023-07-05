<h1>Список категорий</h1>

<?php foreach($categories as $category): ?>
 <a href="categories/<?=$category['id']?>">
    <h3><?=$category['category_name']?></h3>
</a>
<?php endforeach; ?>
