<?php

namespace App\Http\Requests;

use App\Models\Book;
use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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
            'code'=>['required'],
            'author'=>['required'],
            'title'=>['required'],
            'image'=> ['nullable', 'image'],
            'details'=> ['nullable'],
            'price'=> ['nullable'],
            'reck_no'=>['required'],
            'row_no'=>['required'],
            'col_no'=>['required'],
            'total'=>['required'],
            'available'=>['nullable'],
        ];
    }

    public function toArray() : array
    {
        return [
            'code'=> $this->code,
            'title'=> $this->title,
            'author'=> $this->author,
            'image'=> $this->getImageName(),
            'price'=> $this->price,
            'reck_no'=> $this->reck_no,
            'row_no'=> $this->row_no,
            'col_no'=> $this->col_no,
            'total'=> $this->total,
        ];
    }

    private function getImageName(){
        if ($this->image!=null) {
            return 'book_'.$this->code.'.'.$this->image->getClientOriginalExtension();
        }
        return null;
    }

    public function saveImage(){
        $this->image->move(Book::getImagePath(), $this->getImageName());
    }
}
