 <form action="<?php home_url( '/' )?>" method="post">
    <input type="hidden" value="properties" name="post_type" id="post_type" />
    <div class="row review-form gx-3">
    <div class="col-lg-9 col-md-9">
        <div class="form-group">
            <input type="text" class="form-control" name="s" value="<?php the_search_query();?>" placeholder = "Търси имот по ключова дума..." required>
        </div>
    </div>
    <div class="col-lg-3 col-md-3">
        <button type="submit" class="btn btn-gradient color-4">Търси</button>
    </div>
</div>
    
</form>

