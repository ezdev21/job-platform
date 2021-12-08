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
  skill:{
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
   if(confirm(`are you sure to remove ${skill.name}`)){
    axios.post('/skill/remove',{user:this.user,skill:this.skill})
    .then(res=>{

    });
   }
  }
 }
}
</script>