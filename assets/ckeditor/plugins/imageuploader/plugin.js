// Copyright (c) 2015, Fujana Solutions - Moritz Maleck. All rights reserved.
// For licensing, see LICENSE.md

var current_url = location.href;

if(current_url.indexOf('softester') != -1) {
	var fileBrowserUrl = 'http://softester.com/test/lottery-prediction/assets/ckeditor/plugins/imageuploader/imgbrowser.php';
} else if (current_url.indexOf('lottopredictz') != -1) {
	var fileBrowserUrl = 'https://lottopredictz.com/assets/ckeditor/plugins/imageuploader/imgbrowser.php';
} else {
	var fileBrowserUrl = 'http://localhost/lottery-prediction/assets/ckeditor/plugins/imageuploader/imgbrowser.php';
}

CKEDITOR.plugins.add( 'imageuploader', {
    init: function( editor ) {
        editor.config.filebrowserBrowseUrl = fileBrowserUrl;
    }
});
