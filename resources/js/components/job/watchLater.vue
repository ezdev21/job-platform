<template>
 <div>
  <button @click="watchLater">

  </button>
 </div>
</template>
<script>
export default {
 props:{
  job:{
   type:Object,
   required:true
  }
 },
 data(){
  return{

  }
 },
 methods:{
  watchLater(){
   axios.post('/job/watchlater',{job:this.job})
   .then(res=>{

   });
  }
 }
}
</script>