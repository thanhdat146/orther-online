<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ThemDanhMuc extends FormRequest
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
            //
            'name'=>'unique:danhmuc,ten',
        ];
    }
    public function messege()
    {
        return [
            //
            'name.unique'=>'Tên danh mục đã có trong danh sách!',
        ];
    }
}
