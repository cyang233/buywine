<template>
<div class="app">
    <div class="header">
        <img src="../assets/images/search.png" alt="">
        <div>【购酒网】购酒福利页面New</div>
        <p></p>
    </div>
    <ul class="content">
        <li>
            <img src="../assets/images/lucky_01.jpg" alt="">
        </li>
        <li>
            <img src="../assets/images/lucky_02.jpg" alt="">
        </li>
        <li>
            <img src="../assets/images/lucky_03.jpg" alt="">
        </li>
        <li>
            <img src="../assets/images/lucky_04.jpg" alt="">
        </li>
        <li class="a">
            <img src="../assets/images/lucky_05.jpg" alt="">
            <img src="../assets/images/lucky_06.jpg" alt="">
        </li>
        <li>
            <img src="../assets/images/lucky_07.jpg" alt="">
        </li>
        <li class="a">
            <img src="../assets/images/lucky_08.jpg" alt="">
            <img src="../assets/images/lucky_09.jpg" alt="">
        </li>
        <li class="a">
            <img src="../assets/images/lucky_10.jpg" alt="">
            <img src="../assets/images/lucky_11.jpg" alt="">
        </li>
        <li class="a">
            <img src="../assets/images/lucky_12.jpg" alt="">
            <img src="../assets/images/lucky_13.jpg" alt="">
        </li>
        <li class="a">
            <img src="../assets/images/lucky_14.jpg" alt="">
            <img src="../assets/images/lucky_15.jpg" alt="">
        </li>
        <li class="a">
            <img src="../assets/images/lucky_16.jpg" alt="">
            <img src="../assets/images/lucky_17.jpg" alt="">
        </li>
    </ul>
</div>
</template>

<style scoped>
   /* 头部 */
.header{
	display: flex;
	justify-content: space-between;
	align-items: center;
	margin-bottom: 0.1rem;
	width: 100%;
	padding: 0.1rem 0.2rem;
	border-top: 0.01rem solid #ccc;
	border-bottom: 0.01rem solid #ccc;
}
.header div{
	width: 60%;
	line-height: 0.65rem;
	font-size: 0.24rem;
}
.header img{
	width: 0.34rem;
	height: 0.34rem;
	vertical-align:middle;
}
/* 图片 */
.content li{
	text-align: center;
	margin-top: -1px;
	width: 100%;
}
.content li img{
	border: none;
	display: block;
	width: 100%;
	height: auto;
}
.content .a{
	background-color: #082662;
}
.content .a img{
	width: 49%;
	display: inline-block;
}
</style>