<style scoped>
    .chat-message {
        max-width: 70%;
        box-shadow: inset 0 0 2px 0 greenyellow;
        border-radius: 20px;
        padding: 8px;
        margin: 4px;
        text-align: left;
    }
</style>
<template lang="html">
    <div>
        <div v-if="chat.chatable_type === 'VirtualHealth\\User' && user_type === 'user'" class="chat-message right">
            <message-formatter v-bind:chat="chat"/>
            <small> {{chat.created_at}}</small>
        </div>
        <div v-else-if="chat.chatable_type === 'VirtualHealth\\Doctor' && user_type === 'doctor'"
             class="chat-message right">
            <message-formatter v-bind:chat="chat"/>
            <small> {{chat.created_at}}</small>
        </div>
        <div v-else class="chat-message left">
            <message-formatter v-bind:chat="chat"/>
            <small> {{chat.created_at}}</small>
        </div>
    </div>

</template>

<script>
    export default {
        name: "ChatMessage",
        props: ['chat', 'user_type'],

    }
</script>

<style scoped>

</style>