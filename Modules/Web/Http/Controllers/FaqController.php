<?php

namespace Modules\Web\Http\Controllers;

use App\Models\Faq;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Web\Http\Requests\CreatePostFaqRequest;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $faq = Faq::first();
            $contentFaq = json_decode($faq->content_faqs, true);
            return view('web::faq.outputFaq', compact('contentFaq'))->render();
        }
        $faq = Faq::first();
        return view('web::faq.index', compact('faq'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('web::faq.form');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(CreatePostFaqRequest $request)
    {
        //
        Faq::create($request->all());
        return response()->json('Berhasil menambahkan data', 201);
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('web::faq.show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $faq = Faq::find($id);
        $contentFaq = json_decode($faq->content_faqs, true);
        return view('web::faq.form', compact('faq', 'contentFaq'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(CreatePostFaqRequest $request, $id)
    {
        //

        Faq::find($id)->update($request->all());
        return response()->json('Berhasil mengubah data');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
        Faq::destroy($id);
        return response()->json('Berhasil hapus data');
    }

    public function getData()
    {
        $faq = Faq::first();
        return response()->json($faq);
    }
}
