<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class UpdateBookRequest extends FormRequest
{
    public function rules()
    {
        return [
            'judul'     => [
                'required',
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
