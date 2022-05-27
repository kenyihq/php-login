<?php
    function validate_message($message) {
        if (!empty($message)) {
            switch ($message) {
                case 'Successfully created new user':
                    $res_message = "Successfully created new user, vengo del switch";
                    break;
                case 'password_mismatch':
                    $res_message = "Passwords don't match";
                    break;
                case 'password_empty':
                    $res_message = "Password can't be empty";
                    break;
                case 'email_empty':
                    $res_message = "Email can't be empty";
                    break;
                case 'email_invalid':
                    $res_message = "Email is invalid";
                    break;
                case 'password_invalid':
                    $res_message = "Password is invalid";
                    break;
                case 'email_password_empty':
                    $res_message = "Email and password can't be empty";
                    break;
                case 'email_password_invalid':
                    $res_message = "Email and password are invalid";
                    break;
                default:
                    $res_message = "Error";
                    break;

                return $res_message;
            }
        }
    }
?>
