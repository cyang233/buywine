<template>
     <div class="swiper-container swiper1">
        <div class="swiper-wrapper">
            <div class="swiper-slide" v-for="(item,index) in lists" :key="index">
                <img :src="item.url" width="100%" height="200px">
             </div>
        </div>
       	<div class="swiper-pagination swip1"></div>
		<div class="swiper-scrollbar"></div>
    </div>
</template>
<script>
import Swiper from 'swiper'
import "swiper/css/swiper.css"
export default {
    data(){
        return {lists:[{url:"http://img0.gjw.com/famous/2020/0305/4dd5ee3713b247408d154497528a7403.jpg"},
                {url:"http://img0.gjw.com/famous/2020/0304/2300b5dc9a454b88963069fbe48a3113.jpg"},
                {url:"http://img0.gjw.com/famous/2019/1111/c547fdb7118c41e6aa772c6e6d09eadb.jpg"},
                {url:"http://img0.gjw.com/famous/2019/0930/5e02e64bb8ef420fbf3cd806ab0fc3b8.jpg"}]}
    },
    mounted(){
        this.swiper = new Swiper(".swiper1",{
           autoplay:true,				
            // 循环
            loop:true,
            // 如果需要分页器
            pagination: {
                el: '.swip1',
            },
            // 一个视图显示几张图
                slidesPerView:1,
                // 激活的图片放在中间
                centeredSlides:true,
        });
    }
}
</script>

<style scoped>
    .swiper-container{
        height: 200px;
        width: 100%;
    }
    .swiper-pagination-bullet-active{
        background-color: #f30;
    }
</style>