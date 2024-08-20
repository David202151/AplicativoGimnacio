<div class="d-flex">
    
    <div class="form-group" style="flex: 1; margin-right: 20px;">
        <div :class="{'has-danger': errors.has('imagenMembresia'), 'has-success': fields.imagenMembresia && fields.imagenMembresia.valid }">
            <label for="imagenMembresia" class="col-form-label text-md-right">{{ trans('admin.membresium.columns.imagenMembresia') }}</label>
            <div>
                <!-- Display Image from URL -->
                <img src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.shape.com%2Ffitness%2Fworkouts%2F7-things-consider-when-choosing-gym&psig=AOvVaw20AZOvgR-cdZrw4CauhCM0&ust=1724243555194000&source=images&cd=vfe&opi=89978449&ved=0CBQQjRxqFwoTCKj61frJg4gDFQAAAAAdAAAAABAE" alt="Imagen de la membresia" style="width: 100%; margin-top: 20px;">
                
                <div v-if="errors.has('imagenMembresia')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('imagenMembresia') }}</div>
            </div>
        </div>
    </div>

    <div class="form-group w-100" style="flex: 2;">
        <div class="form-group row align-items-center" :class="{'has-danger': errors.has('nombreMembresia'), 'has-success': fields.nombreMembresia && fields.nombreMembresia.valid }">
            <label for="nombreMembresia" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.membresium.columns.nombreMembresia') }}</label>
                <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
                <input type="text" v-model="form.nombreMembresia" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('nombreMembresia'), 'form-control-success': fields.nombreMembresia && fields.nombreMembresia.valid}" id="nombreMembresia" name="nombreMembresia" placeholder="{{ trans('admin.membresium.columns.nombreMembresia') }}">
                <div v-if="errors.has('nombreMembresia')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('nombreMembresia') }}</div>
            </div>
        </div>

        <div class="form-group row align-items-center" :class="{'has-danger': errors.has('tipoMembresia'), 'has-success': fields.tipoMembresia && fields.tipoMembresia.valid }">
            <label for="tipoMembresia" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.membresium.columns.tipoMembresia') }}</label>
                <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
                    <select v-model="form.tipoMembresia" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('tipoMembresia'), 'form-control-success': fields.tipoMembresia && fields.tipoMembresia.valid}" id="tipoMembresia" name="tipoMembresia">
                        <option value="" disabled>{{ trans('admin.membresium.columns.tipoMembresia') }}</option>
                        <option value="option1">Normal</option>
                        <option value="option2">Pro</option>
                        <option value="option3">Premium</option>
                    </select>
                <div v-if="errors.has('tipoMembresia')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('tipoMembresia') }}</div>
            </div>
        </div>

        <div class="form-group row align-items-center" :class="{'has-danger': errors.has('valorMembresia'), 'has-success': fields.valorMembresia && fields.valorMembresia.valid }">
            <label for="valorMembresia" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.membresium.columns.valorMembresia') }}</label>
                <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
                <input type="text" v-model="form.valorMembresia" v-validate="'required|decimal'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('valorMembresia'), 'form-control-success': fields.valorMembresia && fields.valorMembresia.valid}" id="valorMembresia" name="valorMembresia" placeholder="{{ trans('admin.membresium.columns.valorMembresia') }}">
                <div v-if="errors.has('valorMembresia')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('valorMembresia') }}</div>
            </div>
        </div>

        <div class="form-group row align-items-center" :class="{'has-danger': errors.has('descripcionMembresia'), 'has-success': fields.descripcionMembresia && fields.descripcionMembresia.valid }">
            <label for="descripcionMembresia" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.membresium.columns.descripcionMembresia') }}</label>
                <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
                <input type="text" v-model="form.descripcionMembresia" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('descripcionMembresia'), 'form-control-success': fields.descripcionMembresia && fields.descripcionMembresia.valid}" id="descripcionMembresia" name="descripcionMembresia" placeholder="{{ trans('admin.membresium.columns.descripcionMembresia') }}">
                <div v-if="errors.has('descripcionMembresia')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('descripcionMembresia') }}</div>
            </div>
        </div>
    </div>
</div>



