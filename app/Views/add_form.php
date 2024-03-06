<div class="row" id="row_<?= $index; ?>">
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
        <button type="button" class="btn btn-danger remove_item_btn d-grid" onclick="deleteRow('<?= $index; ?>');">Remove</button>
    </div>
</div>