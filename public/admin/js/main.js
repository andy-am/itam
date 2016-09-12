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

$(document).on('click', '.hideBlog', function () {
    event.preventDefault();
    var $this = $(this);
    var id = $(this).data('id');
    $.ajax({
        method:'POST',
        url:'/administration/blog/hide/' + id,
        data: {id:id, _token:app.token},
        success:function(result) {
            $this.attr('class','showBlog');
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

$(document).on('click', '.showBlog', function () {
    event.preventDefault();
    var $this = $(this);
    var id = $(this).data('id');
    $.ajax({
        method:'POST',
        url:'/administration/blog/show/' + id,
        data: {id:id, _token:app.token},
        success:function(result) {
            $this.attr('class','hideBlog');
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

