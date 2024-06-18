$(document).ready(function() {
    $('#search-button').on('click', function() {
        var query = $('#search-input').val();
        $.ajax({
            url: 'search.php',
            type: 'GET',
            data: { query: query },
            success: function(data) {
                var results = JSON.parse(data);
                var resultsHtml = '';
                if (results.length > 0) {
                    resultsHtml = '<ul>';
                    results.forEach(function(result) {
                        resultsHtml += '<li><a href="bestemming.php?naam=' + encodeURIComponent(result) + '">' + result + '</a></li>';
                    });
                    resultsHtml += '</ul>';
                } else {
                    resultsHtml = '<p>Geen resultaten gevonden</p>';
                }
                $('#search-results').html(resultsHtml).show();
            }
        });
    });

    $(document).on('click', function(event) {
        if (!$(event.target).closest('.search-container').length) {
            $('#search-results').hide();
        }
    });

    $('#search-input').on('input', function() {
        if ($(this).val().length === 0) {
            $('#search-results').hide();
        }
    });
});
