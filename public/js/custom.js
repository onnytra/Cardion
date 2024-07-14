$(document).ready(function() {
    $('#cabang').change(function() {
        var cabangId = $(this).val();
        // Clear the existing options in the rayon select
        $('#rayon').empty();
        $('#rayon').append('<option class="font-medium text-sm" value="#">...</option>');

        if (cabangId !== "#") {
            // Replace this with an AJAX call to fetch rayons based on cabangId
            $.ajax({
                url: '/get-rayons', // Endpoint to fetch rayons
                type: 'GET',
                data: { id_cabang: cabangId },
                success: function(response) {
                    // Assuming response is a list of rayons
                    response.forEach(function(rayon) {
                        $('#rayon').append('<option class="font-medium text-sm" value="' + rayon.id_rayon + '">' + rayon.rayon + '</option>');
                    });
                },
                error: function(xhr) {
                    console.error('Error fetching rayons:', xhr);
                }
            });
        }
    });
});