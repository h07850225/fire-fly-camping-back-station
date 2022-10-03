<template>
  <div class="about" v-for="item in data" :key="item">
    {{item}}
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
    fetch('http://localhost/phpLab/firefly_camping_back_station/src/assets/phps/test.php')
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