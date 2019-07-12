<template>
    <div class="Conversation">
        <h1>{{contact ? contact.name : 'select a Contact'}}</h1>
        <MessageFeed :contact="contact" :messages="messages"></MessageFeed>
        <MessageComposer @send="sendMessage"></MessageComposer>
    </div>
</template>

<script>
    import MessageFeed from './MessageFeed';
    import MessageComposer from './MessageComposer';
    export default {
        props:['contact','messages'],
        methods:{
            sendMessage(text){
                console.log(text);
            }
        },
        components:{
            MessageFeed,
            MessageComposer,
        }
    }
</script>

<style scoped>

</style>