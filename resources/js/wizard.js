$(document).ready(function () {
    var btnFinish = $('<button></button>').text('Создать подключение' + ' ' + '+')
        .addClass('btn btn-primary btn-finish')
        .hide()
        .on('click', function () {
            alert('Подключение создано');
            $('.modal').modal('hide')
        });

    var btnCancel = $('<button></button>').text('Отмена')
        .addClass('btn btn-secondary')
        .on('click', function () {
            $('.modal').modal('hide')
        });

    // SmartWizard initialize
    $('#smartwizard').smartWizard({
        selected: 0,
        enableURLhash: false,
        autoAdjustHeight: false,
        theme: 'lidogenerator',
        lang: { // Language variables for button
            next: 'Следующий шаг',
            previous: 'Предыдущий шаг'
        },
        toolbarSettings: {
            toolbarExtraButtons: [btnFinish, btnCancel]
        }
    });

    $("#smartwizard").on("showStep", function (e, anchorObject, stepNumber, stepDirection) {
        console.log(anchorObject)
        if (anchorObject.hasClass('final')) {
            $('.btn-finish').show(); // show the button extra only in the last page
            $('button.sw-btn-next').hide()
        } else {
            $('.btn-finish').hide();
            $('.sw-btn-next').show()
        }
    });
});
