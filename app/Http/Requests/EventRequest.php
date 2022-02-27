<?php

namespace App\Http\Requests;

use App\Models\Event;
use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title'=> ['required'],
            'description'=> ['required'],
            'image'=> ['nullable', 'image', 'mimes:jpg,png,jpeg'],
        ];
    }

    public function toArray()
    {
        return [
            'title'=> $this->title,
            'description'=> $this->description,
            'active'=> $this->active,
            'image'=> $this->getImageName(),
        ];
    }

    public function getImageName(){
        if ($this->image!=null) {
            return time().'.'.$this->image->getClientOriginalExtension();
        }
        return null;
    }

    public function storeImage(){
        $this->image->move(Event::getImagePath(), $this->getImageName());
    }
}
