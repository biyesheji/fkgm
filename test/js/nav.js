jQuery(document).ready(function(){
	//Menu
	jQuery("ul.sf-menu").supersubs({
	minWidth		: 12,		// requires em unit.
	maxWidth		: 27,		// requires em unit.
	extraWidth		: 3	// extra width can ensure lines don't sometimes turn over due to slight browser differences in how they round-off values
						   // due to slight rounding differences and font-family
	}).superfish();  // call supersubs first, then superfish, so that subs are
					 // not display:none when measuring. Call before initialising
					 // containing tabs for same reason.
	jQuery(document).ready(function() {
		jQuery(".box_skitter_large").skitter({
			animation: "random",
			interval: 3000,
			numbers: false,
			numbers_align: "right",
 			hideTools: true,
			controls: false,
			focus: false,
			focus_position: true,
			width_label:'340px',
			enable_navigation_keys: true,
 			progressbar: false
		});
	});
});