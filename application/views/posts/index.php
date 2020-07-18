<div class="container">
<h2><?= $title ?></h2>
<?php foreach($posts as $post): ?>
    <h3><?php echo $post['title']; ?></h3>
    <small class='post-date'>Posted on: <?php echo $post['created_at']; ?></small>
    <br><p><?php echo $post['body']; ?></p>
    <br>
    <p><a class="btn btn-primary" href="<?php echo site_url('/posts/'.$post['slug']); ?>">Read More</a></p>
<?php endforeach; ?>
</div>