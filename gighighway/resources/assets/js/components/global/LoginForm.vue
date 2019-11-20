<style>

</style>

<template>
    <div>
        <p>Please sign in or register to {{ action }}.</p>
        <div v-if="form == 'login'">
            <div class="form form-horizontal">
                <div class="form-group">
                    <label class="col-sm-2 control-label">Email:</label>
                    <div class="col-sm-8">
                        <input type="text" v-model="email" class="form-control" placeholder="Email Address">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">Password:</label>
                    <div class="col-sm-8">
                        <input type="password" v-model="password" class="form-control" placeholder="Password">
                    </div>
                </div>

                <div class="form-controls">
                    <button class="btn btn-primary" @click="login()">Log In</button><br>
                    <a href="javascript:;" @click="form = 'register'">Don't have an account? Register here.</a>
                </div>
            </div>
        </div>
        <div v-else>
            <div class="form form-horizontal">
                <div class="form-group">
                    <label class="col-sm-2 control-label">First Name:</label>
                    <div class="col-sm-8">
                        <input type="text" v-model="first_name" class="form-control" placeholder="First Name">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">Last Name:</label>
                    <div class="col-sm-8">
                        <input type="text" v-model="last_name" class="form-control" placeholder="Last Name">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">Email:</label>
                    <div class="col-sm-8">
                        <input type="text" v-model="email" class="form-control" placeholder="Email Address">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">Password:</label>
                    <div class="col-sm-8">
                        <input type="password" v-model="password" class="form-control" placeholder="Password">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">Confirm Password:</label>
                    <div class="col-sm-8">
                        <input type="password" v-model="password_confirmation" class="form-control" placeholder="Confirm Password">
                    </div>
                </div>

                <div class="form-controls">
                    <button class="btn btn-primary" @click="register()">Register</button><br>
                    <a href="javascript:;" @click="form = 'login'">Already have an account? Login here.</a>

                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import {EventBus} from "../../eventBus";

    export default {
        props: ['action', 'callback'],
        data() {
            return {
                form: 'login',
                first_name: 'Justin',
                last_name: 'McCombs',
                email: 'jtmccombs18a33sdf23@gmail.com',
                password: 'Boomer88',
                password_confirmation: 'Boomer88'
            }
        },
        mounted() {

        },
        computed: {},
        methods: {
            login() {
                axios.post('/api/login', {email: this.email, password: this.password}).then(function(response) {
                    EventBus.$emit('auth:loggedIn', response.data.user);
                })
            },
            register() {
                axios.post('/api/register', {
                    first_name: this.first_name,
                    last_name: this.last_name,
                    email: this.email,
                    password: this.password,
                    password_confirmation: this.password_confirmation
                }).then(function(response) {
                    EventBus.$emit('auth:loggedIn', response.data.user);
                    if(this.callback) {
                        this.callback(response.data.user);
                    }
                }.bind(this))
            }
        },
        components: {}
    }
</script>
