<?php
  // echo exec('docker exec -it apache bash -c "cd /var/www/html/verification_study/ && java -jar hut.jar 10084"');
  exec('java -jar hut.jar 10084 > /dev/null 2>&1 & echo $!', $output);
  echo $output[0];
?>