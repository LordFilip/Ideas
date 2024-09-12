<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Access\Gate;
use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(GateContract $gate)
    {
        
      /*  if ($gate->denies('admin')) {
            abort(403);
        }
*/    /*  $gate->authorize('admin');
*/
        
        return view('admin.dashboard');
    }
}
