<div class="form-group row align-items-center" :class="{'has-danger': errors.has('nombreDescuento'), 'has-success': fields.nombreDescuento && fields.nombreDescuento.valid }">
    <label for="nombreDescuento" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.descuento.columns.nombreDescuento') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.nombreDescuento" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('nombreDescuento'), 'form-control-success': fields.nombreDescuento && fields.nombreDescuento.valid}" id="nombreDescuento" name="nombreDescuento" placeholder="{{ trans('admin.descuento.columns.nombreDescuento') }}">
        <div v-if="errors.has('nombreDescuento')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('nombreDescuento') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('fechaInicioDescuento'), 'has-success': fields.fechaInicioDescuento && fields.fechaInicioDescuento.valid }">
    <label for="fechaInicioDescuento" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.descuento.columns.fechaInicioDescuento') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-sm-8'">
        <div class="input-group input-group--custom">
            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
            <datetime v-model="form.fechaInicioDescuento" :config="datePickerConfig" v-validate="'required|date_format:yyyy-MM-dd HH:mm:ss'" class="flatpickr" :class="{'form-control-danger': errors.has('fechaInicioDescuento'), 'form-control-success': fields.fechaInicioDescuento && fields.fechaInicioDescuento.valid}" id="fechaInicioDescuento" name="fechaInicioDescuento" placeholder="{{ trans('brackets/admin-ui::admin.forms.select_a_date') }}"></datetime>
        </div>
        <div v-if="errors.has('fechaInicioDescuento')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('fechaInicioDescuento') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('fechaVencimientoDescuento'), 'has-success': fields.fechaVencimientoDescuento && fields.fechaVencimientoDescuento.valid }">
    <label for="fechaVencimientoDescuento" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.descuento.columns.fechaVencimientoDescuento') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-sm-8'">
        <div class="input-group input-group--custom">
            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
            <datetime v-model="form.fechaVencimientoDescuento" :config="datePickerConfig" v-validate="'required|date_format:yyyy-MM-dd HH:mm:ss'" class="flatpickr" :class="{'form-control-danger': errors.has('fechaVencimientoDescuento'), 'form-control-success': fields.fechaVencimientoDescuento && fields.fechaVencimientoDescuento.valid}" id="fechaVencimientoDescuento" name="fechaVencimientoDescuento" placeholder="{{ trans('brackets/admin-ui::admin.forms.select_a_date') }}"></datetime>
        </div>
        <div v-if="errors.has('fechaVencimientoDescuento')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('fechaVencimientoDescuento') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('valorDescuento'), 'has-success': fields.valorDescuento && fields.valorDescuento.valid }">
    <label for="valorDescuento" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.descuento.columns.valorDescuento') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.valorDescuento" v-validate="'required|decimal'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('valorDescuento'), 'form-control-success': fields.valorDescuento && fields.valorDescuento.valid}" id="valorDescuento" name="valorDescuento" placeholder="{{ trans('admin.descuento.columns.valorDescuento') }}">
        <div v-if="errors.has('valorDescuento')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('valorDescuento') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('descripcion'), 'has-success': fields.descripcion && fields.descripcion.valid }">
    <label for="descripcion" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.descuento.columns.descripcion') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.descripcion" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('descripcion'), 'form-control-success': fields.descripcion && fields.descripcion.valid}" id="descripcion" name="descripcion" placeholder="{{ trans('admin.descuento.columns.descripcion') }}">
        <div v-if="errors.has('descripcion')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('descripcion') }}</div>
    </div>
</div>


