<?php

    //Die and Dumb data for troubleshooting
    function dd($value): void {
        echo "<pre>";
            var_dump($value);
        echo "</pre>";

        die();
    }