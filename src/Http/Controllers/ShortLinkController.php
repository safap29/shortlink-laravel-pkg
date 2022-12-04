<?php

namespace Packafa\ShortLink\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Packafa\ShortLink\Models\ShortLink;
use Illuminate\Support\Str;

class ShortLinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shortLinks = ShortLink::latest()->get();
        return view('shortenLink::shorten-link', compact('shortLinks'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'link' => 'required|url'
        ]);

        $input['link'] = $request->link;
        $input['code'] = Str::random(6);
        ShortLink::create($input);
        return redirect('generate-shorten-link')
            ->with('success', 'Shorten Link Generated Successfully!');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function shortenLink($code)
    {
        $find = ShortLink::where('code', $code)->first();
        return redirect($find->link);
    }

    
    /**
     * Delete a link.
     *
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $link = ShortLink::findOrFail($id);
        $link->delete();
        return redirect('generate-shorten-link')
            ->with('success', 'Shorten Link Deleted Successfully!');
    }
}
