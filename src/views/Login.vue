<template>
    <div>
      <van-nav-bar
        title="登录"
        left-text="返回"
        left-arrow
        @click-left="$router.go(-1)"
    />  
    <van-cell-group style="margin-top:15px">
        <van-field v-model="user" placeholder="请输入用户名"/>
        <van-field type="password" v-model="pwd" placeholder="请输入密码"/>
    </van-cell-group>
        <div style="margin:15px">
            <van-button color="#f30" block round @click="login">登录</van-button>
            <br>
            <van-button color="#f30" block round @click="$router.push('/zhuce')">注册</van-button>
        </div>
    </div>
</template>
<script>
import Cookie from '../assets/js/Cookie'
export default {
    data(){return {user:"",pwd:""}},
    methods:{
        login(){
            this.$http.get('http://127.0.0.1/deng.php',{   //通过params选项传参
                            params:{
                                user:this.user,
                                pwd:this.pwd
                            }
                        })    
                        .then(res => {
                           if(res.data=="用户名不存在"){
                               alert("用户名不存在");
                               console.log(res.data);
                           }else if(res.data=="密码错误"){
                                alert("密码错误");
                                console.log(res.data);
                           }else{
                                 alert("登陆成功");
                                 Cookie.setCookie("uname",this.user);
                                 this.$router.replace('/mine')
                           }
                        })
                        .catch(res => {
                            console.log('get发送Ajax请求,请求失败',res)
                    })
             },
    }
}
</script>