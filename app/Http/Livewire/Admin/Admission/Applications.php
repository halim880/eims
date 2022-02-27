<?php

namespace App\Http\Livewire\Admin\Admission;

use App\Helpers\ApplicationStatus;
use App\Helpers\UserRole;
use App\Models\AdmissionApplication;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Applications extends Component
{
    public $applications;

    public function render()
    {
        $this->reloadApplications();

        return view('livewire.admin.admission.applications');
    }

    public function reloadApplications(){
        $this->applications = DB::table('admission_applications')
            ->where('status', ApplicationStatus::PENDING)
            ->get();
    }

    public function aprove($application_id){

        $application = AdmissionApplication::find($application_id);

        DB::transaction(function() use($application){
            $user = User::create([
                'name'=> $application->name,
                'email'=> $application->email,
                'password'=> bcrypt('password'),
            ]);

            DB::table('students')->insert([
                'id'=> 2022101509,
                'user_id'=> $user->id,
                'department_id'=> 101,
                'semester_id'=> 101,
                'session'=> '2021-2022',
                'dob'=> $application->dob,
                'phone'=> $application->phone,
                'father_name'=> $application->father_name,
                'mother_name'=> $application->mother_name,
                'current_address'=> $application->current_address,
                'permanent_address'=> $application->permanent_address,
            ]);

            $user->assignRole(UserRole::STUDENT);

            $application->status = ApplicationStatus::APROVED;

            $this->dispatchBrowserEvent('application_aproved');
        });

        $this->reloadApplications();
    }

    public function reject($application_id){
        // DB::table('admission_applications')->where('id', $application_id)->update([
        //     'status'=> ApplicationStatus::REJECTED,
        // ]);

        dd('Rejected');
    }
}
