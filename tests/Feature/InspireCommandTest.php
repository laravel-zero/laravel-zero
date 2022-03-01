<?php

it('inspires artisans', function () {
    $this->artisan('inspire')->assertExitCode(0);
});
