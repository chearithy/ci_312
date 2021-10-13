
<h5><?= $title ?></h5>

<?php echo validation_errors(); ?>

<?php echo form_open('posts/create'); ?>
    <div class="mb-3">
        <label class="form-label">Title</label>
        <input type="text" name="title" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Body</label>
        <textarea name="body" class="form-control" rows="3"></textarea>
    </div>
    <button class="btn btn-info btn-sm" type="submit">Create news item</button>
</form>
