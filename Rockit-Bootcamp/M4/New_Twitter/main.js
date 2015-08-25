$(function() {

    /**********************************************
        State Management
    **********************************************/

    $(document).on('click', '.compose', function() {
        $(this).addClass('expand');
    });

    $('.tweets').on('click', '.tweet', function() {
        $(this).parent().toggleClass('expand');
    });

    /**********************************************
        Button Functionality
    **********************************************/

});