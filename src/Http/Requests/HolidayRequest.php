<?php

namespace PersianWorkdays\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HolidayRequest extends FormRequest
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
            'date'=>'required|date',
            'title'=>'required|string',
        ];
    }

    /**
     * @return array
     */
    public function messages()
    {
        return [
          'date.required'=> 'فیلد تاریخ الزامی است.',
          'title.required'=> 'فیلد عنوان الزامی است.',
        ];
    }

}