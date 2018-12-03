<?php

namespace Packages\Acme\Controllers;

use App\Http\Controllers\Controller;
use Packages\Acme\Facades\Acme;

class AcmeController extends Controller
{

    public function WithoutFacadeOverride()
    {
        $msg = 'WithoutFacadeOverride';
        return view('acme::withoutfacadeoverride')->with( 'msg', $msg );
    }
    
    public function WithFacadeOverride()
    {
        
        return view('acme::withfacadeoverride')->with( 'msg', Acme::msg('WithFacadeOverride') );
        
    }    
    
}