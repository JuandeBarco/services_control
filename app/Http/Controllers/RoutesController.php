<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App;

class RoutesController extends Controller
{
    public function user_dashboard() {
        $services = App\Services::all();

        return view('user_dashboard', compact('services'));
    }

    public function new_service(Request $request) {
        //return $request->all();

        $request->validate([
            'service' => 'required'
        ]);

        $new_service = new App\Services;
        $new_service->name = $request->service;
        $new_service->user_id = 4; // id del usuario que lo registró

        $new_service->save();

        return back()->with('service_created', 'The service was created successfully!');
    }

    public function user_update_service($id) {
        $service = App\Services::findOrFail($id);

        return view('services_update', compact('service'));
    }

    public function update_service(Request $request, $id) {
        $service = App\Services::findOrFail($id);
        $service->name = $request->service;

        $service->save();

        return redirect()->route('user.dashboard');
    }

    public function delete_service($id) {
        $service = App\Services::findOrFail($id);
        $service->delete();

        return back()->with('service_deleted', 'The service was deleted successfully!');
    }
}
