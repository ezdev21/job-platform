<template>
 <div>
  <button @click="save" class="m-2">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" :class="[saved? 'bg-first':'text-first']" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
    </svg>
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
  job:{
   type:Object,
   required:true
  }
 },
 data(){
  return{
   saved:false
  }
 },
 mounted(){
  this.checkSaved(); 
 },
 methods:{
  checkSaved(){
   axios.get('/job/check-saved',{params:{job:this.job,user:this.user}})
   .then(res=>{
     this.saved=res.data.saved;
   })
  },
  save(){
   axios.post('/job/save',{job:this.job,user:this.user})
   .then(res=>{
    this.saved=true;
   })
  }
 }
}
</script>