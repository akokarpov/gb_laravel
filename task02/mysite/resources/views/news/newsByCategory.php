<h1>Блок новостей по категории</h1>
<?php foreach($news as $news): ?>

<div>
    <a href="<?=route('news.show', ['id'=> $news['id']])?>"><h3><?=$news['title']?></h3></a>
    <img src="<?=$news['image']?>" alt="pic">
    <p><?=$news['description']?></p>
    <p>Date: <?=$news['created_at']?></p>
    <hr>
</div>

<?php endforeach; ?>