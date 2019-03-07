<style scoped>
    .chat-box {
        width: 100%;
        padding: 20px;
        margin-bottom: 20px;
        max-height: 700px;
        margin-left: 4px;
        overflow-x: auto;
    }

    .no-message {
        height: 200px;
        display: flex;
        font-size: xx-large;
        align-items: center;
    }
</style>
<template lang="html">
    <div class="chat-box" v-if="chats.length !== 0">
        <div v-for="chat in chats" style="overflow: auto;">
            <chat-message v-bind:chat="chat"
                          v-bind:user_type="user_type"/>
        </div>
    </div>
    <div v-else class="no-message">
        There are no message
    </div>
</template>

<script>
    export default {
        name: "ChatBox",
        props: ['chats', 'user_type'],
        mounted() {

        },
    }
</script>

<style scoped>

</style>