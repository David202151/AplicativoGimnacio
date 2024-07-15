@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.membresium.actions.edit', ['name' => $membresium->id]))

@section('body')

    <div class="container-xl">
        <div class="card">

            <membresium-form
                :action="'{{ $membresium->resource_url }}'"
                :data="{{ $membresium->toJson() }}"
                v-cloak
                inline-template>
            
                <form class="form-horizontal form-edit" method="post" @submit.prevent="onSubmit" :action="action" novalidate>


                    <div class="card-header">
                        <i class="fa fa-pencil"></i> {{ trans('admin.membresium.actions.edit', ['name' => $membresium->id]) }}
                    </div>

                    <div class="card-body">
                        @include('admin.membresium.components.form-elements')
                    </div>
                    
                    
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" :disabled="submiting">
                            <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-download'"></i>
                            {{ trans('brackets/admin-ui::admin.btn.save') }}
                        </button>
                    </div>
                    
                </form>

        </membresium-form>

        </div>
    
</div>

@endsection