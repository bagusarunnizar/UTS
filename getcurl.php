<?php
$curl = curl_init():
curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://harber.mimoapps.xyz/api/getaccess.php',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING =>'',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIME OUT => 0,
    CURLOPT_FOLLOWCATION => true,
    CURLOPT_HTTP_VERSION => CURLOP_HTTP_VERSION_1_1,
    CURLOPT_COSTUMREQUEST => "get"
));  

$response = curl_exec($curl);
curl_close($curl1);
$response_array = json_decode($response,true);

$onscreen = '<table class="table" width="100%">
<thead>
<th>MESSAGE</th>
<th>STATUS</th>
<th>COMMENT</th>
<th>TAG<th/>
<th>SUPPORT<th/>
</thead>
';
foreach ($response_array as $resp) {
    $onscreen.='<tr>
    <td>'.$resp['message'].'</td>
    <td>'.$resp['status'].'</td>
    <td>'.$resp['comment'].'</td>
    <td>'.$resp['tag'].'</td>
    <td>'.$resp['support'].'</td>
    </tr>';
}
$onscreen.='</table>';
echo $onscreen;
    