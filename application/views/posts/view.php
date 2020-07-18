<div class="container">
    <h2><?php echo $post['title']; ?></h2>
    <small class='post-date'>Posted on: <?php echo $post['created_at']; ?></small>
    <div class="post-body">
        <?php echo $post['body'] ?>
    </div>
    <hr>
    <a class="btn btn-warning pull-left" href="<?php echo base_url(); ?>posts/edit/<?php $post['slug']; ?>">Edit</a>
    <?php echo form_open('posts/delete/'.$post['id']); ?>
        <input type="submit" value="delete" class="btn btn-danger">
    </form>
</div>