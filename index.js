$(document).ready(function () {
    initSettingsButton()
    initCommitSettingsButton()
    initCancelSettingsButton()
    initAddNewPlayerButton()
})

initSettingsButton = function () {
    $('#settings').on('click', function () {
        openAdditionalGameSettings()
        $('#additionalGameSettings > input').each(function () {
            $(this).prop('prevVal', $(this).val())
        })
    })
}

initCommitSettingsButton = function () {
    $('#commitSettings').on('click', function () {
        closeAdditionalGameSettings()
        $('#additionalGameSettings > input').prop('prevVal', false)
    })
}

initCancelSettingsButton = function () {
    $('#cancelSettings').on('click', function () {
        closeAdditionalGameSettings()
        $('#additionalGameSettings > input').each(function () {
            $(this).val($(this).prop('prevVal'))
        })
    })
}

initAddNewPlayerButton = function () {
    $('#addNewPlayer').on('click', function () {
        let newPlayerNameInput = $('#newPlayerName')
        let newPlayerNameVal = newPlayerNameInput.val()
        if (newPlayerNameVal === "") {
            return
        }
        //TODO: ajax for player score
        $('#playerTable > tbody').append('<tr><td>' + newPlayerNameVal + '</td><td>Score: 110</td></tr>')
        newPlayerNameInput.val('')
    })
}

openAdditionalGameSettings = function () {
    $('#additionalGameSettings').addClass('grid')
}

closeAdditionalGameSettings = function () {
    $('#additionalGameSettings').removeClass('grid')
}