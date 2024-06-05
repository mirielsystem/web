<template>
    <div id="app">
      <Header />
      <Content />
      <Footer />
    </div>
  </template>
  
  <script>
  import Header from '../components/Header.vue'
  import Footer from '../components/Footer.vue'
  
  export default {
    components: {
      Header,
      Footer
    }
  }
  </script>
  
  <style>
  body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f0f0f0;
  }
  </style>
  