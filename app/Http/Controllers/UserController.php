<?php
namespace App\Http\Controllers\API;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Traits\FuncionesGeneralesTrait;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public $successStatus = 200;
    use FuncionesGeneralesTrait;


    public function login(Request $request){
        $validator = Validator::make($request->all(), [
            'username' => 'required|string|min:5|max:50',
            'password' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()], 422);
        }

        if(Auth::attempt(['username' => request('username'), 'password' => request('password')])){
            $user = Auth::user();
            $this->reiniciar($ip);
            $success['token'] =  $user->createToken('MyApp')->accessToken;
            return response()->json(['success' => $success], $this->successStatus);
        }
        else{
            return response()->json(['error'=>'Credenciales equivocadas, verifíquelas'], 401);
        }
    }

    public function register(Request $request){
        
    }

    public function editar(Request $request){

    }

    public function detalle() {
        $user = Auth::user();
        if(!empty($user->persona_id)){
            $model = $this->obterDatos($user);
        }
        return response()->json(['success' => true,'data'=> $model], $this-> successStatus);
    }

    public function listar(){
        return response()->json(['success' => true,'data'=> User::all()], $this->successStatus);
    }

    public function cambiarContrasena(Request $request){
        $validator = Validator::make($request->all(), [
            'password' => 'required',
            'c_password' => 'required|same:new_password',
            'new_password' => 'required|string|min:6|max:30',
        ]);

        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()], 422);
        }

        if(Hash::check($request->password,Auth::user()->password )){

            $user = User::find(Auth::user()->id);
            $user->password = Hash::make($request->new_password);
            $user->save();

            return response()->json(['success'=>'Password actualizada'], $this->successStatus);
        }
        return response()->json(['error'=>'Password equivocado'], 422);
    }

    public function logout(){
        if (Auth::check()) {
           Auth::user()->AauthAcessToken()->delete();
           return response()->json(['success' => 'Sesion culminada'], $this->successStatus);
        }
    }

}
