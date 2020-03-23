<template>
    <div class="app">
        <!--头部-->
        <div class="header">
            <div class="login">
                <img src="../assets/images/icon_head_no_login.png" alt="">
                <a href="" v-if="uname">你好呀,{{uname}} <van-button type="primary" size="mini" @click="logOut">注销</van-button></a>
                <a href="" v-else><router-link to="login">登录/注册</router-link></a>
            </div>
        </div>
        <!---我的订单-->
        <div class="order">
            <div class="order-t">
                <p>我的订单</p>
                <a href="">查看全部订单></a>
            </div>
            <ul class="order-b">
                <li>
                    <div class="zero">0</div>
                    <img src="../assets/images/wd_01dfk.png" alt="">
                    <span>待付款</span>
                </li>
                <li>
                    <div class="zero">0</div>
                    <img src="../assets/images/wd_02dfh.png" alt="">
                    <span>待发货</span>
                </li>
                <li>
                    <div class="zero">0</div>
                    <img src="../assets/images/wd_03dsh.png" alt="">
                    <span>待收货</span>
                </li>
                <li>
                    <img src="../assets/images/wd_04dpj.png" alt="">
                    <span>待评价</span>
                </li>
            </ul>
        </div>
        <!--我的钱包-->
        <div class="price">
            <div class="price-t">
                <p>我的钱包</p>
                <a href="">查看明细></a>
            </div>
            <ul class="price-b">
                <li>
                    <span>0</span>
                    <p>账户余额</p>
                </li>
                <li>
                    <span>0</span>
                    <p>优惠券</p>
                </li>
                <li>
                    <span>0</span>
                    <p>积分</p>
                </li>	
            </ul>
        </div>
        <!--四张图-->
        <ul class="fourPic">
            <li>
                <img src="../assets/images/icon_collection.png" alt="">
                <p>商品收藏</p>
            </li>
           <li>
                <img src="../assets/images/icon_foot_print.png" alt="">
                <p>待浏览足迹</p>
            </li>
           <li>
                <img src="../assets/images/kfrx.png" alt="">
                <p>4007221919</p>
            </li>
           <li>
                <img src="../assets/images/bag.png" alt="">
                <p>领券福利</p>
            </li>
        </ul>
        <!--推荐商品-->
        <div class="line">
            <van-divider :style="{ color: '#1989fa', borderColor: '#EEAA22',width:'80%'}">
                <div class="zi">推荐商品</div>
            </van-divider>
        </div>
        <Swiper2></Swiper2>
    </div>
</template>
<script>
import Cookie from '../assets/js/Cookie';
import Swiper2 from '@/components/Swiper2.vue'
export default {
    data(){return {uname:''}},
    created(){
        this.uname = Cookie.getCookie('uname')
    },
    methods:{
        logOut(){
             Cookie.delCookie("uname");
             this.uname="";
             this.router.push('/mine')
        }
       
    },
     components:{Swiper2},
}
</script>
<style scoped>
    .app{
	width: 100%;
	margin-bottom: 0.5rem;
	font-size: 0.21rem;
}
.header{
	display: flex;
	align-items: center;
	width: 100%;
	height: 2rem;
	background-color: #2e313a;
}
.header .login{
	display: flex;
	align-items: center;
	height: 0.8rem;
	line-height: 0.8rem;
}
.header .login img{
	width: 0.8rem;
	height: 0.8rem;
	margin: 0 15px;
}
.header .login a{
	color: #fff;
	font-size: 0.21rem;
}
/*我的订单*/
.order{
	padding-bottom: 0.2rem;
	width: 100%;
	border-bottom: 0.01rem solid #ccc;
}
.order .order-t{
	display: flex;
	justify-content: space-between;
	align-items: center;
	padding: 0.3rem 0.2rem;
	line-height: 0.24rem;
	width:100%;
}
.order .order-b{
	margin-top: 0.2rem;
	display: flex;
	justify-content: space-around;
	width: 100%;
}
.order .order-b li{
	position: relative;
	display: flex;
	flex-direction: column;
	justify-content: center;
	align-items: center;
	line-height: 2.5;
}
.order .order-b li img{
	height: 0.3rem;
}
.order .order-b li .zero{
	position: absolute;
	right: .1rem;
	top: -.4em;
	color: #fff;
	font-size: .5em;
	padding: 0 .3em;
	text-align: center;
	min-width: 1.2em;
	line-height: 1.2;
	position: absolute;
	border-radius: .6em;
	box-sizing: border-box;
	background-color: #f44;
}
/*我的钱包*/
.price{
	padding:0 0.2rem;
	padding-top: 0.2rem;
	margin-top: 0.2rem;
	width: 100%;
	padding-bottom: 0.2rem;
	border-top: 0.01rem solid #ccc;
	border-bottom: 0.01rem solid #ccc;
}
.price .price-t{
	display: flex;
	justify-content: space-between;
}
.price .price-b{
	padding-top: 0.3rem;
	display: flex;
	justify-content: space-around;
}
.price .price-b li{
	font-size: 0.2rem;
	text-align: center;
	line-height: 2;
}
/*四张图*/
.fourPic{
    margin-top: 0.2rem;
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 100%;
    padding:0.2rem;
    border-top: 0.01rem solid #ccc;
    border-bottom: 0.01rem solid #ccc;
}
.fourPic li{
    line-height: 3;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    align-items: center;
}
.fourPic li img{
    height: 0.4rem;
}
/*推荐商品*/
.line{
    padding: 0.2rem;
    display: flex;
    justify-content: center;
    width: 100%;
}
.line .zi{
    padding: 0.06rem;
    color: #EEAA22;
    background-color: #f4f5f7;
}
</style>