<?php
$domain ="https://www.wattpad.com/story/89979476";
$result = shell_exec("python cloudflare_bypass.py $domain");
echo $result;