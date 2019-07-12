<template>
    <div class="chat-app">
        <Conversation :contact="selectedContact" :messages="messages" @new="saveNewMessage"></Conversation>
        <ContactList :contacts="contacts" @selected="startConversationWith"></ContactList>
    </div>
</template>

<script>
    import Conversation from './Conversation';
    import ContactList from './ContactList';
    export default {
        props:[
            'user'
        ],
        data(){
            return {
                selectedContact: null,
                messages: [],
                contacts: [],
            }
        },
        mounted() {
            axios.get('/contacts').then((response)=>{
                this.contacts = response.data;
            })
        },
        methods: {
            startConversationWith(contact){
               axios.get(`/conversation/${contact.id}`).then((response)=>
                   this.messages = response.data,
                   this.selectedContact = contact
               );
            },
            saveNewMessage(text){
                this.messages.push(text);
            }
        },
        components:{
            Conversation,
            ContactList,
        }
    }
</script>

<style scoped>
    .chat-app{
        display: flex;
        height: 500px;
    }
</style>