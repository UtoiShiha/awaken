<template lang="pug">
    div
        h1 {{message}}
</template>

<script lang="ts">
import { Component, Prop, Emit, Watch, Vue } from 'vue-property-decorator';

@Component
export default class Hello extends Vue{
    message: string = "Hello,World";
}
</script>
