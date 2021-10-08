<h5><?= $title ?></h5>

<?php foreach ($posts as $post): ?>
    <div class="shadow-sm p-3 mb-5 bg-body rounded">
        <h5><?php echo $post['title']; ?><br></h5>
        <small class="text-muted">Post date: <?php echo $post['created_at']; ?></small><br><br>
        <?php echo $post['body']; ?>
        <div><a href="<?php echo site_url('/posts/'.$post['slug']); ?>"></a></div>
    </div>
<?php endforeach; ?>