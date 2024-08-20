<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group row align-items-center" :class="{'has-danger': errors.has('nombre'), 'has-success': fields.nombre && fields.nombre.valid }">
                <label for="nombre" class="col-form-label text-md-right col-md-3">Nombres</label>
                <div class="col-md-9">
                    <input type="text" v-model="form.nombre" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('nombre'), 'form-control-success': fields.nombre && fields.nombre.valid}" id="nombre" name="nombre" placeholder="{{ trans('admin.cliente.columns.nombre') }}">
                    <div v-if="errors.has('nombre')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('nombre') }}</div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group row align-items-center" :class="{'has-danger': errors.has('celular'), 'has-success': fields.celular && fields.celular.valid }">
                <label for="celular" class="col-form-label text-md-right col-md-3">Teléfono celular</label>
                <div class="col-md-9">
                    <input type="text" v-model="form.celular" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('celular'), 'form-control-success': fields.celular && fields.celular.valid}" id="celular" name="celular" placeholder="{{ trans('admin.cliente.columns.celular') }}">
                    <div v-if="errors.has('celular')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('celular') }}</div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group row align-items-center" :class="{'has-danger': errors.has('email'), 'has-success': fields.email && fields.email.valid }">
                <label for="email" class="col-form-label text-md-right col-md-3">Email</label>
                <div class="col-md-9">
                    <input type="text" v-model="form.email" v-validate="'required|email'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('email'), 'form-control-success': fields.email && fields.email.valid}" id="email" name="email" placeholder="{{ trans('admin.cliente.columns.email') }}">
                    <div v-if="errors.has('email')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('email') }}</div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group row align-items-center" :class="{'has-danger': errors.has('fechaInicio'), 'has-success': fields.fechaInicio && fields.fechaInicio.valid }">
                <label for="fechaInicio" class="col-form-label text-md-right col-md-3">Inicio de la membresía</label>
                <div class="col-md-9">
                    <div class="input-group input-group--custom">
                        <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                        <datetime v-model="form.fechaInicio" :config="datePickerConfig" v-validate="'required|date_format:yyyy-MM-dd HH:mm:ss'" class="flatpickr" :class="{'form-control-danger': errors.has('fechaInicio'), 'form-control-success': fields.fechaInicio && fields.fechaInicio.valid}" id="fechaInicio" name="fechaInicio" placeholder="{{ trans('brackets/admin-ui::admin.forms.select_a_date') }}"></datetime>
                    </div>
                    <div v-if="errors.has('fechaInicio')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('fechaInicio') }}</div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group row align-items-center" :class="{'has-danger': errors.has('fechaFin'), 'has-success': fields.fechaFin && fields.fechaFin.valid }">
                <label for="fechaFin" class="col-form-label text-md-right col-md-3">Fecha de finalización</label>
                <div class="col-md-9">
                    <div class="input-group input-group--custom">
                        <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                        <datetime v-model="form.fechaFin" :config="datePickerConfig" v-validate="'required|date_format:yyyy-MM-dd HH:mm:ss'" class="flatpickr" :class="{'form-control-danger': errors.has('fechaFin'), 'form-control-success': fields.fechaFin && fields.fechaFin.valid}" id="fechaFin" name="fechaFin" placeholder="{{ trans('brackets/admin-ui::admin.forms.select_a_date') }}"></datetime>
                    </div>
                    <div v-if="errors.has('fechaFin')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('fechaFin') }}</div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group row align-items-center" :class="{'has-danger': errors.has('valorTotal'), 'has-success': fields.valorTotal && fields.valorTotal.valid }">
                <label for="valorTotal" class="col-form-label text-md-right col-md-3">{{ trans('admin.cliente.columns.valorTotal') }}</label>
                <div class="col-md-9">
                    <input type="text" v-model="form.valorTotal" v-validate="'required|decimal'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('valorTotal'), 'form-control-success': fields.valorTotal && fields.valorTotal.valid}" id="valorTotal" name="valorTotal" placeholder="{{ trans('admin.cliente.columns.valorTotal') }}">
                    <div v-if="errors.has('valorTotal')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('valorTotal') }}</div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group row align-items-center" :class="{'has-danger': errors.has('membresia_id'), 'has-success': fields.membresia_id && fields.membresia_id.valid }">
                <label for="membresia_id" class="col-form-label text-md-right col-md-3">{{ trans('admin.cliente.columns.membresia_id') }}</label>
                <div class="col-md-9">
                    <input type="text" v-model="form.membresia_id" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('membresia_id'), 'form-control-success': fields.membresia_id && fields.membresia_id.valid}" id="membresia_id" name="membresia_id" placeholder="{{ trans('admin.cliente.columns.membresia_id') }}">
                    <div v-if="errors.has('membresia_id')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('membresia_id') }}</div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group row align-items-center" :class="{'has-danger': errors.has('descuento_id'), 'has-success': fields.descuento_id && fields.descuento_id.valid }">
                <label for="descuento_id" class="col-form-label text-md-right col-md-3">{{ trans('admin.cliente.columns.descuento_id') }}</label>
                <div class="col-md-9">
                    <input type="text" v-model="form.descuento_id" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('descuento_id'), 'form-control-success': fields.descuento_id && fields.descuento_id.valid}" id="descuento_id" name="descuento_id" placeholder="{{ trans('admin.cliente.columns.descuento_id') }}">
                    <div v-if="errors.has('descuento_id')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('descuento_id') }}</div>
                </div>
            </div>
        </div>
    </div>
</div>
