<div class="news-main-wrapper teaser-view">
  <?php foreach ($news as $news_item): ?>
    <div class="news-wrapper">
        <h3><?php print anchor('news/article/' . $news_item['id'], $news_item['title']); ?></h3>
        <div class="news-text"><?php print word_limiter($news_item['text'], 60); ?></div>
        <div class="slug-content">
            <div class="slug-label left">Slug:&nbsp;</div>
            <div class="slug-value">
                <a href="<?php echo base_url();?>news/view/<?php echo $news_item['slug'];?> "><?php echo $news_item['slug']; ?></a>
            </div>
        </div>
    </div>
  <?php endforeach;?>
</div>
