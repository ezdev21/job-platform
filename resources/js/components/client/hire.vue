<template>
 <div>

 </div>
</template>
<script>
export default {
 props:{
  client:{
   type:Object,
   required:true
  },
  user:{
   type:Object,
   required:true
  },
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
  hire(){
   axios.post('client/job/hire',{client:this.client,user:this.user,job:this.job})
   .then(res=>{

   });
  }
 }
}
</script>