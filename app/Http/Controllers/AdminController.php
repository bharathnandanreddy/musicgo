<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\video;

class AdminController extends Controller
{

     protected $redirectTo = 'admin/home';
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    


    
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videos=video::orderBy('discription')->paginate(10);
        return view('admin.home',compact('videos'));
    }

       /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   $video=new video;
        $this->validate($request,[
            'link'=>'required',
            'description'=>'required'
        ]);
        $video->link=$request->link;
        $video->discription=$request->description; 
        $video->save();
        return redirect('/video');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item=video::find($id);
        return view("edit",compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    { $video=video::find($id);
        $this->validate($request,[
            'link'=>'required',
            'description'=>'required'
        ]);
        $video->link=$request->link;
        $video->discription=$request->description; 
        $video->save();
        return redirect('/video');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {$video=video::find($id);
        $video->delete();
     return redirect('/video');
    }

    public function search(Request $request)
    {
        $term=$request->term;
        $video=video::where('discription','LIKE','%'.$term.'%')->get();
        
        if(count($video)==0)
            $result='no item found'; 
        else
        {
            foreach ($video as $key => $value) {
                $result[]=$value->discription;
            }
        }
        return $result;
        }



    public function searchit(Request $request)
    {   
        $this->validate($request,[
            'item'=>'required'
        ]);
        $input=$request->item;
        $video=video::where('discription',$input)->first();;
        if($video)
         return redirect()->away($video->link);
        else
            return back();
        
    }




}
