<template>
    <div class="swiper-container swiper2">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <img src="../assets/images/index-heng1.jpg" alt="">
            <div class="zi">
            <h5>52度 四特 锦瓷 五星 460ml</h5>
            <hr>
            <div class="zi-b">
                <p style="color:red">￥ 149</p>
                <div class="block">马上抢</div>
            </div>
            </div>
        </div>
        <div class="swiper-slide">
            <img src="../assets/images/index-heng1.jpg" alt="">
            <div class="zi">
            <h5>52度 四特 锦瓷 五星 460ml</h5>
            <hr>
            <div class="zi-b">
                <p style="color:red">￥ 149</p>
                <div class="block">马上抢</div>
            </div>
            </div>
        </div>
    </div>
    </div>
</template>

<script>
import Swiper from 'swiper'
import "swiper/css/swiper.css"
export default {
      mounted(){
        this.swiper = new Swiper(".swiper2",{
           slidesPerView: 'auto',			
            spaceBetween:-55,
			  centeredSlides: true,
        });
    }
}
</script>
<style scoped>
    .swiper2{
	margin-top: 0.2rem;
	width: 100%;
	height: 1.4rem;
	background-color:#f8f8f8;
}
.swiper2 .swiper-wrapper .swiper-slide{
		margin-right: 0;
      font-size: 18px;
      background: #fff;
      width: 80%;
      /* Center slide text vertically */
      display: -webkit-box;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      -webkit-justify-content: center;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      -webkit-align-items: center;
      align-items: center;
}
.swiper2 .swiper-wrapper .swiper-slide:nth-child(2n) {
      width: 80%;
}
.swiper2 .swiper-wrapper .swiper-slide img{
	width: 0.8rem;
	border-radius: 0.1rem;
	margin-right: 0.2rem;
}
.swiper2 .zi{
	font-size:0.14rem;
}
.swiper2 .zi-b{
	margin-top: 0.5rem;
	display: flex;
	justify-content:space-between;
}
.swiper2 .zi-b .block{
	padding: 0.03rem;
	background-color:#5EAFFE;
	color: #fff;
	border-radius: 0.05rem;
}
</style>