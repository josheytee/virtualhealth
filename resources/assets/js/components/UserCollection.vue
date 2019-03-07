<style scoped>
</style>
<template lang="html">
    <ul>
        <li>Active Users</li>
        <li>
            <div class="input-field">
                <input type="search" v-model="search" class="search" id="search"/>
                <label for="search">Search ...</label>
            </div>
        </li>
        <li v-for="doctor in filteredDoctors">
            <a v-bind:href="url +''">
                <div>
                    {{ doctor.firstname }} {{ doctor.lastname.toUpperCase() }}
                </div>
            </a> 
        </li>
    </ul>
</template>

<script>
    export default {
        props: [
            "users",'sessions'
        ],
        data() {
            return {
                url:'/virtualhealth/public/session/',
                search: ''
            }
        },
        methods: {
            sendGet: function () {
                console.log(this.$refs.doctor_1);
            }
        },
        computed: {
            filteredDoctors: function () {
                return this.users.filter((doctor) => {
                    let reg = new RegExp(this.search + ".*", 'ig');
                    return (doctor.firstname.match(reg) || doctor.lastname.match(reg));
                });
            }
        }

    };
</script>
