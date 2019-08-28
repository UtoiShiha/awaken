<template lang="pug">
  #app
    router-link(to="/") Home
    router-link(to="/foo") Test

    router-view
</template>


<script>
export default {
  name: 'App',
  components: {
  }
}
</script>