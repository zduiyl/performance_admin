<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConnectionInfoRequest extends FormRequest
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
//            'title' => 'required|unique:posts|max:255',
//            'body' => 'required',
            'id'=>'sometimes|required|integer',
            'type'=>'required|max:255',
            'host'=>'required|ip',
            'port'=>'required|integer|between:1,65535',
        ];
    }

    /**
     * 获取已定义验证规则的错误消息
     *
     * @return array
     */
    public function messages()
    {
        return [
            'type.required' => 'A type is required',
            'host.required' => 'host message is required',
            'port.required' => 'port message is required',
        ];
    }

    /**
     * 获取验证错误的自定义属性
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'email' => 'email address',
        ];
    }


}
