import functionGeneral from '../script/functionGeneral';

export default {
    data() {
        return {
            view: 0,
            idSale: 0,
            arrayProduct: [],
            arrayAddres: [],
            array: [],
            idLocation: 0,
            idProduct: 0,
            quantity: 0,
        };
    },
    methods: {

        newSale() {
            functionGeneral.new(this);
        },

        cancelSale() {
            functionGeneral.cancel(this);
        },

        editSale(array) {
            functionGeneral.edit(this);
            this.load(array);
        },

        load(array) {
            this.idSale = array.id_sale;
            this.idLocation = array.id_location;
            this.idProduct = array.id_product;
            this.quantity = array.quantity;
            this.edit = 1;
        },

        clean() {
            this.idLocation = 0;
            this.idProduct = 0;
            this.quantity = 0;
            this.edit = 0;
        },

        list() {
            let me = this;
            axios.get(" api/sale/list")
                .then(function (response) {
                    me.array = response.data;
                })
                .catch(function (error) {
                    console.log(error.message);
                })
        },

        listLocation() {
            let me = this;
            axios.get("api/location/list")
                .then(function (response) {
                    me.arrayAddres = response.data;
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

        saveSale() {
            let me = this;
            if (me.idLocation != 0 || me.idProduct != 0 || me.quality != 0) {
                axios.post("api/sale/save", {
                    idLocation: me.idLocation,
                    idProduct: me.idProduct,
                    quantity: me.quantity
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

        updateSale() {
            let me = this;
            if (me.idLocation != 0 || me.idProduct != 0 || me.quantity != 0) {
                axios.put("api/sale/update", {
                    idLocation: me.idLocation,
                    idProduct: me.idProduct,
                    quantity: me.quantity,
                    id: me.idSale
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

        deleteSale(idProduct) {
            let me = this;
            axios.get("api/sale/delete", idProduct)
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
        this.listLocation();
        this.listProduct();
    },
};