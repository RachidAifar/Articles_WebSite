<?php 

    $articles =get_articles_list();
?>




<h1>
    Home page
</h1>

<?php while ($article =$articles ->Fetch_assoc()) : ?>
    <div>
        <?= $article['title'];?>
    </div>
    <?php endwhile;?> 