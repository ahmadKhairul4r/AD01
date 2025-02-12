// $(document).ready(function () {
//     $('input').keyup(function () {
//         var nama = $(this).val()
//         $().text(nama)
//     });
// });
$(document).ready(function () {
    $('#search').keyup(function () {
        var search = $(this).val();
        console.log('Search value:', search); // Tambahkan ini untuk memeriksa nilai search

        $.ajax({
            url: "{{ route('data-peserta') }}",
            type: "GET",
            data: { search: search },
            success: function (data) {
                $('tbody').html(data);
            }
        });
    });
});

