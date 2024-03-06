<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row my-4">
        <div class="col-lg-10 mx-auto">
            <div class="card shadow">
                <div class="card-header">
                    <h4>Add Items</h4>
                </div>
                <div class="card-body p-4">
                    <form id="addDynamicData" method="POST" action="<?= base_url() . 'testink' ?>">
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
                                <div class="col-md-2 mb-3">
                                    <button class="btn btn-success add_item_btn d-grid">Add More</button>
                                </div>
                            </div>
                        </div>
                        <div>
                            <!-- <input type="submit" value="Add" class="btn btn-primary w-25" id="add_btn"> -->
                            <button type="submit" class="btn btn-primary" id="add_btn">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>