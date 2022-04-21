<?php
$id= isset($_GET['article_id']) ? $_GET['article_id'] : null;
if($id === null){
    redirect('404');
}

$articles=get_articles_by_id($id);

if($articles===null)
{
    redirect('404');
}


