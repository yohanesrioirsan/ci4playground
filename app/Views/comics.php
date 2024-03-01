<?= $this->extend('layout/navbar'); ?>


<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <?php if (session()->getFlashdata('Message')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('Message'); ?>
                </div>
            <?php endif; ?>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Cover</th>
                        <th scope="col">Title</th>
                        <th scope="col" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($comic as $comicData) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td>
                                <img class="cover" src="/img/<?= $comicData['cover']; ?>" alt="cover">
                            </td>
                            <td><?= $comicData['title']; ?></td>
                            <td class="text-center">
                                <button type="button" onclick="modal('<?= $comicData['slug']; ?>')" class="btn btn-info">Detail</button>
                                <button type="button" onclick="EditComics('<?= $comicData['slug']; ?>')" class="btn btn-warning">Edit</button>
                                <button type="button" onclick="DeleteComics('<?= $comicData['slug']; ?>')" class="btn btn-danger">Delete</button>

                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal -->

<div class="modal fade" id="viewLevelModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document" id="levelContent">

    </div>
</div>


<?= $this->endSection(); ?>