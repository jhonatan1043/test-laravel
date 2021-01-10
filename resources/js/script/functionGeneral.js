export default {

    hide(form) {
        form.view = 0;
    },

    show(form) {
        form.view = 1;
    },

    new(form) {
        this.show(form);
        form.clean();
    },

    cancel(form) {
        this.hide(form);
        form.clean();
    },

    edit(form) {
        this.show(form);
       

    },

}
