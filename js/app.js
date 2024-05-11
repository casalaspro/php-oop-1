const { createApp } = Vue;


createApp({
  data(){
    return{
      message: "Vue connected!",
      medias: undefined,
      // data: res.data

    }
  },
  methods:{
    fetchData(){
      axios.get('./server.php').then((res)=>{
        // console.log(res.data.results);
        this.medias = res.data.results;
        console.log(this.medias);
      })
    }
  },
  mounted(){

  },
  created(){
    this.fetchData();
  },
}).mount('#App');