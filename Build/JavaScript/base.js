//
// base.js
//

requirejs.config({
	baseUrl: '/JavaScript/libs',
	// @TODO @LIVE remove urlArgs on GoLive
	urlArgs: 'bust=' + (new Date()).getTime(),
	shim : {
		'bootstrap': {
			'deps': ['jquery']
		}
	},
	paths: {
		'PROJECT-NAMESPACE': '/JavaScript/Modules',
		'jquery': 'jquery.min',
		'bootstrap' : 'bootstrap.min'
	}
});

require(['jquery', 'bootstrap'], function($) {
	$('[data-toggle]').tooltip();
});