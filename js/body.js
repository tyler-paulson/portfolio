// @codekit-prepend "jquery-2.1.1.min.js", "_plugins.js"

var push_state = Boolean(function() {
	var ua = navigator.userAgent;
	if (ua.indexOf('Android 2.') !== -1 &&
		ua.indexOf('Mobile Safari') !== -1 &&
		ua.indexOf('Chrome') === -1) {
	  return false;
	}
	return (window.history && 'pushState' in window.history);
});

$(document).on('ready', function() {
	
	$('#resume').on('click', function() {
		ga('send', 'event', 'Downloads', 'Download', 'Resume', {
			'hitCallback': function () { document.location = 'https://github.com/tyler-paulson/resume'; }
		});
		return false;
	});
	
	if(splash) {
		
		$('.nav a').on('click', function() {
		
			var locator = $(this).attr('href').split('/');
			var title = $(this).text();
			
			var id = locator[locator.length -1];
			var url = '/project/'+id;
		
			$('html,body').animate({
				scrollTop: $('#'+id).offset().top
			}, 500, 'swing', function() {
				if(push_state) {
					window.history.pushState(null, title, url);
					ga('send', 'pageview', url);
				}
			});
				
			return false;
		
		});
		
		$('.project').last().waypoint(function() {
			ga('send', 'event', 'Homepage', 'Scroll', 'Last Project');
		}, { triggerOnce: true });
		
	}
	
});