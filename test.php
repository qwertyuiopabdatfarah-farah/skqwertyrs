<?php

$data = $_POST['date'];

echo date('Y-m-d',strtotime($data));

/*$pesan = urlencode($pesan);
        $data = "username=".$this->username."&hash=".$this->hash."&message=".$pesan."&sender=".$this->sender."&numbers=".$no."&test=".$this->test;
        $ch = curl_init('http://api.txtlocal.com/send/?');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch); // This is the result from the API
        curl_close($ch);*/

?>