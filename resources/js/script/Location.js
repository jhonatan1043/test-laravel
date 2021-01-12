import functionGeneral from '../script/functionGeneral';

export default {
    data() {
        return {
            view: 0,
            idLocation: 0,
            address: "",
            responsible: "",
            color: "",
            edit: 0,
            array: [],
        };
    },
    methods: {

        newLocation() {
            functionGeneral.new(this);
        },

        cancelLocation() {
            functionGeneral.cancel(this);
        },

        editLocation(array) {
            functionGeneral.edit(this);
            this.load(array);
        },

        load(array) {
            this.idLocation = array.id_location;
            this.address = array.address;
            this.responsible = array.name_responsible;
            this.color = array.color;
            this.edit = 1;
        },

        clean() {
            this.address = "";
            this.responsible = "";
            this.color = "";
            this.edit = 0;
        },

        list() {
            let me = this;
            axios.get("api/location/list")
                .then(function (response) {
                    me.array = response.data;
                })
                .catch(function (error) {
                    console.log(error.message);
                })
        },

        saveLocation() {
            let me = this;
            if (me.address != "" || me.responsible != "") {
                axios.post("api/location/save", {
                    address: me.address,
                    name_responsible: me.responsible,
                    color: me.color
                })
                    .then(() => {
                        functionGeneral.hide(this);
                        me.list();
                    })
                    .catch(function (error) {
                        console.log(error.message);
                    })
            } else {
                alert('todos los datos son obrigatorio')
            }
        },

        updateLocation() {
            let me = this;
            if (me.address != "" || me.responsible != "") {
                axios.put("api/location/update", {
                    address: me.address,
                    name_responsible: me.responsible,
                    color: me.color,
                    id: me.idLocation
                })
                    .then(() => {
                        functionGeneral.hide(this);
                        me.list();
                    })
                    .catch(function (error) {
                        console.log(error.message);
                    })
            } else {
                alert('todos los datos son obrigatorio')
            }
        },

        deleteLocation(idLocation) {
            let me = this;
            axios.get("api/location/delete", idLocation)
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