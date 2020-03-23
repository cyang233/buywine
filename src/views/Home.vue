<template>
    <div class="app">
			<!-- 搜索栏 -->
			<div class="header">
					<input type="text" placeholder="全场满499返20元压岁红包">
					<img src="../assets/images/jx-search.png">
			</div>
			<!-- 轮播图 -->
                <Swiper></Swiper>
			<!-- 各种酒 -->
			<div class="list">
				<a href=""><img src="../assets/images/index-nav.jpg" alt=""></a>
				<a href=""><img src="../assets/images/index-nav1.jpg" alt=""></a>
				<a href=""><img src="../assets/images/index-nav2.jpg" alt=""></a>
				<a href=""><img src="../assets/images/index-nav3.jpg" alt=""></a>
				<a href=""><img src="../assets/images/index-nav4.jpg" alt=""></a>
				<a href=""><img src="../assets/images/index-nav5.jpg" alt=""></a>
				<a href=""><img src="../assets/images/index-nav6.jpg" alt=""></a>
				<a href=""><img src="../assets/images/index-nav7.jpg" alt=""></a>
				<a href=""><img src="../assets/images/index-nav8.jpg" alt=""></a>
				<a href=""><img src="../assets/images/index-nav9.jpg" alt=""></a>
			</div>
			<!-- 入场 -->
			<div class="rucT">
				<img src="../assets/images/index-nav-next.jpg" alt="">
			</div>
			<div class="rucB">
				<img src="../assets/images/index-two-left.jpg" alt="">
				<img src="../assets/images/index-two-right.jpg" alt="">
			</div>
			<!-- 购酒头条 -->
			<div class="news">
				<div class="news-t">
					<img src="../assets/images/index-news.png" alt=""> &ensp;
					<div style="width:0.01rem; height:0.3rem; background-color:#ccc;"></div>&ensp;
					<div class="list">
						<ul>
							<li>购酒网已恢复正常发货，正品保证，放心购</li>
							<li>购酒网已恢复正常发货，正品保证，放心购</li>
						</ul>
					</div>
				</div>
				<hr>
				<div class="news-b">
					<b>掌上秒杀</b>
					距结束:&emsp;
				<!--	<div class="block">{{shi}}</div>&nbsp;:&emsp;
					<div class="block">{{fen}}</div>&nbsp;:&emsp;
					<div class="block">{{miao}}</div>    
				-->
				<van-count-down :time="time" />
				</div>
			</div>
			<!--轮播-->
			<Swiper1></Swiper1>
			<!--两张图-->
			<div class="pic">
				<img src="../assets/images/index-two1.jpg" alt="">
				<img src="../assets/images/index-two2.jpg" alt="">
			</div>
			<!--三张图-->
			<div class="threePic">
				<div class="one">
					<img src="../assets/images/55c8ca6fea7647e093f3d51de72348ed.jpg" alt="">
				</div>
				<div class="two">
					<img src="../assets/images/76987f30ed3e4bfcbd27d8a7f8cfae97.jpg" alt="">
					<img src="../assets/images/25bd5b40bb1a4e2bb363fce546d35ad6.jpg" alt="">
				</div>
			</div>
			<!--正品保证 开箱验货 赔付保证-->
			<div class="rel">
				<div class="rel-t">
					<div class="zi">
						<img src="../assets/images/quality.png" alt="">
						正品保证
					</div>
					<div class="zi">
						<img src="../assets/images/cargo.png" alt="">
						开箱验货
					</div>
					<div class="zi">
						<img src="../assets/images/loss_ration.png" alt="">
						赔付保证
					</div>
				</div>
				<div class="rel-m">
					<img src="../assets/images/e44b5aae732a48dfb63cf6ae0b3f6e8e.jpg" alt="">
				</div>
				<div class="rel-b">
					<img src="../assets/images/3af66a89f6f548ef93463304f627040d.jpg" alt="">
				</div>
			</div>
			<van-tabs v-model="active" animated title-active-color="#f30" swipe-threshold="6">
				<van-tab v-for="(item,index) in title" :title="item.name" :key="index">
				<Page :index="index"></Page>
				</van-tab>
			</van-tabs>
    </div>
