import functionGeneral from '../script/functionGeneral';

export default {
    data() {
        return {
            view: 0,
            idProduct: 0,
            name: "",
            purchase_price: 0,
            spending: 0,
            price_finished: 0,
            edit: 0,
            array: [],
        };
    },
    methods: {

        newProduct() {
            functionGeneral.new(this);
        },

        cancelProduct() {
            functionGeneral.cancel(this);
        },

        editProduct(array) {
            functionGeneral.edit(this);
            this.load(array);
        },

        load(array) {
            this.idProduct = array.id_product;
            this.name = array.name;
            this.purchase_price = array.purchase_price;
            this.spending = array.spending;
            this.price_finished = array.price_finished;
            this.edit = 1;
        },

        clean() {
            this.name = "";
            this.purchase_price = 0;
            this.spending = 0;
            this.price_finished = 0;
            this.edit = 0;
        },

        list() {
            let me = this;
            axios.get(" api/product/list")
                .then(function (response) {
                    me.array = response.data;
                })
                .catch(function (error) {
                    console.log(error.message);
                })
        },

        saveProduct() {
            let me = this;
            if (me.name != "") {
                axios.post("api/product/save", {
                    name: me.name,
                    purchase_price : me.purchase_price,
                    spending : me.spending,
                    price_finished : me.price_finished
                })
                    .then(() => {
                        functionGeneral.hide(this);
                        me.list();
                    })
                    .catch(function (error) {
                        console.log(error.message);
                    })
            } else {
                alert('no hay datos para guardar')
            }
        },

        updateProduct() {
            let me = this;
            if (me.name != "") {
                axios.put("api/product/update", {
                    name: me.name,
                    purchase_price : me.purchase_price,
                    spending : me.spending,
                    price_finished : me.price_finished,
                    id: me.idProduct
                })
                    .then(() => {
                        functionGeneral.hide(this);
                        me.list();
                    })
                    .catch(function (error) {
                        console.log(error.message);
                    })
            } else {
                alert('no hay datos para actualizar')
            }
        },

        deleteProduct(idProduct) {
            let me = this;
            axios.get("api/product/delete", idProduct)
                .then(() => {
                    me.list();
                    alert('eliminado con exito');
                })
                .catch(function (error) {
                    console.log(error.message);
                })
        }
    },
    created() {
        this.list();
    },
};