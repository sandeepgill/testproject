<?php

return [
  "fetch"       => PDO::FETCH_CLASS,
  "default"     => "mysql",
  "connections" => [
    "mysql" => [
      "driver"    => "mysql",
      "host"      => "localhost",
      "database"  => "dd_website",
      "username"  => "dd_web_user",
      "password"  => "dd_web@123",
      "charset"   => "utf8",
      "collation" => "utf8_unicode_ci",
      "prefix"    => ""
    ]
  ],
  "migrations" => "migration"
];