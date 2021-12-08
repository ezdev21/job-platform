<template>
 <div>
  <form @submit="addEmployment">
   
  </form>
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
    employments:[],
    filtedemployments:[]
  }
 },
 mounted(){
  getemployments();
 },
 methods:{
  getemployments(){
   axios.get('/skill/all')
   .then(res=>{
    this.employments=res.data.employments;
   });
  },
  filteremployments(){

  },
  addEmployment(){

  }
 }
}
</script>