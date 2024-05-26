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
    // function showTab(tabIndex) {
    //     // Hide all tab contents
    //     document.querySelectorAll('.tab-content').forEach(function (tabContent) {
    //         tabContent.classList.add('hidden');
    //     });

    //     // Remove active class from all tab buttons
    //     document.querySelectorAll('.card-header a').forEach(function (tabButton) {
    //         tabButton.classList.remove('text-blue-600', 'border-blue-600', 'active');
    //     });

    //     // Show the selected tab content
    //     document.getElementById('tab-' + tabIndex + '-content').classList.remove('hidden');

    //     // Add active class to the selected tab button
    //     document.getElementById('btn-tab-' + tabIndex).classList.add('text-blue-600', 'border-blue-600', 'active');
    // }

    // function goBack() {
    //     window.history.back();
    // }
    // // Set default tab
    // showTab(1);
});
