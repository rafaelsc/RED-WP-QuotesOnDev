(function($) {

    $('#new-quote-button').on('click', function(event) {
        event.preventDefault();
        console.log("asasa");

        $.ajax({
            method: 'GET',
            url: api_vars.url + 'wp/v2/posts?filter[orderby]=rand&filter[posts_per_page]=1',
            cache: false,
            success: function(data) {
                var quote = data[0].content.rendered;
                var author = data[0].title.rendered;

                $('.entry-content').html(quote);
                $('.entry-title-text').text(author);
            }
        });
    });

    $('#submit-post').on('submit', function(event) {
        event.preventDefault();

        var author = $('#author').val();
        var quote = $('#quote').val();
        var source = $('#source').val();
        var url = $('#url').val();

        var payload = {
            title: author,
            content: quote,
            _qod_quote_source: source,
            _qod_quote_source_url: url,
            status: 'publish'
        };

        $.ajax({
            method: 'POST',
            url: api_vars.url + 'wp/v2/posts',
            data: payload,
            beforeSend: function ( xhr ) {
                xhr.setRequestHeader( 'X-WP-Nonce', api_vars.nonce );
            },
            success : function(data) {
                    window.location.href = data.link;
            },
            fail : function() {
                alert( ' There was an error while adding your quote. ');
            }
        });
    });

})(jQuery);