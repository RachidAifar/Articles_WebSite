 <form class="card" action="<?= $action_url; ?>" method="POST">
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
            <button class="btn" type="submit">Save</button>
        </div>
</form>
