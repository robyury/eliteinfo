<?php

namespace App\Http\Controllers;
use App\Models\Address;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    public static function GetUserAdresses()
    {
        if(!Auth::check())
        {
            return -1;
        }
        return Address::where('owner_id','=', auth()->user()->getAuthIdentifier())->leftJoin('lista_estados', 'user_adresses.state', '=', 'lista_estados.id_estado')->get();
    }

    public static function CreateAddress(Request $request)
    {
        $validate = Validator::make($request->all(),[
            'address' => ['required','regex:/^[\pL\d., -]+$/u'],
            'city' => ['required','regex:/^[\p{L} ]+$/u'],
            'zipcode' => ['required','size:8','regex:/^[0-9]+$/'],
            'state' => 'numeric|required',
        ]);

        if($validate->fails())
        {
            return back()->withErrors($validate);
        }

        if (!Auth::check()) {
            return -1;
        }

        $addr_list = self::GetUserAdresses();
        if (count($addr_list) >= 5){
            return -2;
        }

        $address = new Address();
        $address->owner_id = Auth()->user()->id;
        $address->address = $request->input('address');
        $address->zip_code = $request->input('zipcode');
        $address->city = $request->input('city');
        $address->state = $request->input('state');
        $address->save();
        return back()->withSuccess(1);
    }

    public static function DeleteAddress(Request $request)
    {
        $validate = $request->validate([
            'id' => 'numeric'
        ]);

        if(!Auth::check()){
            return -1;
        }

        $addr = Address::find($validate['id']);

        if(!$addr){
            return -2;
        }

        if($addr['owner_id'] != Auth()->user()->id)
        {
            return -3;
        }

        $addr->delete();
        return back()->withSuccess('1');
    }
}
