/*$('#delete-entity').on('shown.bs.modal', function (e) {
    e.preventDefault() // stops modal from being shown

    var type = $(this).find('delete-entity-button').;
});*/

$(document).ready(function(){

    $(".call-delete-entity-modal").click(function(){
        var id = $(this).attr('data-id');
        var type = $(this).attr('data-type');
        $("#delete-entity-modal").modal('show');
    });

    $('#delete-entity-modal').on('.delete-entity-button', function (e) {

    });
});
