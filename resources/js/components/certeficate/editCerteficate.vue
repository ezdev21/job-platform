<template>
  <div>
   <button @click="removeSkill">

   </button>
  </div>
</template>
<script>
export default {
 props:{
  user:{
   type:Object,
   required:true
  },
  certeficates:{
   type:Object,
   required:true
  }
 },
 data(){
  return{
   
  }
 },
 methods:{
  removeSkill(){
   if(confirm(`are you sure to remove ${certeficates.name}`)){
    axios.post('/certeficates/remove',{user:this.user,certeficates:this.certeficates})
    .then(res=>{

    });
   }
  }
 }
}
</script>