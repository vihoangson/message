<?php

namespace Message;

trait ResponseStandar {

    private function sentResponse($errorCode, $errorMsg, $data) {
        return [
            "error_code" => $errorCode,
            "error_msg"  => $errorMsg,
            "data"       => $data,
        ];
    }

    protected function sentResponseSuccessful($data) {
        return $this->sentResponse(0, 0, $data);
    }

    protected function sentResponseFail($errorCode, $errorMsg, $data) {
        if ($errorCode == 0) {
            throw new \Exception('Error format response');
        }

        return $this->sentResponse($errorCode, $errorMsg, $data);
    }
}
