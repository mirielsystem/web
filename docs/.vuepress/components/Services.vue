<template>
    <div class="card-container">
      <div v-for="service in services" :key="service.name" class="card">
        <a :href="service.url" target="_blank">
          <img :src="service.img" :alt="service.alt">
          <h4>{{ service.name }}</h4>
          <p>{{ service.description }}</p>
        </a>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        services: [
          {
            img: 'https://rosekey.jp/static-assets/icons/512.png',
            alt: 'rosekey.jp',
            name: 'rosekey.jp',
            description: 'Rosekeyはカテゴリーフリーのサーバーです！！ 新規登録大歓迎！',
            url: 'https://rosekey.jp'
          }
        ]
      };
    }
  };
  </script>
  
  <style>
  .card-container {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
  }
  .card {
    width: 250px;
    margin: 10px;
    background-color: #fff;
    border: 1px solid #ddd;
    padding: 15px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  }
  .card img {
    max-width: 100%;
    height: auto;
    border-radius: 4px;
  }
  </style>
  