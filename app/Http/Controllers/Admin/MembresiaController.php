<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Membresium\BulkDestroyMembresium;
use App\Http\Requests\Admin\Membresium\DestroyMembresium;
use App\Http\Requests\Admin\Membresium\IndexMembresium;
use App\Http\Requests\Admin\Membresium\StoreMembresium;
use App\Http\Requests\Admin\Membresium\UpdateMembresium;
use App\Models\Membresium;
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

class MembresiaController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexMembresium $request
     * @return array|Factory|View
     */
    public function index(IndexMembresium $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Membresium::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'nombreMembresia', 'tipoMembresia', 'valorMembresia', 'descripcionMembresia'],

            // set columns to searchIn
            ['id', 'nombreMembresia', 'tipoMembresia', 'descripcionMembresia']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.membresium.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.membresium.create');

        return view('admin.membresium.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreMembresium $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreMembresium $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the Membresium
        $membresium = Membresium::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/membresia'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/membresia');
    }

    /**
     * Display the specified resource.
     *
     * @param Membresium $membresium
     * @throws AuthorizationException
     * @return void
     */
    public function show(Membresium $membresium)
    {
        $this->authorize('admin.membresium.show', $membresium);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Membresium $membresium
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(Membresium $membresium)
    {
        $this->authorize('admin.membresium.edit', $membresium);


        return view('admin.membresium.edit', [
            'membresium' => $membresium,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateMembresium $request
     * @param Membresium $membresium
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateMembresium $request, Membresium $membresium)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values Membresium
        $membresium->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/membresia'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/membresia');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyMembresium $request
     * @param Membresium $membresium
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyMembresium $request, Membresium $membresium)
    {
        $membresium->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyMembresium $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyMembresium $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    Membresium::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
