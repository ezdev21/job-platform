<template>
 <div>
  <button @click="flag">
   flag as inappropriate
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
  flag(){
   axios.post('/job/flag',{job:this.job})
   .then(res=>{

   });
  }
 }
}
</script>