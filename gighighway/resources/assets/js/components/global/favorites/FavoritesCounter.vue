<style>

</style>

<template>
    <div style="display: inline-block;">
        <a class="btn btn-default" @click="showFavoritesModal()">
            <span class="pull-left">
                <span class="glyphicon glyphicon-heart"></span> Favorites
                <span>{{ vmFavorites.length }}</span>
            </span>
        </a>

        <sweet-modal ref="favorites" class="vue-dialog">
            <div v-if="vmUser">
                <table class="table table-striped table-hover" v-if="vmFavorites.length">
                    <thead>
                    <tr>
                        <th>Favorite Vendors</th>
                        <th>&nbsp;</th>

                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="vendor in vmFavorites">
                        <td>
                            <p class="h4">{{ vendor.name }}</p>
                        </td>
                        <td>
                            <button class="btn btn-primary btn-sm">Request a Quote</button>
                            <button class="btn btn-danger btn-sm" @click="removeFromFavorites(vendor)">x</button>

                        </td>
                    </tr>
                    </tbody>
                </table>
                <div v-else>You have no favorites.</div>

            </div>
            <div v-else>
                <login-form action="add favorites"></login-form>
            </div>

            <button slot="button" class="btn btn-default btn-sm" @click="$refs.favorites.close()">Close</button>
        </sweet-modal>
    </div>
</template>

<script>
    import { SweetModal } from 'sweet-modal-vue'
    import { EventBus } from "../../../eventBus";
    import LoginForm from '../LoginForm'

    export default {
        props: ['user', 'favorites'],
        data() {
            return {
                showModal: false,
                vmFavorites: [],
                vmUser: {}
            }
        },
        mounted() {
            this.vmFavorites = this.favorites;
            this.vmUser = this.user;
            EventBus.$on('favorites:updated', function(favorites) {
                this.vmFavorites = favorites;
            }.bind(this));

            EventBus.$on('auth:loggedIn', function(user) {
                this.vmUser = user;
            }.bind(this))
        },
        computed: {},
        methods: {
            showFavoritesModal()
            {
                console.log(this.$refs);
                this.$refs.favorites.open()
            },
            removeFromFavorites(vendor) {
                axios.post('/api/vendors/'+vendor.id+'/unfavorite').then(function(response) {
                    if(response.data.success) {
                        this.vmFavorites = response.data.favorites;
                        EventBus.$emit('favorites:updated', response.data.favorites);
                    }
                }.bind(this))
            }
        },
        components: { SweetModal, LoginForm}
    }
</script>
