jQuery(document).ready(function () {
    // Add the "Hello Button" to the button group in the detail view
    var helloButton = '<button id="hello-button" class="btn btn-primary">Hello Button</button>';
    jQuery('.detailViewButtoncontainer .btn-group:last-child').append(helloButton);

    // Bind the click event to the "Hello Button"
    jQuery('#hello-button').on('click', function () {
        alert('Hello');
    });
});
