<template>
 <div>
  <add-skill-component/>
  <li v-for="skill skills" :key="skill.id"><span>{{skill.name}}</span>
  <remove-skill-component/>
  </li>
 </div>
</template>
<script>
export default {
 props:{
  user:{
   type:Object,
   required:true
  }
 },
 data(){
  return{
   skills:[]
  }
 },
 mounted(){
  this.getSkills();
 },
 methods:{
  getSkills(){
   axios.get('/skill/all',{params:{user:this.user}})
   .then(res=>{
    this.skills=res.data.skills;
   })
  }
 } 
}
</script>