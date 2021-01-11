export default {
    data() {
        return {
            arrayCategories: [],
            arrayProduct: [],
        };
    },
    methods: {
        listCategory() {
            let me = this;
            axios.get("api/category/list")
                .then(function (response) {
                    me.arrayCategories = response.data;
                })
                .catch(function (error) {
                    console.log(error.message);
                })
        },
        listProduct() {
            let me = this;
            axios.get("api/product/list")
                .then(function (response) {
                    me.arrayProduct = response.data;
                })
                .catch(function (error) {
                    console.log(error.message);
                })
        },
    },
    created() {
        this.listCategory();
        this.listProduct();
    },
};