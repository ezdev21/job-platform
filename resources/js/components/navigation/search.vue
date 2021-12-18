<template>
 <div>

 </div>
</template>
<script>
 export default{
  data(){
   return{
    query:'',
    categories:[]
   }
  },
  mounted(){
   
  },
  methods:{
    search(){
     document.getElementById('searchQuery').value=this.query;
     document.getElementById('search-form').submit();
    }
  }
 }
</script>