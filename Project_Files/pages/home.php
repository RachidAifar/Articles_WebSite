

<?php if (!defined('APP_VERSION')){
    exit;
} ?>
<?php 
    $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
    $limit = ($current_page - 1) * PAGE_LIMIT;


    $articles =get_articles_list();
    $total_pages = ceil(get_article_count() / PAGE_LIMIT);
?>



<?php include_once "./view/_header.php" ?>;
<h1>
    Home page
</h1>


<div class="article-list">
    <?php while ($article = $articles->fetch_assoc()) : ?>
        <?php require BASE_PATH . '/view/_article_item.php'; ?>
    <?php endwhile; ?>
</div>
<nav class="pagination">
        <?php for ($i = 1; $i <= $total_pages; $i++) : ?>
            <a href="<?= page_url('home', ['page' => $i]); ?>" <?= $i == $current_page ? 'class="active"' : ''; ?>>
                 <?= $i; ?>
            </a>
         <?php endfor; ?>
</nav> 
<?php include_once "./view/_footer.php"?>;