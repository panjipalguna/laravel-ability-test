<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class StoreBookRequest extends FormRequest
{
    public function rules()
    {
        return [
            'judul'     => [
                'required',
                'unique:books',
            ],
            'tahun'    => [
                'required',
            ],
            'pengarang' => [
                'required',
            ],
            'penerbit' => [
                'required',
            ],


        ];
    }

    public function authorize()
    {
        return Gate::allows('book_access');
    }
}
