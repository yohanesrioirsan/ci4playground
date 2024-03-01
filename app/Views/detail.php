<div class="container">
    <div class="row">
        <div class="col">
            <div class="details-card">
                <div class="card-img">
                    <img src="/img/<?= $comic['cover']; ?>" alt="cover">
                </div>
                <div class="comic-detail">
                    <h1><?= $comic['title']; ?></h1>
                    <p><span class="writer">Writer: <?= $comic['writer']; ?></span></p>
                    <p><span class="publisher">Publisher: <?= $comic['author']; ?></span></p>
                    <span class="synopsis">
                        <p><?= $comic['synopsis']; ?></p>
                    </span>
                    <div class="action-btn mt-3 mb-3">
                        <a href="/comic/edit/<?= $comic['slug']; ?>" class="btn btn-warning">Edit</a>

                        <form action="/comic/<?= $comic['id']; ?>" method="post" class="d-inline">
                            <?= csrf_field(); ?>
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure? This data will be lost permanently.');">Delete</button>
                        </form>
                    </div>
                    <!-- <a href="/comics">Back to All List</a> -->
                </div>
            </div>
        </div>
    </div>
</div>