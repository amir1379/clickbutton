<?php
if (in_array($userID, $admins)){

if($msg == "/analy"){
              $MadelineProto->messages->sendMessage(['peer' => $chatID,'message' => "♦️آخرین پست بازدید شده :\n->[BazdidGir](https://t.me/BazdidGirPost/$msgid)",'parse_mode' => 'MarkDown']);
            }
 
    
    
    }
