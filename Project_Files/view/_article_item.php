<div class="article-item">
        <a href="<?= page_url('details', ['article_id' => $article['article_id']]); ?>">
            <img src="https://via.placeholder.com/150" alt="<?= $article['title']; ?>">
        </a>
        <a href="<?= page_url('details', ['article_id' =>$article['article_id']]); ?>">
            <?= $article['author_name']; ?> <br> <?= $article['title']; ?> <br> <?= $article['discription']; ?><br> <?= $article['subject']; ?> <br>(<?= $article['year']; ?>)
        </a>
</div>