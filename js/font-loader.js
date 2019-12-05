
	WebFontConfig = {
		// other options and settings
		timeout: 2000,
		active: function() {
			sessionStorage.fonts = true;
		}
	};
	WebFont.load({
		google: {
			families: ['Open+Sans:300,400,400i,600,700', 'Material+Icons']
		}
	});
