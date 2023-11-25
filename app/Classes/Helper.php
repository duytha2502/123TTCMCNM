<?php
namespace App\Classes;
use Illuminate\Http\Request;
class Helper{
    public function __construct()
    {
    }
    public static function imageUpload(Request $request)
    {
        dd(1);
        if($request->hasFile('image')){
            if($request->file('image')->isValid()){
                $request->validate([
                    'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ]);
                $imageName = time().'.'.$request->image->extension();
                dd($imageName);
                $request->image->move(public_path('images'), $imageName);
                return $imageName;
            }
        }
        return "";
    } 
     public function __destruct()
    {
    }    
}
?>