<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Machine;
use App\Models\User;
use GuzzleHttp\Client;

class MachineController extends Controller
{

    public function index() {
        $users = User::all();

        return view('welcome', ['users' => $users]);
    }

    public function createMachine() {

    $machines = Machine::all();

        return view('applications.create');
   }

   public function listMachine() {
       
    $machines = Machine::where([
        ['status', '=', '1']
    ])->get();

    return view('applications.list',['machines' => $machines]);
   }

   public function archivedMachine() {
       
    $machines = Machine::where([
        ['status', '=', '0']
    ])->get();

    return view('applications.archived',['machines' => $machines]);
   }

   public function store(Request $request) {

    $machine = new Machine;

    $machine->created_at = "now";
    $machine->updated_at = "now";
    $machine->cliente = $request->cliente;
    $machine->clientesenha = $request->clientesenha;
    $machine->maxusers = $request->maxusers;
    $machine->createdby = $request->createdby;
    $machine->status = 1;

            // Cliente Inf \\
            $CLIENTE = $request->cliente;
            $CLPASS = $request->clientesenha;
    
            // Auth Keys \\
            $token = 'uw3che9Aimitheephesh';
            $auth = 'BuildUser';
            $passwordAuth = '1186347eb8ddb71876e878dfbcc621c671';
            
            $authStr = $auth.':'.$passwordAuth;
            $authEncoded = base64_encode($authStr);
    
            // Initialize Guzzle client
            $client = new Client(['headers'=>['Authorization'=>'Basic '.$authEncoded,]]);
    
            // Create a POST request
            $response = $client->request(
                'POST',
                'https://jenkins.vt-dev.vrglass.com/job/Deploy%20Vt-PRD/buildWithParameters',
                [
                    'form_params' => [
                        'token'=>$token,
                        'CLIENTE'=>$CLIENTE,
                        'SENHACLIENTE'=>$CLPASS,
                    ]
                ]
            );

    $machine->save();
    
    return redirect('/applications/listApplication')->with('msg', 'Application has been created!');

   }

   public function show($id) {

    $machine = Machine::findOrFail($id);

    return view('applications.show', ['machine' => $machine]);

   }

}
