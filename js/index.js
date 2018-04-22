$(function() {
    $('select#teams').formSelect();

    $('input#createTeam').on('click', function () {
        // récupère l'état du checkbox
        let state = $(this).is(':checked');

        // désactive le dropdown équipes selon l'état
        $('select#teams').prop('disabled', state);

        // Affiche la div nouvelle équipe selon l'état
        $('div#teamName').toggle();
        // rend disponible et obligatoire le champs teamName
        $('input[name=teamName]')
            .prop('disabled', !state)
            .prop('required', state);
    });
});