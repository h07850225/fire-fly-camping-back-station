<template>
  <div class="about" v-for="item in data" :key="item">
    {{item.mem_no}}
  </div>
</template>


<script>
export default {
  data(){
    return{
      data:[],
    }
  },
  created(){
    fetch('http://localhost/phpLab/firefly_camping_back_station/public/phps/test.php')
    .then((res)=>{
      return res.json()
    })
    .then((test)=>{
      console.log(test)
      this.data=test
       console.log(this.data)
    })
  }
}
</script>