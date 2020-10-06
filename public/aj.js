function checkZip(zipCode) {
    $.ajax({
        type: 'POST',
        data: {zipCode: zipCode},
        cache: false,
        success: function (data) {
            window.console.log('in the success area');
        }
    })
}