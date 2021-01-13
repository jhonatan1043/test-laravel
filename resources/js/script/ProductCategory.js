export default {
    data() {
        return {
            idProduct: 0,
            arrayCategories: [],
            arrayProduct: []
        };
    },
    methods: {
        listProduct() {
            let me = this;
            axios
                .get("api/product/list")
                .then(function (response) {
                    me.arrayProduct = response.data;
                })
                .catch(function (error) {
                    console.log(error.message);
                });
        },

        save() {
            let me = this;
            axios
                .post("api/product/category/save", {
                    idProduct: me.idProduct,
                    arrayCategories: me.arrayCategories
                })
                .then(() => {
                    alert("¡ Registrado con Exito !");
                })
                .catch(err => {
                    console.error(err);
                });
        },
        listCategory() {
            let me = this;

            axios
                .get("api/product/category/get", {
                    params: {
                        idProduct: me.idProduct
                    }
                })
                .then(res => {
                    me.arrayCategories = res.data;
                })
                .catch(err => {
                    console.error(err);
                });
        }
    },
    created() {
        this.listCategory();
        this.listProduct();
    }
};
