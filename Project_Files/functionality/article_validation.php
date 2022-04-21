
<?php
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
?>