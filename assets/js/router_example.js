

$(function() {
	Router = new Router;
	Backbone.history.start({
		pushState: true,
		silent: false
	});
});

var current_uri = 'none';
var Router = Backbone.Router.extend({
    initialize: function(){
        var self = this;
        $(".internal").on('click', function(e){
            e.preventDefault();
            e.stopPropagation();
            var location = $(this).attr('href');
            self.navigate(location, {trigger: true});
        });
    },
    routes: {
        '*path': 'root',
    },
    root: function() {
        var uri = Backbone.history.fragment;
        if(uri != "" && uri != current_uri) {
            current_uri = uri;
            var fragments = uri.split("/");
            var theme_uri = fragments[0];
            var object_uri = fragments[1];
            setPage(theme_uri, object_uri);
        }
    },
});

function setPage(theme_uri, object_uri) {
	alert(theme_uri);
	alert(object_uri);
}