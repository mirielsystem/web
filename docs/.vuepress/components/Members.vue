<template>
    <div class="card-container">
      <div v-for="member in members" :key="member.name" class="card">
        <img :src="member.img" :alt="member.alt">
        <h4>{{ member.name }}</h4>
        <p>{{ member.role }}</p>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        members: [
          {
            img: 'https://avatars.githubusercontent.com/u/168396067?v=4',
            alt: 'Miriel',
            name: 'Miriel (mirielnet)',
            role: 'President / Head / Lead Developer'
          },
          {
            img: 'https://avatars.githubusercontent.com/u/106049626?v=4',
            alt: 'MilkChan(みるくちゃん)',
            name: 'MilkChan(みるくちゃん)',
            role: 'Founder & Tester'
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
  