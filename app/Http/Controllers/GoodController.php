<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Good;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class GoodController extends Controller
{
    public function index()
    {
        $goods = Good::all();

        return view('good.index', compact('goods'));
    }

    public function show($id)
    {
        $good = Good::findOrFail($id);

        return view('good.show', compact('good'));
    }

    public function create(): View
    {
        $good = new Good();
        $categoryList = Category::all();

        return view('good.create', compact('good', 'categoryList'));
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'name' => 'required',
            'category' => 'required',
            'description' => 'min:3',
            'price' => 'required',
        ]);

        $good = new Good();
        $good->fill($data);
        $good->save();

        return redirect()
            ->route('goods.index');
    }

    public function edit($id)
    {
        $good = Good::findOrFail($id);
        $categoryList = Category::all();

        return view('good.edit', compact('good', 'categoryList'));
    }

    /**
     * @throws ValidationException
     */
    public function update(Request $request, $id): RedirectResponse
    {
        $good = Good::findOrFail($id);
        $data = $request->validate([
            'name' => 'required',
            'category' => 'required',
            'description' => 'min:3',
            'price' => 'required',
        ]);

        $good->fill($data);
        $good->save();
        return redirect()
            ->route('goods.index');
    }

    public function destroy($id): RedirectResponse
    {
        $good = Good::find($id);
        if ($good) {
            $good->delete();
        }
        return redirect()
            ->route('goods.index');
    }
}
