$(document).

    ready(function(e) {
            //$('input:submit').button();
            $('input:button').button();

            $('#accordion').accordion({
                autoHeight: false,
                navigation: true,
                collapsible: false
            });
});