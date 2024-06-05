<template>
    <header class="header">
      <div class="logo">
        <img src="../../../images/385_20240509201511.png" alt="mirielsystems.logo">
      </div>
      <div class="menu-toggle" @click="toggleMenu">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
          <path fill="none" d="M0 0h24v24H0z"/>
          <path d="M4 6h16v2H4zm0 5h16v2H4zm0 5h16v2H4z"/>
        </svg>
      </div>
      <nav class="menu-links" :class="{ open: isMenuOpen }">
        <p><a href="/">ホーム</a></p>
        <p><a href="/blog">ブログ</a></p>
      </nav>
    </header>
  </template>
  
  <script>
  export default {
    data() {
      return {
        isMenuOpen: false
      };
    },
    methods: {
      toggleMenu() {
        this.isMenuOpen = !this.isMenuOpen;
      }
    }
  }
  </script>
  
  <style>
  .header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #333;
    padding: 10px 20px;
    color: #fff;
  }
  .logo img {
    width: 100px; /* ロゴの幅を指定 */
    height: auto; /* 高さを自動調整 */
    }
  .menu-toggle {
    display: none;
    cursor: pointer;
    font-size: 20px;
  }
  .menu-toggle svg {
    width: 24px;
    height: 24px;
    fill: #fff;
    transition: transform 0.3s ease;
  }
  .menu-toggle.open svg {
    transform: rotate(90deg);
  }
  .menu-links {
    display: flex;
  }
  .menu-links a {
    margin-left: 20px;
    color: #fff;
    text-decoration: none;
  }
  .menu-links a:hover {
    text-decoration: underline;
  }
  @media (max-width: 768px) {
    .menu-links {
      display: none;
      flex-direction: column;
      position: absolute;
      top: 50px;
      left: 0;
      width: 100%;
      background-color: #333;
      padding: 10px 20px;
    }
    .menu-links.open {
      display: flex;
    }
    .menu-links a {
      margin: 10px 0;
    }
    .menu-toggle {
      display: block;
    }
  }
  </style>
  