<template>
 <div>
   <form @submit.prevent="search" class="flex">
    <input type="text" @input="filter" v-model="searchQuery" required class="text-first rounded-l-lg w-full p-2 text-lg lg:text-xl outline-none focus:border-2" placeholder="search jobs">
    <input type="submit" class="py-2 px-4 rounded-r-lg text-white bg-first text-xl lg:text-2xl" value="search"/>   
    </form>
   <div v-if="filtetedCategories" class="bg-white">
    <ul>
      <li v-for="category in categories" :key="category.id">{{category.name}}</li>
    </ul>
   </div>
 </div>
</template>
<script>
 export default{
  data(){
   return{
    query:'',
    categories:[],
    filteredCategories:[]
   }
  },
  mounted(){
   
  },
  methods:{
    filterCategories(){
      this.filteredCategories=[];
      this.Categories.forEach(category=>{
        if(category.name.toLowerCase().match(this.query.toLowerCase())){
          this.filteredCategories.push(doctor);
        }
      });
    },
    search(){
     document.getElementById('searchQuery').value=this.query;
     document.getElementById('search-form').submit();
    }
  }
 }
</script>