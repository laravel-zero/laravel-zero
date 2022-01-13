<?php

it('inspire artisans', function () {
    $this->artisan('inspire')->assertExitCode(0);
});
