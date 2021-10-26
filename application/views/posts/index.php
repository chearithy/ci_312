<h5><?= $title ?></h5>

<?php foreach ($posts as $post): ?>
    <div class="shadow-sm p-3 mb-5 bg-body rounded">
        <h5><?php echo $post['title']; ?><br></h5>
        <small class="text-muted">Post date: <?php echo $post['created_at']; ?></small>
        <p><?php echo word_limiter($post['body'], 50); ?></p>
        <a class="btn btn-info btn-sm" href="<?php echo site_url('/posts/'.$post['slug']); ?>">Read more</a>
    </div>
<?php endforeach; ?>