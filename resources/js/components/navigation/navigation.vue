<template>
  <div>
   <nav class="flex items-between w-max mx-10">
     <div class="flex">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
      </svg>
      <p>home</p>
      <input type="text" class="" placeholder="search">
     </div>
     <div>
       <ul>
         <li>profile</li>
         <div>
           <ul>
            <li><a href="">my profile</a></li>
            <li><a href="">edit profile</a></li>
            <li><a href=""></a></li>
            <li><a href=""></a></li> 
           </ul>
         </div>
         <li>find work</li>
         <div>
           <ul>
            <li><a href="">find work</a></li>
            <li><a href="">saved jobs</a></li>
            <li><a href="">proposals</a></li>
            <li><a href=""></a></li> 
           </ul>
         </div>
         <li><a href="">my jobs</a></li>
         <div>
           <ul>
            <li></li> 
           </ul>
         </div>
         <li><a href="">reports</a></li>
         <div>
           <ul>
            <li></li> 
           </ul>
         </div>
         <li><a href="">messages</a></li>
         <div>
           <ul>
            <li></li> 
           </ul>
         </div>
       </ul>
     </div>
     <div>

     </div>
   </nav>
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

   }   
  },   
  mounted() {
    
  }
 }
</script>