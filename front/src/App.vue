<template lang="pug">
  #app
    router-link(to="/") Home
    router-link(to="/foo") Test
    p {{page}}
    router-view
</template>


<script>
import userEnv from 'userEnv'
export default {
  name: 'App',
  components: {
  },
  data() {
    return {
      page:userEnv.apiUrl
    }
  },
}
</script>