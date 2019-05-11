<template>
    <div class="content-wrap  courses-grid-v1-page">
        <div class="container-fluid">
            <div class="content-page-wrap">
                <div class="flat-courses clearfix isotope-courses">
                    <div :class="'course one-of-four text-'+color(colors)" v-for="product in products">
                        <div class="course-border border-f-e6f3ff border-ra4 transition-vline">
                            <div class="course-img img-vline">
                                <a :href="`/product/${product.slug}`"><img :src="product.product_image_preview"
                                                 alt="bookflare"></a>
                                <div class="overlay">
                                    <span class="vline"></span>
                                    <span class="vline vline-bottom"></span>
                                </div>
                            </div>
                            <div class="course-content">
                                <div class="text-wrap border-bt-e6f3ff">
                                    <h6 class="title"><a :href="`/product/${product.slug}`">{{product.product_name}}</a></h6>
                                    <p class="teacher"><a href="#">{{product.farmer}}</a></p>
                                    <p class="description">{{product.summary}}</p>
                                </div>

                                <div class="wrap-rating-price">

                                    <div class="wrap-rating">
                                        <star-rating :rating="Number(product.rating.split(';')[0])" :increment="0.01" :read-only="true" :star-size="13" :show-rating="false"></star-rating>
                                        <span>{{Number(product.rating.split(';')[0])}}
                                                ({{Number(product.rating.split(';')[1])}})</span>
                                    </div>
                                    <span class="price">&euro;{{product.amount.toLocaleString('en', {maximumSignificantDigits: 2})}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- /.product -->
            </div> <!-- /.flat-products -->
        </div> <!-- /.content-page-wrap -->
        <br>
        <div class="flat-paginations style2">
            <paginate
                    :page-count="pageCount"
                    :click-handler="getAllProducts"
                    :prev-text="'Prev'"
                    :next-text="'Next'"
                    container-class="list flat-text-center pagination-wrap"
                    active-class=" active"
                    disabled-class="disabled"
            >
            </paginate>
        </div>
    </div> <!-- /.container -->
    <!-- /.content-wrap -->
</template>
<script>
    import Paginate from 'vuejs-paginate'
    import axios from 'axios';
    
    export default {
        data() {
            return {
                pageCount: 1,
                products:   []
            }
        },
        components: {
            'paginate': Paginate
        },
        computed:   {},
        created() {
            this.getAllProducts();
        },
        methods:    {
            color(colors) {
                return this.colors[Math.floor(Math.random() * colors.length)];
            },
            getAllProducts(page = 1) {
                axios.get(`/api/home/products/?count=8&page=${page}`)
                    .then(({data}) => {
                        console.log(data)
                        this.products = data.data;
                        this.pageCount = data.last_page;
                    });
            }
        },
        props:      {
            colors:   Array,
            category: String
        }
    }
</script>