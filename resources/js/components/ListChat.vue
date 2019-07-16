<template>
<div>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Text</th>
                <th scope="col">Created at</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="Message in Messages.data" :key="Message.id">
                <th scope="row"><input v-model="check" type="checkbox" :value="Message" :id="Message.id"></th>
                <td>{{Message.text}}</td>
                <td>{{Message.created_at}}</td>
            </tr>
        </tbody>
    </table>
    <button v-on:click="messagepageprev(Messages.prev_page_url)" class="btn btn-primary float-left">prev</button>
    <button v-on:click="messagepagenext(Messages.next_page_url)" class="btn btn-primary float-right">next</button>
</div>
</template>

<script>

export default {
    data(){
        return{
            url: '/paginate/messages',
            Messages:[],
            check:[],
        }
    },
    methods:{
        messagepageprev:function(value1){
            axios.get(value1).then((response)=>
                this.Messages = response.data,
            );
        },
        messagepagenext:function(value2){
            axios.get(value2).then((response)=>
                this.Messages = response.data,
            );
        },
        pushdata:function(value3){
            this.check.push(value3)
        }
    },
    mounted(){
        axios.get(this.url).then((response)=>
            // this.path = response.data,
            this.Messages = response.data,
        );
    }
}
</script>


