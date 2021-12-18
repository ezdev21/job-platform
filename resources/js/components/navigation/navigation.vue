<template>
  <div class="bg-first text-white p-2 flex justify-evenly items-center">
     <div class="flex items-center space-x-4 text-xl font-medium text-white mx-3">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
      </svg>
      <form action="">
        <input type="text" class="text-xl text-first text-xl p-2 rounded-lg border-2 border-gray-300 w-96" required placeholder="search jobs">
      </form>
     </div>
     <div>
       <ul class="flex items-center text-xl font-medium text-white space-x-4">
         <li><a href="">Profile</a></li>
         <div class="hidden">
           <ul>
            <li><a href="">my profile</a></li>
            <li><a href="">edit profile</a></li>
            <li><a href=""></a></li>
            <li><a href=""></a></li> 
           </ul>
         </div>
         <li><a href="">Find Work</a></li>
         <div class="hidden">
           <ul>
            <li><a href="">find work</a></li>
            <li><a href="">saved jobs</a></li>
            <li><a href="">proposals</a></li>
            <li><a href=""></a></li> 
           </ul>
         </div>
         <li><a href="">My Jobs</a></li>
         <div>
           <ul>
            <li></li> 
           </ul>
         </div>
         <li><a href="">Reports</a></li>
         <div>
           <ul>
            <li></li> 
           </ul>
         </div>
         <li><a href="">Messages</a></li>
         <li><notification-component :user="user"/></li>
         <div>
           <ul>
            <li></li> 
           </ul>
         </div>
       </ul>
     </div>
     <div class="flex space-x-4">
      <img src="https://www.winhelponline.com/blog/wp-content/uploads/2017/12/user.png" class="w-12 h-12 rounded-full">
      <svg xmlns="http://www.w3.org/2000/svg" class="text-first w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
      </svg>
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

   }   
  },   
  mounted() {
    
  }
 }
</script>