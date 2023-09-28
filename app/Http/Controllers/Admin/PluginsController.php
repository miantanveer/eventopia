<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class PluginsController extends AdminBaseController
{
    public function index()
    {
        return view('content.admin.plugins.index');
    }

    public function plugin($plugin)
    {
        try {
            $this->env = new \CodeZero\DotEnvUpdater\DotEnvUpdater(base_path() . '/.env');
            return view('content.admin.plugins._' . $plugin, $this->data);
        } catch (\Throwable $th) {
            return response()->json(['success' => false, 'message' => 'Something went wrong!', 'error' => $th->getMessage()]);
        }
    }

    public function update(Request $req)
    {
        try {
            $env = new \CodeZero\DotEnvUpdater\DotEnvUpdater(base_path() . '/.env');
            $data = $req->except('_token', '_method');
            if (!array_key_exists("STRIPE_LIVE_MODE", $data)) {
                $data['STRIPE_LIVE_MODE'] = '';
            }
            foreach ($data as $key => $value) {
                $env->set($key, $value);
            }

            Artisan::call('config:clear');
            Artisan::call('queue:restart');

            return redirect()->back()->with('success', 'Credentials have been updated');
        } catch (\Exception $e) {
            //throw $e;
            return redirect()->back()->with('error', 'Credentials have not been updated');
        }
    }
}
