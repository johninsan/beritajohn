

require('./bootstrap');

window.Vue = require('vue');
import Vue from 'vue'
import VueChatScroll from 'vue-chat-scroll'
Vue.use(VueChatScroll)

Vue.component('posts', require('./components/posts.vue'));
Vue.component('message', require('./components/message.vue'));
let url = window.location.href;
let page = url.split('=')[1];
console.log(page);
const app = new Vue({
    el: '#app',
    data:{
        blog:{},
        message:'',
        chat:{
            message:[]
        }
    },
    methods:{
        send(){
            if (this.message.length !=0) {
                this.chat.message.push(this.message);
                this.message= ''
            }
        }
    },
    mounted(){
        axios.post('/getPosts',{
            'page' : page
        })
        .then(response => {
            this.blog = response.data.data
                //console.log(response);
            })
        .catch(function (error) {
            console.log(error);
        });
    }
});
const mess = ({
    data:{
        message:''
    },
    methods:{
        send(){
            if (this.message.length !=0) {
                console.log(this.message); 
            }
        }
    }
});