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
        <input type="text" v-model="form.tipoMembresia" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('tipoMembresia'), 'form-control-success': fields.tipoMembresia && fields.tipoMembresia.valid}" id="tipoMembresia" name="tipoMembresia" placeholder="{{ trans('admin.membresium.columns.tipoMembresia') }}">
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


