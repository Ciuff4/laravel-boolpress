<template>
<div class="container">
    <HeaderComponent/>
    <h1>App vue component</h1>
<h3>I titoli dei post</h3>
<ul>
    <li
    v-for="post in posts"
    :key="post.id">
    <p>{{post.title}}</p>
    </li>
</ul>
<FooterComponent/>
</div>
</template>

<script>
import FooterComponent from './components/partials/FooterComponent.vue';
import HeaderComponent from './components/partials/HeaderComponent.vue';
export default {
  components: { HeaderComponent, FooterComponent },
name:'App',
data(){
return{
    apiUrl:'http://127.0.0.1:8000/api/posts',
    posts:[],
}
},
mounted(){
this.getApiUrl()
},
methods:{
    getApiUrl(){
        axios.get(this.apiUrl)
        .then(r=>{
            this.posts=r.data
        })
    }
}
}
</script>

<style>

</style>
