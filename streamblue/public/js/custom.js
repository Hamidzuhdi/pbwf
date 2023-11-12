$(document).ready(function () {
    $(".plus").click(function (e) {
        e.preventDefault();
        var card = $(this).closest(".card-body");
        var harga = card.find("#harga").val();
        var durasi = card.find("#durasi").val();

        var tambah = parseInt(durasi) + 1;
        card.find("#durasi").val(tambah);

        var subtotal = parseInt(harga) * parseInt(tambah);
        card.find(".total").val(subtotal);

        if (durasi > 0) {
            card.find(".minus").prop("disabled", false);
        }
    });

    $(".minus").click(function (e) {
        e.preventDefault();
        var card = $(this).closest(".card-body");
        var harga = card.find("#harga").val();
        var durasi = card.find("#durasi").val();

        var tambah = parseInt(durasi) - 1;
        card.find("#durasi").val(tambah);

        var subtotal = parseInt(harga) * parseInt(tambah);
        card.find(".total").val(subtotal);

        if (durasi <= 1) {
            card.find(".minus").prop("disabled", true);
        }
    });

    $(".rowa").each(function () {
        var card = $(this);
        var harga = card.find("#harga").val();
        var durasi = card.find("#durasi").val();
        var total_harga = parseInt(harga) * parseInt(durasi);
        card.find("#total_harga").val(total_harga);
    });
});

$(document).ready(function(){
    $("#total_bayar").on('input', function(){
        var total = $("#total_harga").val();
        var total_bayar = $("#total_bayar").val();
        var hasil = total_bayar - total;

        if (total_bayar < total || isNaN(hasil)) {
            $("#dikembalikan").val(0);
        } else {
            $("#dikembalikan").val(hasil);
        }
    });
});


// $(document).ready(function () {
//     $(".eksp").change(function (e) {
//         e.preventDefault();
//         var eksp = $(".eksp").val();

//         if (eksp === "jnt") {
//             var ongkir = $(".ongkir").val(9000);
//         } else if (eksp === "jne") {
//             var ongkir = $(".ongkir").val(10000);
//         } else if (eksp === "sicepat") {
//             var ongkir = $(".ongkir").val(8000);
//         } else {
//             var ongkir = $(".ongkir").val(9500);
//         }

//         $(".pembayaran").each(function () {
//             var card = $(this);
//             var totalBelanja = card.find(".totalBelanja").val();
//             var totalPpn = parseInt(totalBelanja) * 0.11;
//             var ppn = card.find(".ppn").val(totalPpn);
//             var disc = card.find(".discount").val();
//             var totalDisc = parseInt(totalBelanja) * parseFloat(disc);
//             var ongkir = card.find(".ongkir").val();

//             var subtotal = parseInt(totalBelanja) + parseInt(totalPpn);
//             var subtotal2 = parseInt(subtotal) + parseInt(ongkir);
//             console.log(subtotal2);
//             console.log(ongkir);
//             card.find("#dibayarkan").val(subtotal2);
//             // card.find('.ppn').val(ppn);
//         });
//     });
// });
