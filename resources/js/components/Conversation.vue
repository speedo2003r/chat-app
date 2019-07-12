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
                if (!this.contact){
                    return;
                }
                axios.post('/conversation/send',{
                    contact_id: this.contact.id,
                    text: text
                }).then((response)=>{
                    this.$emit('new',response.data);
                })
            }
        },
        components:{
            MessageFeed,
            MessageComposer,
        }
    }
</script>

<style scoped>
    .Conversation{
        flex: 5;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }
</style>