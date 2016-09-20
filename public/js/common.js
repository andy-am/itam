app = {};
app.token = $('meta[name="csrf-token"]').attr('content');
matches =[];

$(function($) {
    $('.search-form').typeahead(null, {
        name: 'countries',
        limit: 10,
        minLength:3,
        hint: true,
        highlight: true,
        templates: {
            header: '<h4 class="dropdown">Restaurants</h4>'
        },
        source: function (query, process) {
            $.ajax({
                url: '/search',
                type: 'GET',
                dataType: 'JSON',
                data: {query: query, _token:app.token},
                success: function(data) {

                }

            });
        }
    });

   /* var engine = new Bloodhound({
        remote: '/search',
        // '...' = displayKey: '...'
        datumTokenizer: Bloodhound.tokenizers.whitespace('username'),
        queryTokenizer: Bloodhound.tokenizers.whitespace
    });

    engine.initialize();
    $(".search-form").typeahead({
        hint: true,
        highlight: true,
        minLength: 2
    }, {
        source: engine.ttAdapter(),
        displayKey: 'username',
        templates: {
            empty: [
                '<div class="empty-message">unable to find any</div>'
            ]
        }
    });*/


});