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
  employment:{
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
   if(confirm(`are you sure to remove ${employment.name}`)){
    axios.post('/employment/remove',{user:this.user,employment:this.employment})
    .then(res=>{

    });
   }
  }
 }
}
</script>