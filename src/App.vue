<template>
  <div id="app">
    <transition enter-active-class="flipInY"
    leave-active-class="flipOutY">
       <router-view/>
    </transition>
      <ul class="footer">
          <li class="lis ind">
              <router-link to="/">首页</router-link>
          </li>
          <li class="lis ifl">
              <router-link to="/more">分类</router-link>
          </li>
          <li>
              <img src="./assets/images/bag.png" id="n" alt="">
             <router-link to="/lucky">专享福利</router-link>
          </li>
          <li class="lis iab">
               <router-link to="/shopping">购物车</router-link>
          </li>
          <li class="lis imy">
              <router-link to="/mine">我的</router-link>
          </li>
      </ul>
  </div>
</template>
<script>
import './assets/css/animate.min.css';
export default {
}
</script>
<style scoped>
.footer{
	z-index: 99;
	display: flex;
	position: fixed;
	bottom: 0;
	justify-content: space-around;
	border-top: 0.02rem solid #ccc;
	background-color: #fff;
	width: 100%;
	height: 0.9rem;
	font-size: 0.14rem;
}
.footer img[id]{
	width: 0.28rem;
	height: 0.28rem;
	margin-bottom: 0.14rem;
}
.footer li{
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  flex:1;
}
.footer .lis:before{
  content:"";
  display: block;
  height: .44rem;
  width: .44rem;
  background-image: url("./assets/images/home_clear.png");
  background-size: cover;
}
.footer .ifl:before{
   background-image: url("./assets/images/cate_clear.png");
}
.footer .ifl.active:before{
  background-image: url("./assets/images/cate.png");
}
.footer .iab:before{
   background-image: url("./assets/images/car_clear.png");
}
.footer .imy:before{
   background-image: url("./assets/images/mine_clear.png");
}
.router-link-exact-active{
  color: #f30;
}
</style>
