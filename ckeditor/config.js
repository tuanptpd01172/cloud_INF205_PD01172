/**
 * @license Copyright (c) 2003-2015, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
        config.filebrowserBrowseUrl = '/cloud_INF205_PD01172/ckfinder/ckfinder.html';

config.filebrowserImageBrowseUrl =    '/cloud_INF205_PD01172/ckfinder/ckfinder.html?type=Images';

config.filebrowserFlashBrowseUrl =    '/cloud_INF205_PD01172/ckfinder/ckfinder.html?type=Flash';

config.filebrowserUploadUrl =         '/cloud_INF205_PD01172/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files';

config.filebrowserImageUploadUrl =    '/cloud_INF205_PD01172/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images';

config.filebrowserFlashUploadUrl =    '/cloud_INF205_PD01172/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash';
};
