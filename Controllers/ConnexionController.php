<?php


namespace App\Controllers;



use App\Core\Classes\Token;
use App\Core\Classes\Validator;
use App\Models\UsersModel;

final class ConnexionController extends Controller
{
    public function index()
    {
        $user = new UsersModel();

        if (isset($_POST['login'])) {

            $information = $user->findOneBy([
                'email' => $_POST['email'],
                'password' => $_POST['password']
            ]);

            $validator = new Validator($_POST);

            $user_email = isset($information['email']) ? 'equal:' . $information['email'] : 'required';
            $user_passw = isset($information['password']) ? 'equal:' . $information['password'] : 'required';

            $validator->validate([
                'email' => ['email', $user_email],
                'password' => [$user_passw]
            ]);

            if (!empty($information)) {
                if ($validator->isSuccess()) {
                    $token = Token::generate(15);

                    $user->setId($information['id']);
                    $user->setToken(hash('sha512', $token));
                    $user->update();

                    $_SESSION['token'] = $token;
                    $_SESSION['id'] = $information['id'];

                    header('Location: /');
                    die();
                }
            } else {
                $_SESSION['error'] = 'Votre email ou votre mot de passe est invalide !';
            }
        }

        $this->render(name_file: 'hothothot/pages/connexion');
    }
}