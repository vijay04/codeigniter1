<?php foreach ($news_item as $news_item_key => $news_item_value): ?>
    <div class="news-wrapper">
        <h3><?php print anchor('/news/article/' . $news_item_value['id'], $news_item_value['title']); ?></h3>
        <div class="news-text"><?php echo $news_item_value['text'] ?></div>
        <p><?php print anchor('/news/view/' . $news_item_value['slug'], $news_item_value['slug']); ?></p>
    </div>
<?php endforeach; ?>
