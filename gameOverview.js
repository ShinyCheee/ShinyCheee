$(document).ready(function () {

})

initStartRoundButton = function () {
    let startRoundButton = $('startRound')

    startRoundButton.hover(
        function () {
            $('#gameOverviewOverlay').addClass('hover')
        },
        function () {
            $('#gameOverviewOverlay').removeClass('hover')
        })
}

initEditGameTableButton = function () {
    let editGameTableButton = $('editGameTable')

    editGameTableButton.on('click', function () {
        $('gameTable').find('input').prop('readonly', false)
    })
}

loading = function () {
    $('#gameOverviewOverlay').addClass('loading')
}

loadingDone = function () {
    $('#gameOverviewOverlay').removeClass('loading')
}