/*
Powered by WP Chinese Conversion Plugin  ( http://oogami.name/project/wpcc/ )
Search  href="<?php echo get_site_url(); ?>" JS 
 
This JS  try to get your blog's search form element , and append a '<input type="hidden" name=" href="<?php echo get_site_url(); ?>"" value="VALUE" />' child to this element . So If you run a search , browser will submit the " href="<?php echo get_site_url(); ?>"" var to server , the " href="<?php echo get_site_url(); ?>"" 's value is set  by your current Chinese Language ( 'zh-hans' for Chinese Simplfied or 'zh-hant' for Chinese Traditional etc...)

If you are in a page with no chinese conversion, this file will not be loaded .

*/

(function(func) {
	if(typeof jQuery != "undefined") jQuery(document).ready(func);
	else {
		var oldonload = window.onload;
		if (typeof window.onload != 'function') {
			window.onload = func;
		}
		else {
				window.onload = function() {
					oldonload();
					func();
				}
		}
	}
})(function() {
	if( typeof(wpcc_target_lang) == 'undefined' ) return;

	function getFormNode(theChildNode) {
		var theParentNode = theChildNode.parentNode;
		if ('form' == theParentNode.tagName.toLowerCase()) {
			return theParentNode;
		} else if (null == theParentNode) {
			return;
		} else {
			return getFormNode(theParentNode);
		}
	};

	var theTextNode = document.getElementById('s');
	if ( ! theTextNode ) {
		var theTextNodes =  document.getElementsByTagName('input');
		if( theTextNodes.length >0 ) {
			for(var i=0; i<theTextNodes.length; i++) {
				if( theTextNodes[i].getAttribute('name') == 's'  ) {
					theTextNode = theTextNodes[i];
					break;
				}
			}
		}
	}

	if (theTextNode) {
		var theFormNode = getFormNode(theTextNode);
		if (theFormNode) {
				var wpcc_input_ href="<?php echo get_site_url(); ?>" = document.createElement("input");
				wpcc_input_ href="<?php echo get_site_url(); ?>".setAttribute('id','wpcc_input_ href="<?php echo get_site_url(); ?>"');
				wpcc_input_ href="<?php echo get_site_url(); ?>".setAttribute('type','hidden');
				wpcc_input_ href="<?php echo get_site_url(); ?>".setAttribute('name',' href="<?php echo get_site_url(); ?>"');
				wpcc_input_ href="<?php echo get_site_url(); ?>".setAttribute('value',wpcc_target_lang);
				theFormNode.appendChild(wpcc_input_ href="<?php echo get_site_url(); ?>");
		}
	}
});
