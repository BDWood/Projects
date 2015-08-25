$(function() {

    /***************************************************************************************************
        State management
    ***************************************************************************************************/

    $(document).on('click', '.compose', function() {
        //console.log("testing");
        $(this).addClass('expand');
    }); 

    $('.tweets').on('click', '.tweet', function() {
        
        $(this).parent().toggleClass('expand');

    });

    /***************************************************************************************************
        User Class
    ***************************************************************************************************/

    var User = {
        handle: '@bradwestfall',
        img: 'images/brad.png'
    }

    /***************************************************************************************************
        Render Functionality
    ***************************************************************************************************/

    var renderCompose = function() {
        var source = $('#template-compose').html();
        var template = Handlebars.compile(source);
        return template();
    }

    var renderTweet = function(User, message) {
        var source = $('#template-tweet').html();
        var template = Handlebars.compile(source);

        return template({
            handle: User.handle,
            img: User.img,
            message: message
        });
    }

    var renderThread = function(User, message) {
        var source = $('#template-thread').html();
        var template = Handlebars.compile(source);
        var tweet = renderTweet(User, message)
        return template({
            tweet: tweet,
            compose: renderCompose()
        });
    }

    var countDown = function() {
        $('.count').on()

    }
    
    /***********************************************************************************************
        Submit Event Handling
    ***********************************************************************************************/
    
    $(document).on('submit', 'form', function(event) {
        event.preventDefault();

        var textarea = $(this).find('textarea');
        var message = textarea.val();
       

        /*******************************************************************************************
            Button If Statements.
        *******************************************************************************************/
            
        if ($(this).parents('.tweets').length) {
            var domElement = renderTweet(User, message);
            $(this).parents('.replies').append(domElement);       
        } else {
            var domElement = renderThread(User, message);
            $('.tweets').append(domElement);
        }
       

        textarea.val('');
        

    });

/***************************************************************************************************
    First Debugging of render functions
***************************************************************************************************/

    // renderThread('Bryan', "message of some sort");
    // renderCompose();
    // renderTweet('person', 'another message');

});