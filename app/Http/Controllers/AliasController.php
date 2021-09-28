<?php

namespace App\Http\Controllers;

use App\Models\Alias;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class AliasController extends Controller
{
    public function index()
    {
        $aliases = Auth::user()->aliases()->paginate(10);

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
        $alias = Alias::factory()->create([
            'user_id' => Auth::user()->id,
            'burned' => false,
        ]);

        return redirect()->route('aliases.show', ['alias' => $alias]);
    }

    public function show(Alias $alias)
    {
        return view('resource.alias.show', ['alias' => $alias]);
    }

    public function edit(Alias $alias)
    {
        return view('resource.alias.edit', ['alias' => $alias]);
    }

    public function destroy(Alias $alias): RedirectResponse
    {
        $alias->delete();
        return redirect()->back();
    }

    public function burn(Alias $alias): RedirectResponse
    {
        $alias->burned = 1;
        $alias->save();
        return redirect()->back();
    }
}
