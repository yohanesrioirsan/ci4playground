<div class="modal-content">
    <div class="modal-body">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="my-3">Add Collection</h2>
                    <?php if (session()->has("errors")) : ?>
                        <ul>
                            <?php foreach (session("errors") as $error) : ?>
                                <li><?= $error ?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                    <form action="/comics/save" method="post">
                        <?= csrf_field(); ?>
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" name="title">
                        </div>
                        <div class="mb-3">
                            <label for="writer" class="form-label">Writer</label>
                            <input type="text" class="form-control" id="writer" name="writer">
                        </div>
                        <div class="mb-3">
                            <label for="author" class="form-label">Publisher</label>
                            <input type="text" class="form-control" id="author" name="author">
                        </div>
                        <div class="mb-3">
                            <label for="synopsis">Synopsis</label>
                            <textarea class="form-control" placeholder="What is the comics story about..." id="synopsis" style="height: 200px" name="synopsis"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="cover" class="form-label">Cover</label>
                            <input type="text" class="form-control" id="cover" name="cover">
                        </div>
                        <button type="submit" class="btn btn-primary">Add Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
    </div>
</div>