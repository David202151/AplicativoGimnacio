import AppForm from '../app-components/Form/AppForm';

Vue.component('descuento-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                nombreDescuento:  '' ,
                fechaInicioDescuento:  '' ,
                fechaVencimientoDescuento:  '' ,
                valorDescuento:  '' ,
                descripcion:  '' ,
                
            }
        }
    }

});