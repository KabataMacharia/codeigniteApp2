<?php

namespace telesign\sdk\autoverify;

use telesign\sdk\Example;
use telesign\sdk\ClientTest;

final class AutovVrifyClientTest extends ClientTest {

  const EXAMPLE_REFERENCE_ID = Example::REFERENCE_ID;

  function getRequestExamples () {
    return [
      [
        AutoVerifyClient::class,
        "status",
        [
          self::EXAMPLE_REFERENCE_ID,
          [ "optional_param" => "123" ]
        ],
        self::EXAMPLE_REST_ENDPOINT . "/v1/mobile/verification/status/" . self::EXAMPLE_REFERENCE_ID . "?optional_param=123",
        []
      ]
    ];
  }

}
