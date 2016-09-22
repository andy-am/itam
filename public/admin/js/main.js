app = {};
app.token = $('meta[name="csrf-token"]').attr('content');

$(document).ready(function() {
    $('#blogTable').DataTable({
            select: true
        });
} );


$('.hoverImg').hover(function(){
    var img = $(this).data('img');
    console.log(img);

});

$(document).on('click', '.hideForUser', function () {
    event.preventDefault();
    var $this = $(this);
    var id = $(this).data('id');
    var type = $(this).attr('data-type');
    $.ajax({
        method:'POST',
        url:'/administration/'+type+'/hide/' + id,
        data: {id:id, _token:app.token},
        success:function(result) {
            $this.attr('class','showForUser');
            $this.find('i').attr('class','fa fa-eye-slash');
            $this.find('span').attr('tittle','Hide for users');
            $this.attr('id',id);

            $('.bottom-left').notify({
                message: { text: result.message, type:'alert' },
                closeable: false,
                transition: 'slide',
                fadeOut: {
                    delay:5000
                }
            }).show();
        }

    });
});

$(document).on('click', '.showForUser', function () {
    event.preventDefault();
    var $this = $(this);
    var id = $(this).data('id');
    var type = $(this).attr('data-type');
    $.ajax({
        method:'POST',
        url:'/administration/'+type+'/show/' + id,
        data: {id:id, _token:app.token},
        success:function(result) {
            $this.attr('class','hideForUser');
            $this.find('i').attr('class','fa fa-eye');
            $this.find('span').attr('tittle','Show for users');
            $this.attr('id',id);

            $('.bottom-left').notify({
                message: { text: result.message },
                closeable: false,
                transition: 'slide',
                fadeOut: {
                    delay:5000
                }
            }).show();
        }

    });
});

