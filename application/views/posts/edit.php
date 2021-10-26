
<h5><?= $title ?></h5>

<?php echo validation_errors(); ?>

<?php echo form_open('posts/update'); ?>
    <input type="hidden" name="id" value="<?php echo $post['id']; ?>">
    <div class="mb-3">
        <label class="form-label">Title</label>
        <input type="text" class="form-control" name="title" placeholder="Add Title" value="<?php echo $post['title']; ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">Body</label>
        <textarea class="form-control" name="body"><?php echo $post['body']; ?></textarea>
    </div>
    <button class="btn btn-info btn-sm" type="submit">Create news item</button>
</form>
