<h2><?= esc($title); ?></h2>

<?= \Config\Services::validation()->listErrors(); ?>
<form action="/news/create">
    <div class="form-group">
        <label for="title">Title</label>
        <input name="title" type="text" class="form-control" id="title" aria-describedby="title">
        <small id="title" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <label for="body">Description</label>
        <input name="body" type="text" class="form-control" id="body">
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
