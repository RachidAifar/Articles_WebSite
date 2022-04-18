<?php
$id= isset($_GET['id']) ? $_GET['id'] : null;
if($id === null){
    redirect('404');
}


$articles=get_articles_by_id($id);

if($articles===null)
{
    redirect('404');
}

?>
<?php include_once './views/_header.php'; ?>
<div class="page_page-details">
    <h1><?= $articles['title'];?></h1>
    <h2><?= $articles['subject'];?></h2>
    <p>discription<br><?= $articles['discription'];  ?></p>
    <p><br> the author is <?= $articles['author_name'];  ?></p>
    <p>wrote it in <?= $articles['year'];  ?></p>
</div>
<?php include_once "./views/_footer.php"; ?>