<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public $first_Name;
    public $last_name;
   // public $full_name;

    public function setFirstName($firstName)
    {
        $this->first_Name = $firstName;
    }

    public function getFirstName()
    {
        return $this->first_Name;
    }

    public function setLastName($lastName)
    {
        $this->last_name = $lastName;
    }

    public function getLastName()
    {

        return $this->last_name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {

        return $this->name;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getEmailVariables(){
        return ['full_name'=>$this->getName(),
            'email'=>$this->getEmail()];
    }


}
