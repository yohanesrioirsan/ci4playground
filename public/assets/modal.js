function modal(slug) {
  $.ajax({
    url: base_url + "comics/modal/",
    type: "GET",
    data: { slug: slug },
    success: function (response) {
      $("#viewLevelModal").modal("show");
      $("#levelContent").html(response);
    },
  });
}

function AddComics() {
  $.ajax({
    url: base_url + "comics/add/",
    type: "GET",
    success: function (response) {
      $("#viewLevelModal").modal("show");
      $("#levelContent").html(response);
    },
  });
}

function EditComics(slug) {
  $.ajax({
    url: base_url + "comics/edit/" + slug,
    type: "GET",
    success: function (response) {
      $("#viewLevelModal").modal("show");
      $("#levelContent").html(response);
    },
  });
}

function DeleteComics(slug) {
  Swal.fire({
    title: "Deleting Data",
    text: "This data will be deleted for permanently. Are you sure?",
    icon: "warning",
    showConfirmButton: true,
    showDenyButton: true,
  }).then(function (result) {
    if (result.isConfirmed == true) {
      $.ajax({
        url: base_url + "comics/DeleteComics/" + slug,
        type: "GET",
        success: function (response) {
          Swal.fire("Success", "Data Deleted", "success").then(function () {
            location.reload();
          });
        },
      });
    } else {
      Swal.fire("Oops", "I think you've change your mind ;)", "warning");
    }
  });
}

function EditComicAlert(id, event) {
  event.preventDefault();
  Swal.fire({
    title: "Updating Data",
    text: "This data will be change and updated. Are you sure?",
    icon: "warning",
    showConfirmButton: true,
    showDenyButton: true,
  }).then(function (result) {
    if (result.isConfirmed) {
      let form = $("#myForm");
      let formData = form.serialize();
      $.ajax({
        url: base_url + "comics/update/" + id,
        type: "POST",
        data: formData,
        success: function (response) {
          Swal.fire("Success", "Data Changed", "success").then(function () {
            location.reload();
          });
        },
      });
    } else {
      Swal.fire("Oops", "I think you've change your mind ;)", "warning");
    }
  });
}
