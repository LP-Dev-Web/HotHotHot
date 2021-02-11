<?php


namespace App\Controllers;



use App\Core\System\Controller;
use App\Core\Classes\{Token, Validator};
use App\Models\{RolesModel, UsersModel};

final class RegisterController extends Controller
{
    public function index()
    {
        $this->render(name_file: 'account/register', title: 'Inscription');
    }

    public function signUpSystem()
    {
        $user = new UsersModel();
        $role = new RolesModel();
        $validator = new Validator($_POST);

        $information = $user->findOneBy([
            'email' => $_POST['email'] ??= null
        ]);

        $loginRole = $role->findById(1);

        $validator->validate([
            'last_name' => ['alpha', 'required'],
            'first_name' => ['alpha', 'required'],
            'email' => ['email', 'required'],
            'password' => ['required', "equal:{$_POST['password_verify']}"],
            'password_verify' => ['required']
        ]);

        $matchValue = $validator->matchValue([
            'email' => $information['email'] ??= null,
        ]);

        if ($validator->isSuccess() && !$matchValue) {
            $token = Token::generate(15);

            $user->setLastName($_POST['last_name']);
            $user->setfirstName($_POST['first_name']);
            $user->setEmail($_POST['email']);
            $user->setPassword(password_hash($_POST['password'], PASSWORD_BCRYPT));
            $user->setRoleId($loginRole['id']);
            $user->setToken(hash('sha512', $token));
            $user->create();

            foreach ($_POST as $k => $v) $_SESSION[$k] = $v;
            $_SESSION['token'] = $token;

            $message = [
                'success' => true
            ];
        } else {
            $message = [
                'message' => $validator->displayErrors(),
                'success' => false
            ];
        }

        $this->json($message);
    }
}