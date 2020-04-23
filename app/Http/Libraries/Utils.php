<?php

namespace App\Libraries {

    use Illuminate\Support\Facades\Response;

    class Utils
    {
        function json_response($code = 200, $message = null)
        {
            // return the encoded json
            return Response::json([
                'status' => $code < 300,
                'message' => $message
            ], $code);
        }
    }
}
