<template>
  <div>
   <h1>active proposals {{submittedProposals.length}}</h1>
   <div v-for="proposal in submittedProposals" :key="proposal.id">
     <div class="flex">
       <p>{{proposal.date}}</p>
       <p>{{proposal.name}}</p>
       <p>{{proposal.category}}</p>
     </div>
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
   submittedProposals:[]
  }
 },
 mounted(){
  this.getPropsals();
 },
 methods:{
  getPropsals(){
   axios.get('/proposal/active',{params:{user:this.user}})
   .then(res=>{
    this.submittedProposals=res.data.activeProposals;
   })
  }
 }
}
</script>