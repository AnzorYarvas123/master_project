<?php

session_start();
session_unset();
session_destroy();


echo "<script>window.location = 'http://localhost/master1/'</script>";
