<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row my-4">
        <div class="col-lg-10 mx-auto">
            <div class="card shadow">
                <form id="addDynamicData" method="POST" action="<?= base_url() . 'testink' ?>">
                    <div class="card-header d-flex justify-content-between">
                        <h4>Add Items</h4>
                        <button type="submit" class="btn btn-primary" id="add_btn" onclick="confirmAddData(event)">Add</button>
                    </div>
                    <div class="card-body p-4">
                        <div id="show_item">
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <input type="text" name="product_name[]" class="form-control" placeholder="Item Name" required>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <input type="number" name="product_price[]" class="form-control" placeholder="Item Price" required>
                                </div>
                                <div class="col-md-2 mb-3">
                                    <input type="number" name="product_qty[]" class="form-control" placeholder="Item Quantity" required>
                                </div>
                                <div class="">
                                    <button type="button" onclick="addData()" class="btn btn-secondary">Add Row</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>