<template>
    <div class="swiper-container swiper2">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="../assets/images/28fae5969a2047698e149c4c8058ccd9_1.jpg" alt="">
                <div class="zi">
                    ￥2150
                </div>
            </div>
            <div class="swiper-slide">
                <img src="../assets/images/226326af03f04bac8421669afccac597_1.jpg" alt="">
                <div class="zi">
                    ￥199
                </div>
            </div>
            <div class="swiper-slide">
                <img src="../assets/images/adb383712f8e460bbeccbdf1b3fe22c1_1.jpg" alt="">
                <div class="zi">
                    ￥495
                </div>
            </div>
             <div class="swiper-slide">
                <img src="../assets/images/ffef137190af461a9c4b226972c3c116_1.jpg" alt="">
                <div class="zi">
                    ￥666
                </div>
            </div>
             <div class="swiper-slide">
                <img src="../assets/images/cb2a83e93b5a46c493d01aceb5f3c4ab_1.jpg" alt="">
                <div class="zi">
                    ￥888
                </div>
            </div>
            <div class="swiper-slide">
                <img src="../assets/images/226326af03f04bac8421669afccac597_1.jpg" alt="">
                <div class="zi">
                    ￥1200
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
            spaceBetween:20,
			  centeredSlides: true,
        });
    }
}
</script>
<style scoped>
    .swiper2{
	width: 100%;
    margin-bottom: 1.2rem;
}
.swiper2 .swiper-wrapper .swiper-slide{
    position: relative;
      font-size: 18px;
      background: #fff;
      width: 36%;
      display: flex;
      align-items: center;
}
.swiper2 .swiper-wrapper .swiper-slide img{
    width: 100%;;
}
.swiper2 .zi{
    position: absolute;
    left: 0;
    bottom: 0;
    width: 100%;
    background-color: rgba(0,0,0,.7);
    color: #fff;
	font-size:0.21rem;
    line-height: 1.5;
    text-align: center;
}
</style>