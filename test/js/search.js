(function() {
	$(function() {
		$('#cheched-box').click(function(ev) {
			var ev = ev || window.event;
			var target = ev.target || ev.srcElement;

			var cont = target.parentNode.getElementsByTagName('span')[0].innerHTML;

			if ( target.nodeName.toLowerCase() == 'div' ) {

				for (var i = 0; i < $('.brand-attr .attr .a-key').length; i++) {
					if ( $('.brand-attr .attr .a-key')[i].innerHTML == cont ) {
						$($('.brand-attr .attr .a-key')[i].parentNode).show();
					}
				};

				this.removeChild( target.parentNode );

				if ( this.children.length == 0 ) {
					$(this.parentNode).hide();
				}
			}
		});

		$('#tabs-box .tabcon a').click(function() {

			if ( $('#condition-box').css('display') == 'none' ) {
				$('#condition-box').show();
			}
			var contNode = this.parentNode.parentNode.parentNode.parentNode;
			var titNode = getPrev( contNode );
			var tit = titNode.innerHTML;
			$($(contNode)[0].parentNode).hide();

			var oLi = document.createElement('li');
			oLi.innerHTML = '<a href="javascript:;"><span>'+ tit +'</span><strong>'+ this.innerHTML +'</strong><b>x</b></a><div class="mask"></div>';

			$('#cheched-box').append( oLi );
		});


	});
})();
function getPrev(o){

	if(!o.previousSibling)return null;

	return o.previousSibling.nodeType === 1 ? o.previousSibling : getPrev(o.previousSibling);

}