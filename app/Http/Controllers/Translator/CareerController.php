<?php
namespace App\Http\Controllers\Translator;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Laravolt\Indonesia\Models\Province;
use Laravolt\Indonesia\Models\City;

use Illuminate\Http\Request;
class CareerController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $provinces = Province::pluck('name', 'id');
        return view('pages.translator.career', [
            'provinces' => $provinces,
            'user' => $user
            ]);
    }
    public function storeCities(Request $request){
        $cities = City::where('province_id', $request->get('id'))->pluck('name', 'id');
        return response()->json($cities);
    }
}
?>