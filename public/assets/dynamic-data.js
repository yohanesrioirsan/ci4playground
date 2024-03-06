$(document).ready(function () {
  $(".add_item_btn").click(function (e) {
    e.preventDefault();


    $(document).on('click', '.remove_item_btn', function(e) {
        e.preventDefault();

        Swal.fire({
            title: "Updating Data",
            text: "This data will be change and updated. Are you sure?",
            icon: "warning",
            showConfirmButton: true,
            showDenyButton: true,
        }).then(function (result) {
            if (result.isConfirmed) {
                $(this).parent().parent().remove();
            } else { 
                Swal.fire("Oops", "I think you've change your mind ;)", "warning");
            }
        });
    });
  });

  $("#add_form").submit(function(e) { 
        e.preventDefault();

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

// Data Add & Delete Handler

let jumlah_row = 0;

function addData(){
    $.ajax({
        url: base_url + 'dynamic-data/tambah',
        type: 'GET',
        data: {
            index: jumlah_row
        },
        success: function(response) {
            $("#show_item").prepend(response);
            jumlah_row++;
        }

    })
}

function deleteRow(index){
    Swal.fire({
        title: "Updating Data",
        text: "This data will be changed and updated. Are you sure?",
        icon: "warning",
        showConfirmButton: true,
        showDenyButton: true,
    }).then(function (result) {
        if (result.isConfirmed) {
            $("#row_" + index).remove();
        } else { 
            Swal.fire("Oops", "I think you've changed your mind ;)", "warning");
        }
    });
}
