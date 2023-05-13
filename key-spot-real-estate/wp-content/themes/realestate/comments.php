<div class="comment-section">
    <h4>Коментари</h4>
    <div class="comment-box">
      
        <?php 
        $args_comment = array(
            'max_depth' => '2',
            'style' => 'div',

        );

        wp_list_comments($args_comment); ?>


    </div>

</div>

<div class="leave-comment comment-section">

 <?php  

    $fields = array (
    'author' =>'<div class="form-group col-md-6">
                                        <input type="text" name="author" class="form-control" placeholder="*Въведете вашето име" required>
                                    </div>',

    'email' =>'<div class="form-group col-md-6">
                                        <input type="email" name="email" class="form-control" placeholder="*Въведете имейл" required>
                                    </div>',
    'cookies' => '',

    );

        $args = array(


    'fields' => apply_filters( 'comment_form_default_fields', $fields ) , 

    'comment_field' => '<div class="form-group col-md-12"><textarea name="comment" class="form-control" placeholder="*Коментирай" required></textarea></div>',

    'submit_button' => '<button type="submit" class="btn btn-gradient color-2 btn-flat">Коментирай</button>',

    'submit_field' => '<div class="text-end"> %1$s %2$s</div>',

    'class_form'=> 'review-form',
    'title_reply_before' => '<h4>',
    'title_reply_after' => '</h4>',
    'comment_notes_before' => ''



    );

        if(comments_open()) {
         comment_form($args);
    }



    ?>
</div>