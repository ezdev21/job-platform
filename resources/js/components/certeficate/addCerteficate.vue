<template>
 <div> 
  <form @submit="addCerteficate">
   
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
    certeficates:[],
    filtedcerteficates:[]
  }
 },
 mounted(){
  getcerteficates();
 },
 methods:{
  getemployments(){
   axios.get('/skill/all')
   .then(res=>{
    this.certeficates=res.data.certeficates;
   });
  },
  filtercerteficates(){

  },
  addEmployment(){

  }
 }
}
</script>