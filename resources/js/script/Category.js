import functionGeneral from '../script/functionGeneral';

export default {
    data() {
        return {
            view: 0,
            idCategory: 0,
            name: "",
            edit: 0,
            array: [],
        };
    },
    methods: {

        newCetegory() {
            functionGeneral.new(this);
        },

        cancelCategory() {
            functionGeneral.cancel(this);
        },

        editCategory(array) {
            functionGeneral.edit(this);
            this.load(array);
        },

        load(array) {
            this.idCategory = array.id_category;
            this.name = array.name;
            this.edit = 1;
        },

        clean() {
            this.name = "";
            this.edit = 0;
        },

        list() {
            let me = this;
            axios.get("api/category/list")
                .then(function (response) {
                    me.array = response.data;
                })
                .catch(function (error) {
                    console.log(error.message);
                })
        },

        saveCategory() {
            let me = this;
            if (me.name != "") {
                axios.post("api/category/save", {
                    name: me.name
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

        updateCategory() {
            let me = this;
            if (me.name != "") {
                axios.put("api/category/update", {
                    name: me.name,
                    id: me.idCategory
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

        deleteCategory(idCategory) {
            let me = this;
            axios.get("api/category/delete", idCategory)
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