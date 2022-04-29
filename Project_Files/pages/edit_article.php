<?php if (!defined('APP_VERSION')){
    exit;
} ?>
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


if(is_post()){
    $title=trim($_POST['title']);
    $subject=trim($_POST['subject']);
    $author_name=trim($_POST['author_name']);
    $discription=trim($_POST['discription']);
    $year=trim($_POST['year']);
    $article=trim($_POST['article']);

    require BASE_PATH . '/functionality/article_validation.php';

    if (count($errors) == 0) {
        // todo change this later
    
        $sql = $db->prepare("UPDATE articles SET `title`=?,`subject`=?,`author_name`=?,`discription`=?,`year`=?,`article`=? WHERE `article_id`=? ");
        $sql->bind_param('ssssisi',$title,$subject,$author_name,$discription,$year,$article,$id);
        $sql->execute();
        $sql->close();
    
      
        redirect("edit_article", ['article_id' => $id,'success'=>1]);
    }





}






extract($articles, EXTR_SKIP);

$action_url= page_url('edit_article',['article_id'=>$id]);
?>
<?php include_once "./view/_header.php" ?>;
<div class="page-edit">
    <?php if(isset($_GET['success'])):?>
        <div class="alert alert-success">
            Article edit successsfully
        </div>
    <?php endif;?>
   <?php require BASE_PATH . '/view/_article_form.php';?>
</div>
<?php include_once "./view/_footer.php"?>;