</template>
<script>
//轮播
import Swiper from '../components/Swiper'
import Swiper1 from '../components/Swiper1'
import jsonp from '../assets/js/jsonp'
import Page from '@/components/Page.vue'
export default {
   components:{Swiper,Swiper1,Page},
   data(){
	   return {shi:0,
				fen:0,
				miao:0, 
				time: 30 * 60 * 60 * 1000,
				active:0,
				title:[{name:"精选"},{name:"白酒"},{name:"葡萄酒"},{name:"清酒洋酒"},{name:"黄酒啤酒"},{name:"年份老酒"}],
			}
   },
   mounted(){
	   setInterval(function(){
			var d1 = new Date();
			var d2 = new Date(2020,3,12);
			var t1 =d1.getTime();
			var t2 =d2.getTime();
			var s = Math.floor((t2-t1)/1000);
			var s1 = Math.floor(s%60);
			var f = Math.floor(s/60%60);
			var h = Math.floor(s/(60*60*24));
			var d = Math.floor((t2-t1)/1000/60/60/24);
			if(h<10){
				h = '0'+h;
			}
			if(f<10){
				f='0'+f;
			}
			if(s1<10){
				s1 = '0'+s1;
			}
			this.shi = h;
			this.fen = f;
			this.miao = s1;
			// console.log(h,f,s1)
		},1000)
	}
}

</script>
<style scoped>
.van-count-down{
	font-size: 0.14rem;
}
 .app{
	margin-bottom: 0.9rem;
}
.header{
	display: flex;
	justify-content:center;
	align-items: center;
	position:absolute;
	padding: 0 0.12rem;
	width: 100%;
	height: 0.6rem;
	background-color: #CCCCCC;
}
.header input{
	z-index: 3;
	position:absolute;
	left: 7%;
	top:0.1rem;
	text-indent: 0.5rem;
	width: 5.2rem;
	height: 0.42rem;
	border-radius:0.1rem;
	outline: none;
	border: none;
}
.header img{
	z-index: 7;
	position: absolute;
	left: 0.6rem;
	top: 0.13rem;
	width: 0.23rem;
	height: 0.22rem;
}
.list{
	display: flex;
	flex-wrap: wrap;
	align-content: flex-start; 
	width: 100%;
}
.list a{
	display: block;
	width: 20%;
	height:1.34rem;
}
.list a img{
	width: 100%;
}
.rucT{
	width: 100%;
	height: 1.48rem;
}
.rucT img{
	width: 100%;
	height:100%;
}
.rucB{
	display: flex;
	width: 100%;
}
.rucB img{
	width: 50%;
	height: 1.66rem;
}
.news{
	width: 100%;
	height: 0.8rem;
}
.news img{
	width: 0.8rem;
}
.news .news-t{
	padding:0.1rem;
	display: flex;
	width: 100%;
	height: 0.4rem;
}
.news .list{
	overflow: hidden;
	line-height: 0.24rem;
	font-size:0.14rem;
}
@keyframes move2{
	from{transform: translateY(0);}
	
	to{
		transform: translateY(-26px);
	}
}
.list .yi{
	animation: move2 4s ease;
}
/* 倒计时 */
.news .news-b{
	display: flex;
	padding-top: 0.2rem;
	padding-left: 0.2rem;
	align-items: center;
	font-size:0.14rem;
}
.news .news-b .block{
	text-align: center;
	width: 0.3rem;
	height: 0.3rem;
	border-radius: 0.1rem;
	background-color: rgba(0,0,0,.7);
	color: #fff;
}
/* 两个图 */
.pic{
	margin-top: 0.1rem;
	display: flex;
	width: 100%;
	justify-content: space-between;
}
.pic img{
	width: 48%;
}
/* 三个图 */
.threePic{
	display: flex;
	padding: 0.15rem;
	width: 100%;
}
.threePic .one{
	width: 50%;
}
.threePic .one img{
	width: 100%;
}
.threePic .two{
	display: flex;
	width: 50%;
}
.threePic .two img{
	width: 50%;
}
/*正品保证 开箱验货 赔付保证 */
.rel{
	width: 100%;
	line-height: 1.5;
	padding: 0.15rem 0.45rem;
}
.rel .rel-t{
	display: flex;
	width: 100%;
	justify-content: space-between;
	align-items: center;
}
.rel .rel-t .zi{
	width: 100%;
	display: flex;
	align-items: center;
	justify-content: space-around;
	color: #fb223e;
}
.rel .rel-t .zi img{
	width: 0.33rem;
	height: 0.33rem;
}
.rel .rel-m img{
	width: 100%;
}
.rel .rel-b img{
	width: 100%;
}
/*vant选项卡*/
.van-tab{
	font-size: 0.13rem;
}
/*跨域获取*/
</style>
