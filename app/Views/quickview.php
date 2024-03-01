        <div class="d-flex justify-content-center align-items-center h-100">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>