import AppForm from '../app-components/Form/AppForm';

Vue.component('cliente-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                nombre:  '' ,
                celular:  '' ,
                email:  '' ,
                fechaInicio:  '' ,
                fechaFin:  '' ,
                valorTotal:  '' ,
                membresia_id:  '' ,
                descuento_id:  '' ,
                
            }
        }
    }

});