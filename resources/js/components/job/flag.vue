<template>
 <div>
  <button @click="flag" class="m-2">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" :class="[repored? 'bg-first' : 'text-first']" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14H5.236a2 2 0 01-1.789-2.894l3.5-7A2 2 0 018.736 3h4.018a2 2 0 01.485.06l3.76.94m-7 10v5a2 2 0 002 2h.096c.5 0 .905-.405.905-.904 0-.715.211-1.413.608-2.008L17 13V4m-7 10h2m5-10h2a2 2 0 012 2v6a2 2 0 01-2 2h-2.5" />
    </svg>       
  </button>
 </div>
</template>
<script>
export default {
 props:{
  job:{
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
   reported:false
  }
 },
 mounted(){
  this.checkReported();
 },
 methods:{
  checkReported(){
    axios.get('/job/checkReported',{params:{job:this.job,user:this.user}})
    .then(res=>{
      this.reported=res.data.reported;
    });
  },
  flag(){
   axios.post('/job/flag',{job:this.job,user:this.user})
   .then(res=>{
    this.reported=true;
   });
  }
 }
}
</script>