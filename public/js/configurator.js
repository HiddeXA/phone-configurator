$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

// Initialize the carousel
const carousel = $('.carousel')

$('.next').on('click', function () {
    if (parseFloat($("#maxPrice").val()) <= parseFloat($("#minPrice").val())) {
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

$('.screenRange').on('input', function () {
    if (this.id == "screenMaxSlider") {
        $("#maxScreen").val($(this).val());
        return;
    }
    $("#minScreen").val($(this).val());
});

$(".calculate").on('click', function () {

    $.ajax({
        type: "post",
        url: "/calculate",
        data: {
            "minPrice": $("#minPrice").val(),
            "maxPrice": $("#maxPrice").val(),
            "minScreen": $("#minScreen").val(),
            "maxScreen": $("#maxScreen").val(),
            "operatingSystem": $('input[name="operatingSystem"]:checked').val(),
            "camera": $('input[name="camera"]:checked').val(),
        },
        success: function (response) {
            if (response.length == 0) {
                Swal.fire(
                    'Er is iets mis gegaan!',
                    'Er zijn geen telefoons gevonden die aan jouw eisen voldoen!',
                    'error'
                  )
                return;
            }
                
            $.each( response, function( key, phone ) {
                console.log(phone);
                $("#top-phones").append(` <tr>
                <th scope="row">` + key + `</th>
                <td>` + phone.brand + `</td>
                <td>` + phone.model + `</td>
                <td>` + phone.operating_system + `</td>
                <td>€  ` + phone.price + `</td>
                <td>` + phone.storage + ` GB</td>
                <td>` + phone.screen + ` inch</td>
              </tr>`);
            });

            carousel.carousel('next');
        }
    });
});


});