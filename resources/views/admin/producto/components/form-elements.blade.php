<div class="form-group row align-items-center" :class="{'has-danger': errors.has('nombreProducto'), 'has-success': fields.nombreProducto && fields.nombreProducto.valid }">
    <label for="nombreProducto" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.producto.columns.nombreProducto') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.nombreProducto" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('nombreProducto'), 'form-control-success': fields.nombreProducto && fields.nombreProducto.valid}" id="nombreProducto" name="nombreProducto" placeholder="{{ trans('admin.producto.columns.nombreProducto') }}">
        <div v-if="errors.has('nombreProducto')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('nombreProducto') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('valorProducto'), 'has-success': fields.valorProducto && fields.valorProducto.valid }">
    <label for="valorProducto" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.producto.columns.valorProducto') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.valorProducto" v-validate="'required|decimal'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('valorProducto'), 'form-control-success': fields.valorProducto && fields.valorProducto.valid}" id="valorProducto" name="valorProducto" placeholder="{{ trans('admin.producto.columns.valorProducto') }}">
        <div v-if="errors.has('valorProducto')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('valorProducto') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('descripcion'), 'has-success': fields.descripcion && fields.descripcion.valid }">
    <label for="descripcion" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.producto.columns.descripcion') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.descripcion" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('descripcion'), 'form-control-success': fields.descripcion && fields.descripcion.valid}" id="descripcion" name="descripcion" placeholder="{{ trans('admin.producto.columns.descripcion') }}">
        <div v-if="errors.has('descripcion')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('descripcion') }}</div>
    </div>
</div>


