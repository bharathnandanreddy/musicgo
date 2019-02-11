<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\video;
use Illuminate\Support\Facades\Auth;
class searchControlleradmin extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:admin');
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