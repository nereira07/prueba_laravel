<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;


class userrequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return TRUE;
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
            'name'=>'min:8|max:120|required',
            'email'=>'min:8|max:100|required|unique:users'
        ];
    }
}
