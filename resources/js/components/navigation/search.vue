<template>
 <div>
   <form @submit.prevent="search">
    <input type="text" v-model="query" @input="filterCatgories" class="text-xl text-first text-xl p-2 rounded-lg border-2 border-gray-300 w-96" required placeholder="search jobs">
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