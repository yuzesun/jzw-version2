
$(document).ready(function() {
    $('#zipCode').keyup(function(e) {
        var zipCode = $(this).val();

        if (zipCode.length === 5 && $.isNumeric(zipCode)) {
            var requestURL = 'https://ziptasticapi.com/' + zipCode + '?callback=?';
            $.getJSON(requestURL, null, function(data){
                console.log(data);

                if (data.city) $('#city').val(data.city);
                if (data.state) $('#state').val(data.state);
            });
        }
        //
        // var requestURL = 'https://ziptasticapi.com/' + zipCode + '?callback=?';
        // $.getJSON(requestURL, null, function(data){
        //     console.log(data);
        //
        //     if (data.city) $('#city').val(data.city);
        //     if (data.state) $('#state').val(data.state);
        // })
    });
});
