<?php
     if (isset($update['update']['message']['reply_markup']['rows'])) {
          if($chatID == -1001099489988){
         $data["data"]["msgid"] = $msg_id;
         file_put_contents("data.json",json_encode($data));
            foreach ($update['update']['message']['reply_markup']['rows'] as $row) {
                foreach ($row['buttons'] as $button) {
                    $button->click();
               }
            }
             $MadelineProto->messages->sendMessage(['peer' => 370106794, 'reply_to_msg_id' => $msg_d ,'message' =>'یه سکه گرفتم!','parse_mode' => 'MarkDown']);
}
         
}
    