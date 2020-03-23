<template>
    <div>
        <van-nav-bar
        title="注册"
        left-text="返回"
        right-text="按钮"
        left-arrow
        @click-left="$router.go(-1)"
    />  
    <van-cell-group style="margin-top:15px">
        <van-field v-model="user" placeholder="请输入用户名"/>
        <van-field type="password" v-model="pwd" placeholder="请输入密码"/>
    </van-cell-group>
        <div style="margin:15px">
            <van-button color="#f30" block round @click="zhuce">注册</van-button>
        </div>
    </div>
</template>
<script>
import Cookie from '../assets/js/Cookie'
export default {
     data(){return {user:"",pwd:""}},
    methods:{
        zhuce(){
            this.$http.get('http://127.0.0.1/zhuce.php',{   //通过params选项传参
                            params:{
                                user:this.user,
                                pwd:this.pwd
                            }
                        })    
                .then(res => {
                    if(res.data=="用户名已存在"){
                        alert("用户名已存在")
                        console.log(res);
                    }else if(res.data=="注册成功"){
                        console.log(res);
                        alert("注册成功")
                    }else{
                        console.log(res);
                        alert("注册失败")
                    }
                    })
                    .catch(err=>{console.log(err)})
        }
    }
}
</script>