<?php

if (!session_start()) {
    echo "PHP sessions could not be initialized.";
} else {
    echo "Hello World!\n";
}

?>
