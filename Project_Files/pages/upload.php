<?php
$errors=[];


if(is_post()){
    $title=trim($_POST['title']);
    $subject=trim($_POST['subject']);
    $author_name=trim($_POST['author_name']);
    $discription=trim($_POST['discription']);
    $year=trim($_POST['year']);
    $article=trim($_POST['article']);


    if($title===null){
        $errors['title'][]="Title is required";
    }else if(strlen($title)<2){
        $errors['title'][]="The title must be at least 2 characters long";
    }


    if($subject===null){
        $errors['subject'][]="subject is required";
    }else if(strlen($subject)<3){
        $errors['subject'][]="The subject must be at least 3 characters long";
    }

    if($author_name===null){
        $errors['author_name'][]="author is required";
    }else {
        if(strlen($author_name)<2){
        $errors['author_name'][]="The author must be at least 2 characters long";
    }
    }


    if($discription===null){
        $errors['discription'][]="description is required";
    }else if(strlen($discription)<50){
        $errors['discription'][]="The description must be at least 50 characters long";
    }

    if($year===null){
        $errors['year'][]="year is required";
    }else{
        if(!is_numeric($year)){
        $errors['year'][]="The year must be number";
    }
}


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
?>
<div class="page-upload">
    <form class="card" action="<?php echo page_url('upload');?>" method="POST">
        <div class="form-group <?php echo isset($errors['title']) ? 'has-error':'';  ?> ">
            <label for="title">Title</label>
            <input type="text" class="form-control"  name="title" value="<?php echo isset($title) ? $title : ''; ?>">
            <?php if(isset($errors['title'])) : ?>
                <p class="validation-error">
                    <?php echo $errors['title'][0];?>
                </p>
            <?php endif;?>
        </div>
        <div class="form-group">
            <label for="subject">Subject</label>
            <input  class="form-control" type="text" name="subject" value="<?php echo isset($subject) ? $subject : ''; ?>">
            <?php if (isset($errors['subject'])) : ?>
                <p class="validation-error">
                    <?php echo $errors['subject'][0]; ?>
                </p>
            <?php endif; ?>
        </div>
        <div class="form-group">
            <label for="author_name">Author</label>
            <input  class="form-control" type="text" name="author_name" value="<?php echo isset($author_name) ? $author_name : ''; ?>">
            <?php if (isset($errors['author_name'])) : ?>
                <p class="validation-error">
                    <?php echo $errors['author_name'][0]; ?>
                </p>
            <?php endif; ?>
        </div>
        <div class="form-group">
            <label for="discription" rows="2" cols="50">Discription</label>
            <textarea name="discription" class="form-control" ><?php echo isset($discription) ? $discription : ''; ?></textarea>
            <?php if (isset($errors['discription'])) : ?>
                <p class="validation-error">
                    <?php echo $errors['discription'][0]; ?>
                </p>
            <?php endif; ?>
        </div>
        <div class="form-group">
            <label for="year">Year</label>
            <input type="number" class="form-control"  name="year" value="<?php echo isset($year) ? $year : ''; ?>">
            <?php if (isset($errors['year'])) : ?>
                <p class="validation-error">
                    <?php echo $errors['year'][0]; ?>
                </p>
            <?php endif; ?>
        </div>
        <div class="form-group">
            <label for="article">Article</label>
            <textarea  class="form-control" name="article"  rows="10" cols="50"><?php echo isset($article) ? $article : ''; ?>
            Enter your article here...</textarea>
            <?php if (isset($errors['article'])) : ?>
                <p class="validation-error">
                    <?php echo $errors['article'][0]; ?>
                </p>
            <?php endif; ?>
        </div>
        <div>
            <button class="btn" type="submit">Upload</button>
        </div>
    </form>
</div>
