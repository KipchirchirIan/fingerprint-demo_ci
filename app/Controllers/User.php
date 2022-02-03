<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use PHPUnit\Util\Json;

class User extends BaseController
{
    public function __construct()
    {
        $this->userModel = model('UserModel');
    }

    public function index()
    {
        //
    }

    public function register()
    {
        return view('register');
    }

    public function attemptRegister()
    {
        $rules = [
            'fullname' => ['label' => 'Full name', 'rules' => 'required|alpha_space']
        ];

        if (! $this->validate($rules)) {
            echo json_encode($this->validator->getErrors());
        }

        $name = $this->request->getPost('fullname');
        $fingerPrintData = $this->request->getPost('fpData');

        $post_data = [
            'full_name' => $name,
            'bmpbase64' => $fingerPrintData['BMPBase64'],
            'image_quality' => $fingerPrintData['ImageQuality'],
            'iso_template_base64' => $fingerPrintData['ISOTemplateBase64'],
            'nfiq' => $fingerPrintData['NFIQ'],
            'template_base64' => $fingerPrintData['TemplateBase64'],
        ];

        try {
            $userId = $this->userModel->insert($post_data);

            if ($userId) {
                echo json_encode([
                    'success' => 1,
                    'userId' => $userId,
                    'success_message' => 'Record saved successfully'
                ]);
            } else {
                echo json_encode([
                    'success' => 0,
                    'error_message' => 'Failed to save record',
                ]);
            }
        } catch (\Exception $e) {
            echo json_encode([
                'success' => 0,
                'error_message' => 'Something went wrong...',
            ]);
        }
    }

    public function login()
    {
        return view('login');
    }

    public function attemptLogin()
    {
    }
}
