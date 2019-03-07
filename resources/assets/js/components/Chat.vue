<style scoped>

</style>
<template lang="html">
    <div class="chat">
        <h5 class="chat-title">
            session with {{type === 'user' ? 'Dr. ' + session.doctor.firstname : session.user.firstname }}
        </h5>
        <chat-box v-bind:chats="chats"
                  v-bind:user_type="type">
        </chat-box>
        <chat-control v-bind:session_id=session.id
                      v-bind:chats="chats"
                      v-bind:user_type="type">
        </chat-control>
    </div>
</template>

<script>
    export default {
        props: [
            'chats', 'type', 'session'
        ]
    }
</script>
