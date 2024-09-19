$(document).ready(function () {
    initSettingsButton()
    initCommitSettingsButton()
    initCancelSettingsButton()
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
    $('#playerList').val()
}

openAdditionalGameSettings = function () {
    $('#additionalGameSettings').prop('hidden', false)
}

closeAdditionalGameSettings = function () {
    $('#additionalGameSettings').prop('hidden', true)
}