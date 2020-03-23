<template>
    <div>
        <ul class="lists">
            <li v-for="(item,index) in list1" :key="index">
                <img :src=url+item.src>
                <div class="zi"><p>{{item.zi}}</p></div>
                <div class="tag"><span>
                    {{item.activityTitle?item.activityTitle[0].Ativityname:""}}
                </span></div>	
                <div class="price">￥{{item.price}}</div>
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    props:["index"],
    data(){
        return {
            list1:[],
			url:"http://img0.gjw.com/product/",
            ind:0,
            num:0
        }
    },
created(){
	   this.getData();
    window.addEventListener('scroll', this.gun);
   },
 methods:{
	   getData(){
            this.num++;
           if(this.index==0||this.index==1||this.index==2){
                this.ind=this.index
           }
           if(this.index==3){
               this.ind =this.index+1;
           }
           if(this.index==4){
               this.ind="5,6";
           }
           if(this.index==5){
               this.ind=this.index+2
           }
			this.$http.get("http://m.gjw.com/BtCApi/Home/GethomeProductByhot?seriesid="+`${this.ind}`+"&pageindex="+`${this.num}`+"&pagesize=20")
			.then(res=>{
			let datas = res.data.data;
			 res.data.data.forEach(item=>{
				 	let b = {};
					b.src = item.Pic;
					b.zi = item.ProductName;
					b.qg = item.activityTitle;
					b.price = item.ActivityMoney;
					this.list1.push(b);
					// return this.list1;

				})
                // console.log(datas[0].activityTitle[0].Ativityname)
			})
			.catch(err=>{console.log(err)})
            console.log(this.num);
   		},
        gun(){
            let bady = document.querySelector(".app").offsetHeight; 
            let scroll = document.documentElement.scrollTop;
            // console.log(scroll,bady-800);
            if(scroll>bady-650){
                this.getData();
            }
        }
   },
}
</script>
<style>
.lists{
	display: flex;
	justify-content: space-between;
	flex-wrap: wrap;
	width: 100%;
	padding: 0.2rem;
}
.lists li{
    padding: 0.2rem;
	margin-bottom: 0.2rem;
	line-height: 1.5;
	width: 45%;
	border: 0.02rem solid #eee;
}
.lists li img{
	width: 100%;
}
.lists li .zi{
    width: 96%;
}
.lists li .zi p{
    padding-left: 0.02rem;
	font-size: 0.14rem;
    line-height: 2;
    margin: 0.05rem 0;
    height: 0.36rem;
}
.van-tabs .van-tab{
    padding: 0;
}
.tag span {
    border-radius: 5px;
    padding: 2px;
    font-size: 10px;
    color: #fff;
    margin: 0 5px;
}
.lists li .price{
	padding-bottom: 0.2rem;
	color: #fb223e;
}
</style>