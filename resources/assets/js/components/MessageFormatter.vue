<style scoped>

</style>
<template lang="html">
    <div>
        <div v-if="chat.type==='image'">
            <img v-bind:src="url+chat.data" alt="" width="100%">
        </div>
        <div v-else-if="chat.type==='video'">
            <video width="320" height="240" controls>
                <source v-bind:src="url+chat.data" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <div v-else-if="chat.type==='audio'">
            <audio controls>
                <source v-bind:src="url+chat.data" type="audio/mpeg">
                Your browser does not support the audio element.
            </audio>
        </div>
        <div v-else-if="chat.type==='document'">
            <a v-bind:href="url+chat.data">{{chat.data}}</a>
        </div>
        <div v-else>
            {{chat.data}}
        </div>
    </div>

</template>

<script>
    export default {
        name: "MessageFormatter",
        props: ['chat'],
        data() {
            return {
                url: '/virtualhealth/public/storage/'
            }
        }

    }
</script>

<style scoped>

</style>