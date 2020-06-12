$(document).ready(function () {
    loadCards();


    function loadCards() {
        let url = $();

        $.ajax({
            url: url,
            method: "get",
            success: function (response) {
                let cards = response.data;

                cards.forEach(function (card) {
                    $("#card-list").append('<div class="card m-5" style="width:170px; height:15rem">' +
                        '<img class="card-img-top w-auto" src='+card.url+' style="height: 8rem;" alt="Card image">' +
                        '<div class="card-body">' +
                        '<h6 class="card-title" style="font-family: Century Gothic;">'+card.title+'</h6>' +
                        '<center><a href="articulo.php" class="btn btn-danger btn-sm stretched-link ">VER</a></center>' +
                        '</div>' +
                        '</div>');
                }
                );
            }
        });

    }
});