<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class signupRequest extends FormRequest
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

    
    public function rules()
    {
        return [
            'name'=>'required|max:255|string',
            'age'=>'numeric',
            'date'=>'string',
            'phone'=>'numeric',
            'web'=>'string',
            'address'=>'string'
        ];
    }
    public function messages()
    {
        return[
            'name.string'=>'Vui lòng điền cho đúng nha',
            'name.required'=>'Viết vào đeeeeee',
            'name.max:255'=>'ơDài quá rồi điền lại đeeeee',
            'age.numeric'=>'Nhập tủi cho đúm',
            'date.string'=>'Vui lòng điền lại ngày tháng',
            'phone.numeric'=>'Kiểm tra lại số điện thoại',
            'web.string'=>'Kiểm tra lại ký tự',
            'address.string'=>'vui lòng nhập lại địa chỉ'
        ];
    }
}
