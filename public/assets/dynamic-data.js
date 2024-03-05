$(document).ready(function () {
  $(".add_item_btn").click(function (e) {
    e.preventDefault();

    $("#show_item").prepend(`
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
                                    <button class="btn btn-danger remove_item_btn d-grid">Remove</button>
                                </div>
                            </div>
        `);

    $(document).on('click', '.remove_item_btn', function(e) {
        e.preventDefault();

        let row_item = $(this).parent().parent();
        $(row_item).remove();
    });
  });

  $("#add_form").submit(function(e) { 
        e.preventDefault();

        $("#add_btn").val('Adding...');
        $.ajax({
            url: base_url + "testink",
            type: "POST",
            data: $(this).serialize(),
            success: function(response) { 
                console.log(response);
            }
        });
    })
});

// function submitData(){
    
//     // console.log("button clicked!");
//   }
