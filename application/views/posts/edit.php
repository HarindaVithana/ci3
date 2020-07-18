<div class="container">
<h2><?= $title; ?></h2>
<!-- <form class="" action="/blog/create" method="POST"> -->
<?php echo validation_errors(); ?>
<?php echo form_open('posts/update'); ?>
    ,<input type="hidden" name="id" value="<?php echo $post['id']; ?>">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><strong>Title</strong></span>
            </div>
            <input id="title" name="title" type="text" class="form-control" value="<?php echo $post['title'] ?>" placeholder="Title" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><strong>Post: </strong></span>
            </div>
            <textarea value="<?php echo $post['body'] ?>" name="body" id="body" class="form-control" rows="10"></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Create</button>
        </div>
    </form>
</div>
</div>