window.onload=function(){
	var oContList=document.getElementById('cont');
	var oBtnWrap=document.getElementById('btn');
	var aBtn=oBtnWrap.getElementsByTagName('a');
	var oImg=document.getElementById('img');
	var oPage=document.getElementById('page');
	var aPageNum=oPage.getElementsByTagName('a');

	var aJob=null;		//便于获取页面（右边信息）所有className为jod的链接。
	var aMore=null;		//便于获取页面（右边信息）所有className为more的链接。
	var n=0;			//存放右侧当前显示页所对应的页码

	var aData=[societyList,schoolList];		//用于调用对应的数据

	var nSearch=window.location.search.substring(1) || 0;	//获取地址栏的search值

	//更新左边选项卡状态
	for (var i = 0; i < aBtn.length; i++) {
		aBtn[i].className='';
	};
	aBtn[nSearch].className='active';

	createList(0,aData[nSearch]);	//创建默认内容

	oImg.src='/images/' + (parseInt(nSearch)+1)+'.gif';	//创建默认图片

	//当点击左边选项卡的时候，更新状态，并同步在右边生成对应的内容
	for (var i = 0; i < aBtn.length; i++) {
		aBtn[i].index=i;
		aBtn[i].onclick=function() {
			for (var i = 0; i < aBtn.length; i++) {
				aBtn[i].className='';
			};

			this.className='active';		//更新选项卡状态
			oImg.src='images/' + (this.index+1)+'.gif';	//更新图片

			createList(0,aData[this.index]);	//更新右边的信息内容（重新生成）

			createPage();	//更新页面底部的页码
			TabPage();		//重新给页码添加点击事件（因为有可能是后期又生成一边）
		}
	};

	//创造右边的招聘信息标签
	function createList(num,obj) {
		oContList.innerHTML='';

		var num2= (num+1)*10<=obj.length?(num+1)*10:obj.length;		//用于页码判断

		for (var i = num*10; i < num2; i++) {
			var aContLi=document.createElement('li');
			var aContLiTit=document.createElement('h3');
			var aContLiP=document.createElement('p');

			aContLiTit.innerHTML='<a class="job" href="javascript:;">★ 职位需求：'+obj[i].job+'</a><span>需求人数：'+obj[i].num+'</span><span>'+obj[i].times+'</span>';
			aContLiP.innerHTML='岗位要求：';

			for (var j = 0; j < obj[i].require.length; j++) {
				aContLiP.innerHTML+=(j+1)+')'+obj[i].require[j]+'；';
			};

			aContLiP.innerHTML+='......<a class="more" id="'+ obj[i].id +'" href="javascript:;">[查看详情]</a>';

			aContLi.appendChild(aContLiTit);
			aContLi.appendChild(aContLiP);

			oContList.appendChild(aContLi);
		};

		clickA();	//给创建出来的可跳转链接绑定事件
	}

	//给所有的可跳转链接添加点击事件
	function clickA() {
		aJob=getByClass('job');
		aMore=getByClass('more');

		for (var i = 0; i <aJob.length; i++) {
			aMore[i].index=aJob[i].index=i;
			aMore[i].onclick=aJob[i].onclick=function() {
				window.location='/job/detail/'+this.id;	//根据点击的元素的index跳转到指定的对应的页面
			}
		};
	}

	//获取当前显示的是社会招聘还是校园招聘
	function getSearch() {
		for (var i = 0; i < aBtn.length; i++) {
			if ( aBtn[i].className=='active' ) return aBtn[i].index;
		};
	}

	//通过className获取元素
	function getByClass(sClass,parent){

		var aEles = (parent||document.body).getElementsByTagName('*');
		var arr = [];

		for(var i=0; i<aEles.length; i++){

			var aClass = aEles[i].className.split(' ');

			for(var j=0; j<aClass.length; j++){

				if(aClass[j] === sClass){
					arr.push( aEles[i] );
				}
			}

		}
		return arr;
	}

	createPage();
	//创建底部的页码个数
	function createPage() {
		oPage.innerHTML='';
		for (var i = 0; i < Math.ceil(aData[getSearch()].length/10); i++) {
			var a=document.createElement('a');
			a.innerHTML=i+1;
			oPage.appendChild(a);
		};
		oPage.children[0].className='active';	//默认第一个是不可点击
	}

	TabPage();
	//给页码添加点击事件，点击更新上边的所对应的信息数据
	function TabPage() {
		for (var i = 0; i < aPageNum.length; i++) {
			aPageNum[i].index=i;
			aPageNum[i].onclick=function() {
				if (this.className=='active') return;	//当前页面所对应的页码不可点击

				for (var i = 0; i < aPageNum.length; i++) {
					aPageNum[i].className='';
				};

				this.className='active';	//更新页码状态

				createList(this.index,aData[nSearch]);//	更新上边的所对应的信息数据

				n=this.index;	//更新当前显示的页面所对应的页码
			}
		};
	}
}