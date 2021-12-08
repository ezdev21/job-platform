<template>
 <div>
  <input type="text" v-model="skill" @input="filterSkills" class="">
  <div v-if="filtedSkills.length">
    <li v-for="skill in filtedSkills" :key="skill.id">{{skill.name}}</li>
  </div>
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
    skill:'',
    skills:[],
    filtedSkills:[]
  }
 },
 mounted(){
  getSkills();
 },
 methods:{
  getSkills(){
   axios.get('/skill/all')
   .then(res=>{
    this.skills=res.data.skills;
   });
  },
  filterSkills(){

  }
 }
}
</script>