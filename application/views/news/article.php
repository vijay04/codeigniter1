<article id="article-<?php print $article_data['id']; ?>" class="news-article full-view">
  <h1 class="page-title"><?php print $article_data['title']; ?></h1>
  <div class="region region-content">
    <div class="body-content">
        <?php print $article_data['text']; ?>
    </div>
    <div class="slug-content">
        <div class="slug-label left">Slug:&nbsp;</div>
        <div class="slug-value">
            <?php print anchor('/news/view/' . $article_data['slug'] , $article_data['slug']); ?>
        </div>
    </div>
  </div>
</article>
