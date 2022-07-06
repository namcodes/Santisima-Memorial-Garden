<?php
session_start();
if (isset($_SESSION['client'])) {
    unset($_SESSION['client']);
    session_destroy();
    header("Location: ../");
} else {
    header("Location: ../");
}
