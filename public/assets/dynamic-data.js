$(document).ready(function () {
  $(".add_item_btn").click(function (e) {
    e.preventDefault();

    // $(document).on('click', '.remove_item_btn', function(e) {
    //     e.preventDefault();

    //     Swal.fire({
    //         title: "Delete Rows",
    //         text: "This whole row will be deleted. Are you sure?",
    //         icon: "warning",
    //         showConfirmButton: true,
    //         showDenyButton: true,
    //     }).then(function (result) {
    //         if (result.isConfirmed) {
    //             $(this).parent().parent().remove();
    //         } else {
    //             Swal.fire("Oops", "I think you've change your mind ;)", "warning");
    //         }
    //     });
    // });
  });

  //   $("#add_btn").submit(function(e) {
  //

  //     })
});

// Data Add & Delete Handler

let jumlah_row = 0;

function addData() {
  $.ajax({
    url: base_url + "dynamic-data/tambah",
    type: "GET",
    data: {
      index: jumlah_row,
    },
    success: function (response) {
      $("#show_item").prepend(response);
      jumlah_row++;
    },
  });
}

function deleteRow(index) {
  Swal.fire({
    title: "Delete Row",
    text: "This whole row will be deleted. Are you sure?",
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

function confirmAddData(event) {
  event.preventDefault();
  Swal.fire({
    title: "Adding Data",
    text: "Please double check your data. Continue?",
    icon: "warning",
    showConfirmButton: true,
    showDenyButton: true,
  }).then(function (result) {
    if (result.isConfirmed) {
        let form = $("#addDynamicData");
      let formData = form.serialize();
      $.ajax({
        url: base_url + "testink",
        type: "POST",
        data: formData,
        success: function () {
          Swal.fire("Success", "Data Added!", "success").then(function () {
            location.reload();
          });
        },
      });
    } else {
      Swal.fire("Oops", "I think you've change your mind ;)", "warning");
    }
  });
}
