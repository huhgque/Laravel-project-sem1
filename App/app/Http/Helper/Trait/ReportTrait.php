<?php

namespace App\Http\Helper\Trait;

trait ReportTrait {

    public function Status()
    {
        switch ($this->isAnswered) {
            case '0':
                return "Chưa phản hồi";
                break;
            
            case '1':
                return "Đã phản hồi";
                break;
            
            default:
                return "Lỗi!";
                break;
        }
    }
  
}