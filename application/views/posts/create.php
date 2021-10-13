
<h5><?= $title ?></h5>

<?php echo form_open('posts/create'); ?>
    <div class="mb-3">
        <label class="form-label">Title</label>
        <input type="text" class="form-control">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Body</label>
        <textarea class="form-control" rows="3"></textarea>
    </div>
    <input class="btn btn-info btn-sm" type="submit" name="submit" value="Create news item" />
</form>
