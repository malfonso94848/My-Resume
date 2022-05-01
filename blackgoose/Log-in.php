<?php
    if(isset($_COOKIE["signedup"]) ) {
        echo("You were logged in using cookies.");
    } else {
        echo("We appologize but we could not find the cookies stored on your computer.")
    }