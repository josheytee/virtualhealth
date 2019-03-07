<style scoped>
    .chat-control {
        flex-direction: row;
        width: 100%;
        border: none;
    }
</style>
<template lang="html">
    <div class="chat-control">
        <div class="row">
            <div class="progress" id="progress" style="display: none">
                <div class="determinate" v-bind:style="'width: '+uploadPercentage+'%'"></div>
            </div>
            <div class="input-field inline col s6 ">
                <input type="text" id="message" class="materialize-textarea"
                       v-on:keyup.enter="sendChat"
                       v-model="data"/>
                <label for="message">Message</label>
            </div>
            <div class="input-field inline col s6">

                <input type="file" ref="file" id="file" name="file" style="display: none"/>
                <button type="button" class="btn btn-default" v-on:click="sendImage">i</button>
                <button type="button" class="btn btn-default" v-on:click="sendVideo">v</button>
                <button type="button" class="btn btn-default" v-on:click="sendAudio">a</button>
                <button type="button" class="btn btn-default" v-on:click="sendDoc">d</button>
            </div>
            <!-- <div class="input-field inline col s2">
                <input type="button" class="btn btn-default" value="send" v-on:click="sendChat"/>
            </div> -->
        </div>
    </div>
</template>

<script>
    export default {
        props: ['session_id', 'chats', 'user_type'],
        data() {
            return {
                data: '',
                uploadPercentage: 0,
                url: '/virtualhealth/public/sessions/'
            }
        },
        methods: {
            sendChat: function (e) {
                if (this.data !== '') {
                    let post = {
                        data: this.data,
                        type: 'text',
                        session_id: this.session_id,
                    };
                    this.data = '';
                    let chat_url = this.url;
                    chat_url += (this.user_type !== undefined && this.user_type === 'doctor') ?
                        'sendDoctorChat' : 'sendUserChat';
                    axios.post(chat_url, post)
                        .then((response) => this.chats.push(response.data))
                        .catch((error) => console.log(error));
                }
            },
            sendFile: function (e, type) {
                e.preventDefault();
                let file = $("#file");
                file.trigger('click');
                file.change(e => {
                        let options = {
                            headers: {
                                'Content-Type': 'multipart/form-data'
                            },
                            onUploadProgress: function (progressEvent) {
                                let pro = document.getElementById('progress');
                                pro.setAttribute('style', 'display:block');
                                this.uploadPercentage = Math.round((progressEvent.loaded * 100) / progressEvent.total);
                                if (this.uploadPercentage === 100) {
                                    pro.setAttribute('style', 'display:none');
                                }
                            }.bind(this)
                        };
                        let file_url = this.url;
                        file_url += (this.user_type !== undefined && this.user_type === 'doctor') ?
                            'sendDoctorFile' : 'sendUserFile';
                        let formData = new FormData();
                        formData.append('file', this.$refs.file.files[0]);
                        formData.append('type', type);
                        formData.append('session_id', this.session_id);
                        if (file.val() !== '') {
                            axios.post(file_url, formData, options)
                                .then((response) => this.chats.push(response.data))
                                .catch((error) => console.log(error));
                        }
                    }
                )
                ;
            },
            sendVideo: function (e) {
                this.sendFile(e, 'video');
            }
            ,
            sendImage: function (e) {
                this.sendFile(e, 'image');
            }
            ,
            sendAudio: function (e) {
                this.sendFile(e, 'audio');
            }
            ,
            sendDoc: function (e) {
                this.sendFile(e, 'document');
            }
        }
    }
</script>
