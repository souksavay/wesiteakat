<?php
 
$qr_Header ="SELECT * FROM v_team WHERE status_id IN (1,2) ORDER BY langID ASC "; 
$qr_team_member ="SELECT * FROM v_member WHERE status_id IN (1,2) ORDER BY langID ASC "; 
$qr_Lang ="SELECT * FROM tb_lang "; 



?>