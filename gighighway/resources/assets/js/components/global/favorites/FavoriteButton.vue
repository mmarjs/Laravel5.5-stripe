<style>

</style>

<template>
    <div>
        <div>
            <sweet-modal ref="login">
                <login-form action="favorite a vendor" :callback="handleLogin"></login-form>
                <button slot="button" class="btn btn-default btn-sm" @click="$refs.login.close()">Cancel</button>
            </sweet-modal>
        </div>
        <button class="btn btn-warning btn-tile" v-if="isFavorited" @click="unfavorite()">
            <span v-if="loading"> <i class="fa fa-spin fa-spinner"></i> Loading... </span>
            <span v-else>Unfavorite</span>
        </button>
		@if({{ Auth::user()->type}}!='Vendor')
		<button class="btn btn-primary btn-tile" v-else @click="addToFavorites()">
            <span v-if="loading"> <i class="fa fa-spin fa-spinner"></i> Loading... </span>
            <span v-else>Add to Favorites</span>
        </button>
		@endif
        
    </div>
</template>

<script>
    import { EventBus } from "../../../eventBus";
    import LoginForm from '../LoginForm'
    import { SweetModal } from 'sweet-modal-vue'


    export default {
        props: ['vendor', 'user'],
        data() {
            return {
                vmFavorites: [],
                loading: false,
                requiresLogin: false,
                requiresLoginAction: null,
            }
        },
        mounted() {
            this.vmFavorites = (this.user) ? this.user.favorites : [];
            EventBus.$on('favorites:updated', function(favorites) {
                this.vmFavorites = favorites;
            }.bind(this));

            EventBus.$on('auth:loggedIn', function(user) {
                if(this.requiresLoginAction) {
                    this.$refs.login.close()
                    this.requiresLoginAction();
                    this.requiresLoginAction = null;
                    this.requiresLogin = false;
                }
            }.bind(this))
        },
        computed: {
            isFavorited() {
                for(var i in this.vmFavorites) {
                    if(this.vmFavorites[i].id == this.vendor.id) {
                        return true;
                    }
                }
                return false;
            }
        },
        methods: {
            unfavorite() {
                this.loading = true;
                axios.post('/api/vendors/'+this.vendor.id+'/unfavorite').then(function(response) {
                    this.loading = false;
                    if(response.data.success) {
                        this.vmFavorites = response.data.favorites;
                        EventBus.$emit('favorites:updated', response.data.favorites);
                    }
                }.bind(this),
                    function(response) {
                        this.loading = false;
                        this.requiresLogin = true;
                        this.requiresLoginAction = this.unfavorite;
                        this.$refs.login.open()
                    }.bind(this))
            },
            addToFavorites() {
                var vm = this;
                this.loading = true;
                axios.post('/api/vendors/'+this.vendor.id+'/favorite').then(function(response) {
                    this.loading = false;
                    if(response.data.success) {
                        EventBus.$emit('favorites:updated', response.data.favorites);
                    }
                }.bind(this),
                function(response) {
                    this.loading = false;
                    this.requiresLogin = true;
                    this.requiresLoginAction = this.addToFavorites;
                    this.$refs.login.open()
                }.bind(this)
                )
            },
            handleLogin(user) {

            }
        },
        components: { LoginForm, SweetModal }
    }
</script>
