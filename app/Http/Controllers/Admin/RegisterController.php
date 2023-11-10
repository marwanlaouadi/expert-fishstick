<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    protected $redirectTo = RouteServiceProvider::admin;

    public function __construct()
    {
        $this->middleware('guest:admin');
    }

    public function showRegistrationForm()
    {
        return view('admin.register');
    }

    protected function guard()
    {
        return Auth::guard('admin');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'full_name' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:admins'],
            'phone_number' => ['required', 'string', 'max:15'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    protected function create(array $data)
    {
        return RegisterController::create([
            'name' => $data['name'],
            'full_name' => $data['full_name'],
            'address' => $data['address'],
            'email' => $data['email'],
            'phone_number' => $data['phone_number'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
