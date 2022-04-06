<?php

namespace App\Http\Livewire\Library\ManageIssue;

use App\Models\IssueBook;
use Livewire\Component;

class RecentIssue extends Component
{
    public $issues;
    public function render()
    {
        $this->issues = IssueBook::orderBy('id', 'desc')->get();
        return view('livewire.library.manage-issue.recent-issue');
    }
}
