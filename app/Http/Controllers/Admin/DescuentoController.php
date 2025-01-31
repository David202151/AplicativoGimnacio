<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Descuento\BulkDestroyDescuento;
use App\Http\Requests\Admin\Descuento\DestroyDescuento;
use App\Http\Requests\Admin\Descuento\IndexDescuento;
use App\Http\Requests\Admin\Descuento\StoreDescuento;
use App\Http\Requests\Admin\Descuento\UpdateDescuento;
use App\Models\Descuento;
use Brackets\AdminListing\Facades\AdminListing;
use Exception;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class DescuentoController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexDescuento $request
     * @return array|Factory|View
     */
    public function index(IndexDescuento $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Descuento::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'nombreDescuento', 'fechaInicioDescuento', 'fechaVencimientoDescuento', 'valorDescuento', 'descripcion'],

            // set columns to searchIn
            ['id', 'nombreDescuento', 'descripcion']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.descuento.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.descuento.create');

        return view('admin.descuento.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreDescuento $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreDescuento $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the Descuento
        $descuento = Descuento::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/descuentos'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/descuentos');
    }

    /**
     * Display the specified resource.
     *
     * @param Descuento $descuento
     * @throws AuthorizationException
     * @return void
     */
    public function show(Descuento $descuento)
    {
        $this->authorize('admin.descuento.show', $descuento);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Descuento $descuento
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(Descuento $descuento)
    {
        $this->authorize('admin.descuento.edit', $descuento);


        return view('admin.descuento.edit', [
            'descuento' => $descuento,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateDescuento $request
     * @param Descuento $descuento
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateDescuento $request, Descuento $descuento)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values Descuento
        $descuento->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/descuentos'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/descuentos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyDescuento $request
     * @param Descuento $descuento
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyDescuento $request, Descuento $descuento)
    {
        $descuento->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyDescuento $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyDescuento $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    Descuento::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
