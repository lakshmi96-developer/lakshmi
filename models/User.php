<?php

namespace app\models;

use Yii;
use yii\base\NotSupportedException;
use yii\db\ActiveRecord;
use yii\base\Security;
use yii\web\IdentityInterface;


/**
 * This is the model class for table "users".
 *
 * @property integer $id
 * @property string $firstName
 * @property string $lastName
 * @property string $title
 * @property string $email
 * @property string $password
 * @property string $mobile
 * @property string $authKey
 * @property string $accessToken
 * @property string $activationLink
 * @property string $active
 * @property string $gender
 * @property integer $school
 * @property integer $batch
 * @property integer $psu_employer
 * @property string $address
 * @property integer $country
 * @property integer $city
 * @property string $current_employer
 * @property integer $sector
 * @property string $family_location
 * @property string $createdOn
 * @property string $lastUpdatedOn
 */

class User extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{
    public $password_repeat;
    
    public static function tableName()
    {
        return 'users';
    }
    
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['email', 'password', 'firstName', 'mobile'], 'required'],
            [['createdOn','lastUpdatedOn'], 'safe'],
            [['school', 'batch', 'country', 'city', 'psu_employer', 'sector'], 'integer'],
            [['address', 'family_location'], 'string'],
            [['email','password'], 'string', 'max' => 255],
            ['email', 'email'],
            [['authKey', 'accessToken'], 'string', 'max' => 50],
            [['activationLink', 'active', 'gender'], 'string', 'max' => 1],
            [['firstName','lastName','title','current_employer'], 'string', 'max' => 100],
            [['mobile'], 'string', 'max' => 20],
            [['email'], 'unique'],
            [['mobile'], 'unique'],
            [['mobile'], 'match', 'pattern' => '{^\+?[0-9-]+$}', 'message'=>"Invalid Mobile Number" ],
            ['password_repeat', 'required'],
            ['password_repeat', 'compare', 'compareAttribute'=>'password', 'message'=>"Passwords don't match" ],
        ];
    }
    
    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'firstName' => 'First Name',
            'lastName' => 'Last Name',
            'title' => 'Title',
            'email' => 'Email',
            'password' => 'Password',
            'mobile' => 'Mobile',
            'authKey' => 'Auth Key',
            'accessToken' => 'Access Token',
            'activationLink' => 'Activation Link',
            'active' => 'Active',
            'gender' => 'Gender',
            'school' => 'School',
            'batch' => 'Batch',
            'psu_employer' => 'Psu Employer',
            'address' => 'Address',
            'country' => 'Country',
            'city' => 'City',
            'current_employer' => 'Current Employer',
            'sector' => 'Sector',
            'family_location' => 'Family Location',
            'createdOn' => 'Created On',
            'lastUpdatedOn' => 'Last Updated On',
        ];
    }
    
    


    /**
     * @inheritdoc
     */
    public static function findIdentity($id)
    {
        $user = User::findOne($id);
        if(count($user)){
           return new static($user);
        }
        return null;
    }

    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        $user = User::find()->where(['accessToken'=>$token])->one();
        if(count($user)){
            return new static($user);
        }
        return null;
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByEmail($email)
    {
        $user = User::find()->where(['email'=>$email])->one();
        if(count($user)){
            return new static($user);
        }
        return null;
    }

    /**
     * @inheritdoc
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @inheritdoc
     */
    public function getAuthKey()
    {
        return $this->authKey;
    }

    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        //return $this->password === $password;
        return Yii::$app->getSecurity()->validatePassword($password, $this->password);
    }
    
    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            if ($this->isNewRecord) {
                $this->authKey = Yii::$app->getSecurity()->generateRandomString();
            }
            //if(isset($this->password)) 
                //$this->password = Yii::$app->getSecurity()->generatePasswordHash($this->password);
            return true;
        }
        return false;
    }
    
}
