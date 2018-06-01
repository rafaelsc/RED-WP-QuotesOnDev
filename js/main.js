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
                $('.entry-title').text(author);
            }
        });
    });

})(jQuery);