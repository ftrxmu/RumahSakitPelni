<?php

namespace App\Http\Controllers\AuditInternal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AuditInternal\formStatusTemuanAuditInternal;

class formStatusTemuanAuditInternalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = formStatusTemuanAuditInternal::all();
        dd($data);
        return view('03.07_form_status_temuan_audit_internal', [
            'pageName' => '03.07 Status Temuan Audit Internal'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
