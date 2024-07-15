import AppForm from '../app-components/Form/AppForm';

Vue.component('membresium-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                nombreMembresia:  '' ,
                tipoMembresia:  '' ,
                valorMembresia:  '' ,
                descripcionMembresia:  '' ,
                
            }
        }
    }

});