function AddModal() {
    $.ajax({
        url: "modal",
        type: "GET",
        success: function(response) {
            $("#viewLevelModal").modal("show");
            $("#levelContent").html(response);
        },
    })
}