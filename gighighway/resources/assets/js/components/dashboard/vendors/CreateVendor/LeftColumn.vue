<style>

</style>

<template>
    <div class="thumbnail">
        <a class="tile-link" style="overflow: hidden; position: relative;">
            <img v-if="vendor.profile_image" :src="vendor.profile_image.file_url" class="image-profile-tile" alt="gig-img" style="position: absolute; width: 253px; max-width: none; max-height: none; left: 0px; top: 0px;">
            <img v-else src="/images/ImageNotAvailable_Small.jpg" class="image-profile-tile" alt="gig-img" style="position: absolute; width: 253px; height: 253px; max-width: none; max-height: none; left: 0px; top: 0px;">
        </a>
        <div class="caption tile-caption">
            <div class="tile-caption-information">
                <h4>
                    <a ></a><br>
                    <small ></small><br>
                </h4>
                <small><span >{{ reviewCount }}</span> review<span v-if="reviewCount > 1">s</span></small>
                <div class="rating" style="margin-top:-9px;">
                    <span v-for="i in averageReviews">&#9733</span>
                    <span v-for="i in 5-averageReviews">&#9734</span>
                </div>
                <p ></p>
            </div>

            <p><a  class="btn btn-primary btn-tile disabled" target="_blank">Preview Profile</a></p>
            <p><a href="javascript:void(0);"  class="btn btn-primary btn-tile disabled">Upgrade to Featured</a></p>
        </div>
    </div>
</template>

<script>
    import _ from 'underscore'

    export default {
        props: ['vendor'],
        data() {
            return {}
        },
        mounted() {

        },
        computed: {
            reviewCount() {
                if(this.vendor.reviews && this.vendor.reviews.length) {
                    return this.vendor.reviews.length
                }
                return 0;
            },
            averageReviews() {
                // if(this.vendor.reviews && !this.vendor.reviews.length) return 0;
                // var reviewArr = [];
                // var sum = 0;
                // _.each(this.vendor.reviews, function(review) {
                //     reviewArr.push(review.rating)
                //     sum = sum + parseInt(review.rating)
                // });
                // return Math.round(sum/reviewArr.length);

                // remove below when we get the rest of it figure out
                return 0;
            },
        },
        methods: {},
        components: {}
    }
</script>
