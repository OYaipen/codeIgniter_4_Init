<hr>

<div class="row">
    <div class="col"><a href="/news/create" class="btn btn-primary stretched-link">Create</a></div>
</div>
<div class="row">
    <?php if (!empty($news) && is_array($news)) : ?>
        <?php foreach ($news as $news_item) : ?>

            <div class="col-sm-1 col-lg-4 col-md-6">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title"><?= $news_item['title'] ?></h5>
                        <p class="card-text"> <?= $news_item['body'] ?></p>
                        <a href="<?= '/news/' . $news_item['slug'] ?>" class="btn btn-primary">View article</a>
                    </div>
                </div>
            </div>

        <?php endforeach; ?>

    <?php else : ?>

        <h3>No News</h3>

        <p>Unable to find any news for you.</p>

    <?php endif ?>
</div>