<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ver;

class VerController extends Controller
{
    /**
     * バージョン一覧取得
     *
     * バージョン一覧の情報を返却する
     *
     * @response {
     *  "result": true,
     *  "version": "v1.0.1",
     *  "min_version": "v1.0.1"
     */
    public function index()
    {
       try {
            $version = Ver::first();
            $result = [
                'result'      => true,
                'version'     => $version->version,
                'min_version' => $version->min_version
            ];
        } catch(\Exception $e){
            $result = [
                'result' => false,
                'error' => [
                    'messages' => [$e->getMessage()]
                ],
            ];
            return $this->resConversionJson($result, $e->getCode());
        }
        return $this->resConversionJson($result);
    }

    private function resConversionJson($result, $statusCode=200)
    {
        if(empty($statusCode) || $statusCode < 100 || $statusCode >= 600){
            $statusCode = 500;
        }
        return response()->json($result, $statusCode, ['Content-Type' => 'application/json'], JSON_UNESCAPED_SLASHES);
    }
}
