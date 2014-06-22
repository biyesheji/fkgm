window.onload=function() {
	var oContWrap=document.getElementById('cont-wrap');
	var oContTit=oContWrap.getElementsByTagName('h3')[0];
	var oCont=oContWrap.getElementsByTagName('ul')[0];
	var oContText=document.getElementById('cont-text');
	var oBtnWrap=document.getElementById('btn');
	var aBtn=oBtnWrap.getElementsByTagName('a');
	var oImg=document.getElementById('img');

	var nSearch=parseInt( window.location.search.substring(1) ) || 0;	//获取地址栏的search值
	var nHash=parseInt( window.location.hash.substring(1) ) || 0;		//获取地址栏的Hash值

	var arr=[societyCont,schoolCont]	//用于调用对应的数据

	createCont(arr[nSearch],nHash);		//创建默认的页面内容

	for (var i = 0; i < aBtn.length; i++) {
		aBtn[i].className='';
	};
	aBtn[nSearch].className='active';	//更新所选中的选项卡状态
	oImg.src= 'images/' + (nSearch + 1)+'.gif';			//更换图片

	//给左边选项卡添加点击事件，页面跳转
	for (var i = 0; i < aBtn.length; i++) {
		aBtn[i].index=i;
		aBtn[i].onclick=function() {
			window.location='about_news.html'+'?'+this.index;
		}
	};

	//根据对应的数据创建相应的标签及其内容
	function createCont(obj,num) {
		console.log(obj)
		oContTit.innerHTML=obj[num].job;

		for (var i = 0; i < obj[num].message.length; i++) {
			var oLi=document.createElement('li');
			var oSpan1=document.createElement('span');
			var oSpan2=document.createElement('span');

			oSpan1.innerHTML=obj[num].message[i][0];
			oSpan2.innerHTML=obj[num].message[i][1];

			oLi.appendChild(oSpan1);
			oLi.appendChild(oSpan2);

			oCont.appendChild(oLi);
		};

		oContText.innerHTML='<p>岗位要求：</p>';

		for (var i = 0; i < obj[num].require.length; i++) {
			var oP=document.createElement('p');
			oP.innerHTML=(i+1)+'.'+obj[num].require[i]+'；';

			oContText.appendChild(oP);
		};
	}
}