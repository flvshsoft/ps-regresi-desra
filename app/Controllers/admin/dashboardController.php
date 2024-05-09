<?php

namespace App\Controllers\admin;

class dashboardController extends BaseController
{
    public function index()
    {
        $data['judul'] = 'Regresi Linear Desra';
        $data['kecamatan'] = $this->modelKecamatan
            ->findAll();
        $data['user'] = $this->mdUser
            ->findAll();
        $data['penduduk'] = $this->modelPenduduk
            ->findAll();

        $data['ipAddress'] = $_SERVER['REMOTE_ADDR'];

        // Set the default time zone
        date_default_timezone_set('Asia/Jakarta');

        // Get the current time in the specified format
        $data['loginTime'] = date('H:i:s T', $_SERVER['REQUEST_TIME']);

        // Using the request service to access UserAgent
        $request = \Config\Services::request();
        $userAgent = $request->getUserAgent();

        $data['os'] = $userAgent->getPlatform();

        // Get the full browser information string
        $browserInfo = $userAgent->getAgentString();

        // Extract the browser name from the user agent string
        $data['browser'] = $this->getBrowserName($browserInfo);

        return view('admin/dashboard', $data);
    }

    private function getBrowserName($agentString)
    {
        if (strpos($agentString, 'Chrome') !== false) {
            return 'Chrome';
        } elseif (strpos($agentString, 'Firefox') !== false) {
            return 'Firefox';
        } elseif (strpos($agentString, 'Safari') !== false) {
            return 'Safari';
        } elseif (strpos($agentString, 'Edge') !== false) {
            return 'Edge';
        } elseif (strpos($agentString, 'Opera') !== false || strpos($agentString, 'OPR') !== false) {
            return 'Opera';
        } else {
            return 'Unknown';
        }
    }
}