<template>
    <div class="MessageComposer">
        <textarea v-model="message" @keydown.enter="send" placeholder="message ..."></textarea>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                message: ''
            }
        },
       methods:{
           send(){
               if (this.message == ''){
                   return;
               }
               this.$emit('send',this.message);
               this.message = null;
           }
       }
    }
</script>

<style scoped>

</style>