<template>
  <router-view></router-view>
   <div id="app">
    <HeaderBar />
    <div class="main-section columns">  
    <main class="column">
        <Heroes />
        <Nav />
      </main>
    </div>
  </div>
</template>
<!-- <script>

import HeaderBar from './components/header-bar';
import Heroes from './components/heroes';
import Nav from './components/nav';
import Nav from './components/nav.vue';

export default {
  name: 'App',
  components: { HeaderBar, Heroes, Nav, Nav },
};
</script> -->

<!-- <style lang="scss">
@import './design/index.scss';
</style> --> 
