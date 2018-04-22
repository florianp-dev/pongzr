$(function () {
    $('button#generateToken').on('click', function (e) {
        e.preventDefault();

        let randToken = Math.random().toString(36).substring(2, 10) + Math.random().toString(36).substring(2, 10);
        $('input#token').focus();
        $('input#token').val(randToken);
    });
});