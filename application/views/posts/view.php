<div class="shadow-sm p-3 mb-5 bg-body rounded">
    <h5><?php echo $post['title']; ?><br></h5>
    <small class="text-muted">Post date: <?php echo $post['created_at']; ?></small>
    <p><?php echo $post['body']; ?></p>
</div>
<a class="btn btn-info" href="<?php echo base_url(); ?>posts/edit/<?php echo $post['slug']; ?>">Edit</a>
<?php echo form_open('posts/delete/'.$post['id']); ?>
    <input type="submit" class="btn btn-danger" value="Delete">
</form>