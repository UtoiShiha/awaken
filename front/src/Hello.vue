<template lang="pug">
    div
        h1 {{message}}
        input(v-model="message")
        button(@click="clicked") CLICK
</template>

<script lang="ts">
import { Component, Prop, Emit, Watch, Vue } from 'vue-property-decorator';
import router from 'vue-router'
import axios from 'axios';
import userEnv from 'userEnv'
@Component
export default class Hello extends Vue{
    message: string = "Hello,World";

    clicked():void{
        this.message="clicked";
    }

    mounted():void{
        axios.get(userEnv.apiUrl+'/api/').then(response => (this.message = response.data))
    }
}
</script>
