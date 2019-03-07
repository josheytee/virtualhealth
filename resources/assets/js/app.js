/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('collection', require('./components/UserCollection.vue'));
Vue.component('information', require('./components/InformationBox.vue'));
Vue.component('chat', require('./components/Chat.vue'));
Vue.component('chat-box', require('./components/ChatBox.vue'));
Vue.component('chat-message', require('./components/ChatMessage.vue'));
Vue.component('message-formatter', require('./components/MessageFormatter.vue'));
Vue.component('chat-control', require('./components/ChatControl.vue'));

Vue.filter('to-uppercase', function (e) {
    return e.toUpperCase();
}); 
const app = new Vue({
        el: '.session-wrapper',
        data() {
            return {
                chats: [],
                url: '/virtualhealth/public'
            };
        },
        created() {
            const session_id = $('meta[name="session-id"]').attr('content');
            if (session_id !== undefined) {
                axios.get(this.url + '/session/chat/' + session_id).then((response) => {
                    this.chats = response.data;
                });
            }
            Echo.private('Session_' + session_id).listen('BroadcastChat', (e) => {
                // console.log(e);
                // this.chats.push(e);
            });
        }

    });
