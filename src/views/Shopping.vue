<template>
   <div class="app">
			<div class="header">
				<div> &emsp;&emsp;</div>
				<h5>购物车</h5>
				<p>编辑</p>
			</div>
			<div class="content">
				<img src="../assets/images/cart_empty.png" alt="">
				<h5>您的购物车还没有商品</h5>
				<p>快去逛逛~</p>
				<div>去首页</div>
			</div>
			<div class="bg">
				<img src="../assets/images/cart-bg.png" alt="">
			</div>
			<div class="num">
				<div class="check">
					<div></div> &nbsp;
					全选
				</div>
				<div class="count">
					合计：<span>￥0.00</span>
				</div>
				<div class="price">
					结算(0)
				</div>
			</div>
		</div>
</template>

<style scoped>
    .app{
	margin-bottom: 0.8rem;
}
.header{
	display: flex;
	justify-content: space-between;
	margin-bottom: 0.1rem;
	width: 100%;
	padding: 0.1rem 0;
	padding-right: 0.2rem;
	border-top: 0.01rem solid #ccc;
	border-bottom: 0.01rem solid #ccc;
	line-height: 0.65rem;
	font-size: 0.32rem;
}
.header p{
	font-size: 0.24rem;
	color: #666;
}

.content{
	display: flex;
	flex-direction: column;
	justify-content: space-around;
	align-items: center;
	line-height: 4;
	font-size: 0.26rem;
	background-color:#F4F5F7;
}
.content img{
	margin-top: 0.4rem;
	width: 1rem;
	height:1rem;
}
.content div{
	padding-top: 0.2rem;
	line-height: 1;
	height: 0.6rem;
	width: 1.2rem;
	border-radius: 0.1rem;
	color: #fff;
	background-color:#fb223e;
	text-align: center;
}
.bg{
	line-height: 2;
	background-color:#F4F5F7;
}
.bg img{
	margin-top: 0.5rem;
	width: 100%;
	height: 100%;
}
.num{
	position: fixed;
	bottom: 0.8rem;
	display: flex;
	justify-content: space-between;
	padding-left: 0.2rem;
	width: 100%;
	height: 0.5rem;
	font-size: 0.24rem;
}
.num .check{
	display: flex;
	align-items: center;
	justify-content: space-between;
}
.num .check div{
	width: 0.4rem;
	height: 0.4rem;
	border-radius: 0.4rem;
	background-color: #f00;
}
.num .check div:before{
	display: flex;
	align-items: center;
	justify-content: center;
	content:"√";
	color: #fff;
	width: 0.4rem;
	height: 0.4rem;
	font-weight: bold;
	font-size: 0.31rem;
}
.num .count span{
	color: #f00;
}
.num .price{
	width: 1.1rem;
	height: 100%;
	background-color: #e8e8e8;
	color: #999;
	text-align: center;
}
</style>