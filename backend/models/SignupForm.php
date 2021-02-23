<?php
namespace backend\models;

use Yii;
use yii\base\Model;
use common\models\User;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $nome;
    public $sobrenome;
    public $email;
    public $password;
    public $data_nascimento;


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            ['nome', 'trim'],
            ['nome', 'required'],
            ['nome', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This username has already been taken.'],
            ['nome', 'string', 'min' => 2, 'max' => 255],

            ['sobrenome', 'trim'],
            ['sobrenome', 'required'],
            ['sobrenome', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This username has already been taken.'],
            ['sobrenome', 'string', 'min' => 2, 'max' => 255],

            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This email address has already been taken.'],

            ['password', 'required'],
            ['password', 'string', 'min' => Yii::$app->params['user.passwordMinLength']],

            ['data_nascimento', 'required'],
        ];
    }

    /**
     * Signs user up.
     *
     * @return bool whether the creating new account was successful and email was sent
     */
    public function signup()
    {
        if (!$this->validate()) {
            return null;
        }
        
        $user = new User();
        $user->nome = $this->nome;
        $user->sobrenome = $this->sobrenome;
        $user->email = $this->email;
        $user->data_nascimento = $this->data_nascimento;
        $user->setPassword($this->password);
        $user->generateAuthKey();
        $user->generateEmailVerificationToken();
        return $user->save() && $this->sendEmail($user);

    }

    /**
     * Sends confirmation email to user
     * @param User $user user model to with email should be send
     * @return bool whether the email was sent
     */
    protected function sendEmail($user)
    {
        return Yii::$app
            ->mailer
            ->compose(
                ['html' => 'emailVerify-html', 'text' => 'emailVerify-text'],
                ['user' => $user]
            )
            ->setFrom([Yii::$app->params['supportEmail'] => Yii::$app->name . ' robot'])
            ->setTo($this->email)
            ->setSubject('Account registration at ' . Yii::$app->name)
            ->send();
    }
}
