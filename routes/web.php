<?php

use App\Http\Controllers\BrandAtmosphereImageController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\BrandHeroImageController;
use App\Models\Area;
use App\Models\Brand;
use App\Models\BrandHeroImage;
use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    $settings = DB::table("site_settings")->get()->last();
    return view('index', compact('settings'));
});
Route::get('/stay-connected', function () {
    return view('stay_connected');
})->name('stay-connected');
Route::get('/about', function () {
    return view('about');
})->name('front.about');
Route::get('/brands', function () {
    $brands = Brand::all();
    $images = BrandHeroImage::all();
    return view('brands', ['brands' => $brands, 'images' => $images]);
})->name('front-brands.index');
Route::get('brands/{id}', function (Request $request) {
    $brand = Brand::where('id', '=', $request->id)->with(['country', 'areas', 'images'])->get()->first();
    return view('brands-page', ['brand' => $brand]);
})->name('single-brand');
Route::get('brands/{id}/card', function (Request $request) {
    $brand = Brand::where('id', '=', $request->id)->get()->first();
    return view('brands-page-card', ['brand' => $brand]);
})->name('single-brand-card');
Route::view('contact-us/{type}', 'contact_form')->name('contact-us-view');
Route::post('submit-contact-use', function (Request $request) {
    $content = $request->except(["type", "_token"]);
    $type = $request->type;
    DB::table("contact_forms")->insert([
        'type' => $type,
        'content' => json_encode($content)
    ]);
    return redirect()->back()->with('message', "Thank you, we will contact you soon !");
})->name('submit-contact-use');
Route::post('submit-rate-message', function (Request $request) {
    DB::table("rate_messages")->insert([
        'r1' => $request->r1,
        'r2' => $request->r2,
        'r3' => $request->r3,
        'name' => $request->name,
        'email' => $request->email,
        'birth' => $request->birth,
        'message' => $request->message,
    ]);
    return redirect()->back()->with('message', "Thank you for your feedback");
})->name('submit-create-rate-messages');

// admin routes
Route::group(['middleware' => 'web', 'prefix' => 'admin'], function () {
    Route::view("/", 'admin.dashboard')->name('admin.index');
    Route::get("/settings-admin", function () {
        $data = DB::table('site_settings')->get();
        if (isset($data[0])) {
            $data = $data[0];
        } else {
            $data = [

            ];
        }
        return view('admin.settings-admin', ['data' => $data]);
    })->name('admin.settings-admin');
    Route::get("/edit-brand/{id}", function (Request $request) {
        $brand = Brand::find($request->id);
        return view('admin.edit-brand', ['brand' => $brand]);
    })->name('admin.edit-brand');
    Route::resource('brands', BrandController::class);
    Route::resource('brand-hero-images', BrandHeroImageController::class);
    Route::resource('brand-atmosphere-images', BrandAtmosphereImageController::class);
    // Global
    Route::get('contacts', function (Request $request) {
        $messages = DB::table('contact_forms')->orderBy('id', 'desc')->get();
        $tempCarriers = $messages->where('type', 'carriers');
        $carriers = [];
        foreach ($tempCarriers as $carrier) {
            $carriers[] = json_decode($carrier->content, true);
        }
        $tempInvestment = $messages->where('type', 'investment');
        $investments = [];
        foreach ($tempInvestment as $investment) {
            $investments[] = json_decode($investment->content, true);
        }


        $tempMarketing = $messages->where('type', 'marketing');
        $marketings = [];
        foreach ($tempMarketing as $marketing) {
            $marketings[] = json_decode($marketing->content, true);
        }
        return view('admin.contact-messages', ['carriers' => $carriers, 'investments' => $investments, 'marketings' => $marketings]);
    })->name('admin.contacts');
    Route::post('/country', function (Request $request) {
        $country = Country::find($request->id);
        if ($request->action === "update") {
            $country->name = $request->name;
            $country->save();
        } else {
            $country->delete();
        }

        return redirect()->back();
    })->name('country-controller');
    Route::post('/area', function (Request $request) {
        $area = Area::find($request->id);
        if ($request->action === "update") {
            $area->name = $request->name;
            $area->founded = $request->founded;
            $area->lat = $request["area-lat"];
            $area->lng = $request["area-lng"];
            $area->brand_id = $request->brand_id;
            $area->country_id = $request->country_id;
            $area->save();
        } else {
            $area->delete();
        }

        return redirect()->back();
    })->name('area-controller');
    Route::post('/footer', function (Request $request) {
        $data = $request->except('_token');

        if ($request->hasFile('video')) {
            $file = $request->file('video');
            $filename = Str::random(30) . '.' . $file->getClientOriginalExtension();
            $path = public_path() . '/uploads/';
            $file->move($path, $filename);
            $data["video"] = $filename;
        }
        if ($request->hasFile('mobile_video')) {
            $file = $request->file('mobile_video');
            $filename = Str::random(30) . '.' . $file->getClientOriginalExtension();
            $path = public_path() . '/uploads/';
            $file->move($path, $filename);
            $data["mobile_video"] = $filename;
        }
        DB::table("site_settings")->insert($data);
        return redirect()->back();
    })->name('settings-controller');
    Route::get("/rate-messages", function (Request $request) {
        $messages = DB::table("rate_messages")->get();
        return view("admin.rate-messages", ['messages' => $messages]);
    })->name("admin.rate-messages");
});
Auth::routes();
