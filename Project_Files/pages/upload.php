
<?php if (!defined('APP_VERSION')){
    exit;
} ?>

<?php



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

    $sql = $db->prepare("INSERT INTO articles(`title`,`subject`,`author_name`,`discription`,`year`,`article`) VALUES (?,?,?,?,?,?)");
    $sql->bind_param('ssssis',$title,$subject,$author_name,$discription,$year,$article);
    $sql->execute();
    $sql->close();

    $new_id = $db->insert_id;
    redirect("details", ['id' => $new_id]);
}
}

$action_url= page_url('upload');
?>
<?php include_once "./view/_header.php" ?>;
<div class="page-upload">
      <?php require BASE_PATH . '/view/_article_form.php';?>
</div>
<?php include_once "./view/_footer.php"?>;

