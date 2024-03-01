function modal(slug) {
    $.ajax({
        url: base_url + "comics/modal/",
        type: "GET",
        data: {slug: slug},
        success: function(response) {
            $("#viewLevelModal").modal("show");
            $("#levelContent").html(response);
        },
    })
}

function AddComics() {
    $.ajax({
        url: base_url + "comics/add/",
        type: "GET",
        success: function(response) {
            $("#viewLevelModal").modal("show");
            $("#levelContent").html(response);
        },
    })
}

function EditComics(slug) {
    $.ajax({
        url: base_url + "comics/edit/" + slug,
        type: "GET",
        success: function(response) {
            $("#viewLevelModal").modal("show");
            $("#levelContent").html(response);
        },
    })
}

// function DeleteComics(slug) {
//     $.ajax({
//         url: base_url + "comics/" + slug,
//         type: "GET",
//         success: function(response) {
//             $("#viewLevelModal").modal("show");
//             $("#levelContent").html(response);
//         },
//     })
// }

function DeleteComics(slug){
    Swal.fire({
        title: "This data will be permanently deleted. Are you sure ?",
        icon: 'error',
        showConfirmButton: true,
        showDenyButton: true,
    }).then( 
        function(result) {
            if(result.isConfirmed == true) {
                $.ajax({
                            url: base_url + "comics/DeleteComics/" + slug,
                            type: "GET",
                            // data: {
                            //     slug: slug
                            // },
                            success: function(response) {
                               Swal.fire('Success', 'Data Deleted', 'success').then(function () {
                                location.reload();
                               });
                               
                            },
                        })
            } else { 
                Swal.fire('Error!', 'Error deleting data', 'warning')
            }
        
        }
    )
}

