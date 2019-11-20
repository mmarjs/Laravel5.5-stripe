<style>

</style>

<template>
    <div class="thumbnail">
        <a :href="'/' + vendor.slug" class="tile-link" style="overflow: hidden; position: relative;" v-if="vendor.images.length">
            <img :src="vendor.images[0].file_url" class="image-profile-tile" :alt="vendor.slug" style="position: absolute; width: 250px; height: auto; max-width: none; max-height: none; left: -2px; top: 0px;">

        </a>

        <div id="ribbon-container" v-if="vendor.is_special_featured">
            <a id="ribbon">Featured</a>
        </div>

        <div class="caption tile-caption">
            <div class="tile-caption-information">
                <h4>
                    <a :href="'/' + vendor.slug">{{ vendor.name }}</a><br>
                    <small v-if="vendor.primary_category">{{ vendor.primary_category.name }}</small>
                    <small v-if="vendor.location">{{ vendor.location.city }}, {{ vendor.location.state}}</small>
                </h4>
                <small><span id="hspProfileTile_NumberOfReviews">{{ vendor.review_count }}</span>{{ vendor.review_count}} reviews</small>
                <div class="rating" style="margin-top:-9px;" v-if="vendor.average_rating">
                    <span v-for="i in parseInt(vendor.average_rating)">&#9733</span><span v-for="i in 5-parseInt(vendor.average_rating)">&#9734</span>
                </div>
                <p>{{ vendor.description_brief }}</p>
            </div>

            <favorite-button :vendor="vendor" :user="user"></favorite-button>

            <review-button :vendor="vendor" :user="user"></review-button>

            <quote-button :vendor="vendor" :user="user"></quote-button>
            <br>
        </div>
    </div>
</template>

<script>
    import FavoriteButton from '../../global/favorites/FavoriteButton';
    import ReviewButton from '../../global/favorites/ReviewButton';
    import QuoteButton from '../../global/favorites/QuoteButton';

    export default {
        props: ['vendor', 'user'],
        data() {
            return {}
        },
        mounted() {

        },
        computed: {},
        methods: {},
        components: {
            FavoriteButton, ReviewButton, QuoteButton
        }
    }
</script>
