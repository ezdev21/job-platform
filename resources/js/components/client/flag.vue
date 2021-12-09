<template>
 <div>
  <button @click="flag">
   flag as in appropriate
  </button>
 </div>
</template>
<script>
export default {
 props:{
  client:{
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
   axios.post('/client/flag',{client:this.client})
   .then(res=>{

   });
  }
 }
}
</script>