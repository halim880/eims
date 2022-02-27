<?php

namespace App\Models;

use App\Exceptions\RoleNotFoundException;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Helpers\UserRole;
use App\Models\Hostel\Provost;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'image',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function student(){
        return $this->hasOne(Student::class);
    }

    public function provost(){
        return $this->hasOne(Provost::class);
    }

    public function roles(){
        return $this->belongsToMany(Role::class);
    }

    public function assignRole($role){
        try {
            $role_id = Role::where('name', strtolower($role))->firstOrFail()->id;
            $this->roles()->attach($role_id);
            return true;
        } catch (ModelNotFoundException $th) {
            throw new RoleNotFoundException($role." role is not valid role.");
            return false;
        }
    }

    public function hasRole($role){
        return $this->roles()->where('name', $role)->first()!==null;
    }

    public function getRole() : string {
        if ($this->is_student) {
            return "Student";
        }
        if ($this->is_teacher) {
            return "Teacher";
        }
        if ($this->is_admin) {
            return "Admin";
        }
        if ($this->is_provost) {
            return "Provost";
        }
        if ($this->is_librarian) {
            return "Librarian";
        }
    }

    public function getIsStudentAttribute () :bool {
        if ($this->hasRole(UserRole::STUDENT)) {
            return true;
        }
        return false;
    }

    public function getIsProvostAttribute(): bool {
        if ($this->hasRole(UserRole::HOSTEL_PROVOST)) {
            return true;
        }
        return false;
    }

    public function getIsAdminAttribute(): bool {
        if ($this->hasRole(UserRole::ADMIN)) {
            return true;
        }
        return false;
    }

    public function getIsTeacherAttribute(): bool {
        if ($this->hasRole(UserRole::TEACHER)) {
            return true;
        }
        return false;
    }

    public function getIsLibrarianAttribute(): bool {
        if ($this->hasRole(UserRole::LIBRARIAN)) {
            return true;
        }
        return false;
    }
}
