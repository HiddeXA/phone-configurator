$(document).ready(function () {

// Initialize the carousel
const carousel = $('.carousel')

$('.next').on('click', function () {
    if (parseFloat($(maxPrice).val()) <= parseFloat($(minPrice).val())) {
        Swal.fire(
            'Er is iets mis gegaan!',
            'De maximale prijs moet hoger zijn dan de minimale prijs!',
            'error'
          )
        return;
    }
        
    carousel.carousel('next');
});

$('.priceRange').on('input', function () {
    if (this.id == "priceMaxSlider") {
        $("#maxPrice").val($(this).val());
        return;
    }
    $("#minPrice").val($(this).val());
});


});