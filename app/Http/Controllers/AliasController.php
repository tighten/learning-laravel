<?php

namespace App\Http\Controllers;

use App\Models\Alias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AliasController extends Controller
{
    public function index()
    {
        $aliases = Auth::user()->aliases()->paginate(25);

        return view('resource.index', [
            'name' => 'aliases',
            'param' => 'alias',
            'headers' => [
                'Name',
                'Phone',
                'Email',
                'Company',
            ],
            'fields' => [
                'name',
                'email',
                'phone',
                'company',
            ],
            'rows' => $aliases,
        ]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Alias $alias)
    {
        //
    }

    public function edit(Alias $alias)
    {
        //
    }

    public function update(Request $request, Alias $alias)
    {
        //
    }

    public function destroy(Alias $alias)
    {
        //
    }
}