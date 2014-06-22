<div id="top">
    <div id="logo"><a href="index.html"><img src="/images/logo.png" alt=""  /></a></div>
        <div id="nav">
            <ul id="topnav" class="sf-menu">
                <li><a href="<?php echo Yii::app()->createUrl('index');?>"  class="current">首页</a></li>
                <li><a href="<?php echo Yii::app()->createUrl('product');?>">公司产品</a>
                    <ul>
                        <li><a href="<?php echo Yii::app()->createUrl('product/hot');?>">热门产品</a></li>
                        <li><a href="<?php echo Yii::app()->createUrl('product/new');?>">最新产品</a></li>
                        <li><a href="<?php echo Yii::app()->createUrl('product/recommend');?>">推荐产品</a></li>
                    </ul>
                </li>
                <li><a href="<?php echo Yii::app()->createUrl('product/search');?>">产品搜索</a></li>
                <li><a href="<?php echo Yii::app()->createUrl('news');?>">公司新闻</a></li>
                <li><a href="<?php echo Yii::app()->createUrl('job');?>">公司招聘</a>
                    <ul>
                        <li><a href="<?php echo Yii::app()->createUrl('job');?>">校园招聘</a></li>
                        <li><a href="<?php echo Yii::app()->createUrl('job');?>">社会招聘</a></li>
                    </ul>
                </li>
                <li><a href="<?php echo Yii::app()->createUrl('about');?>">关于我们</a></li>
                <li><a href="<?php echo Yii::app()->createUrl('contact');?>">联系我们</a></li>
            </ul>
        </div>
</div>