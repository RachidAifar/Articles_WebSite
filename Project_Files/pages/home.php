<?php 
    $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
    $limit = ($current_page - 1) * PAGE_LIMIT;


    $articles =get_articles_list();
    $total_pages = ceil(get_article_count() / PAGE_LIMIT);
?>




<h1>
    Home page
</h1>


<div class="article-list">
    <?php while ($article =$articles ->Fetch_assoc()) : ?>
        <div class="article-item">
            <a href="<?= page_url('details',['id'=>$article['id']])?>">
                 <img src="https://via.placeholder.com/150" alt="   <?= $article['title'];?>">
            </a>
            <?= $article['title'];?>(<?= $article['subject'];?>)
        </div>
    <?php endwhile;?>
    <nav class="pagination">
    <?php for ($i = 1; $i <= $total_pages; $i++) : ?>
        <a href="<?= page_url('home', ['page' => $i]); ?>" <?= $i == $current_page ? 'class="active"' : ''; ?>>
            <?= $i; ?>
        </a>
    <?php endfor; ?>
</nav> 
</div>