<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tender;
use Auth;
use Session;

class TenderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $tenders = Tender::where('author', '=', Auth::user()->id)->orderBy('id', 'desc')->paginate(10);

        // return a view and pass in the var with posts
        return view('tenders.index')->withTenders($tenders);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tenders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         // validate the data
        $this->validate($request, array (
            'title' => 'required|max:255',
            'slug' => 'required|alpha_dash|min:5|max:255|unique:tenders,slug',
            'body' => 'required'

        ));

        //store in the DB
        $tender = new Tender;

        $tender->title = $request->title;
        $tender->slug = $request->slug;
        $tender->body = $request->body;
        $tender->author = Auth::user()->id;

        $tender->save();

        Session::flash('success', 'Тендер успешно опубликован! Ждите предложения!');

        //redirect to another page

        return redirect()->route('tenders.show', $tender->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tender = Tender::find($id);
        return view('tenders.show')->withTender($tender);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tender = Tender::find($id);
        // return a view with this post var
        return view('tenders.edit')->withTender($tender);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // validate the data
        $tender = Tender::find($id);

        if ($request->input('slug') == $tender->slug) {
            $this->validate($request, array (
            'title' => 'required|max:255',
            'body' => 'required'
        ));} else{
        $this->validate($request, array (
            'title' => 'required|max:255',
            'slug' => 'required|alpha_dash|min:5|max:255|unique:tenders,slug',
            'body' => 'required'
        ));}

        //update in the DB
        $tender = Tender::find($id);

        $tender->title = $request->input('title');
        $tender->slug = $request->input('slug');
        $tender->body = $request->input('body');

        $tender->save();

        Session::flash('success', 'Информация о тендере была успешно обновлена');

        //redirect to another page

        return redirect()->route('tenders.show', $tender->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tender = Tender::find($id);
         $tender->delete();
         Session::flash('success', 'Тендер был успешно удален');
        return redirect()->route('tenders.index');
    }
}
