<?php

return [
    'alipay' => [
        'app_id'         => '2016101100659330',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAi5Q0liYeEYymK2FOcG/5l9nwm1+xvw0pByx9FMcqrFrcLw24+WnIyc8tbTCWDuY4yGcMfo1iMR5xQW+7ETo+HMX4Kky0Ftm38xeddG17R+v1wFz7puyE//ZUcpD/h2L6SE3asBUEu5eaFnmsTWQHbHy93sRgkPSDaktRW9tRjMPx2HTjfeAySfD+mK9y7+7lwp/FpUybGAPoR1jdhBBy8b49qgCRk2oVBelG/dxcH+OwTppY5tx/YemkEgey0C9WdDOOGp7EfFEDtIvNdMbD2zaJCtleRa9EOfYB9wC9Y06GYyfa+SaWMoZPbQhPuqqk6GfTTk1akNJ6fhfJoXfPtwIDAQAB',
        'private_key'    => 'MIIEowIBAAKCAQEA4mWnVxTXfNyuoTHksiFDUG3jwng/66CFWc5R7KY3exvGlvP2zI5uKVxn0VLr7V3ublL+AfjMAUIcw6cVT7rx1/fNqV2Ab/ZmiyM+rC5DpupD60un7gny/RtY3C3/NYmWKbCD6yz1yt7FolAKgfL4NqYfORXsVEXoSpXwm5cukt/rHP9RLX4ciEO6R49+8OZ31ziP1QF14rKZrZHsBdhK7d0DMjw4dioxsZ7hN9kq70oPL1o+/pF/o+Xz7k8f+qnIsZk5uIk2dgJeytOlC7OW8aFQta4tklz1FVeFU/1v2D2kGU2wt2dAyADhh91d+FpAD3+YnaNnwkK6KY9mac5h2wIDAQABAoIBAQDMxLzSWpt85+1bBtGe+87ylDII1tKZwBpc2+vla4GK69h2+DolUj35UwbjoWiazPa2+oGcLvf1u2Jg5GK2NpQ/jnaJ1XQx0F93QW2SNlYiRokf7NH6zyzkGTQKEeBfAA69rlXjBEtcLpn68QJP/v7aDu72pwmWP5SWwX9aeyc413M3imO5kGEqnoY2euY2G0SzexIzSrNfHWgM+AynLepARQw/XUUHfCVs4QUDZ8t8UvEmTUKUi+2maemMYvkYy7FHPPLGPq4lDcD+pQplKjw+DSay1SIz4yvkjmsxtUS5V/GY7h5J/Y9k/QdlL4EkGR7OGtYj8YKIuw4mwfwTM18BAoGBAPSNTjyNiU29I1tIZTCXXTKibRpU3s/2CEwkxYvh0jTbMK3sXzm4N1PPHY+8vYKwTxjoK0y/zTC5MBCGnXjssNqg2bPKvefpZrqdx/7OfqGebPvltKntAKxizz3ZWEYEKYhuCgrSIIvvT1hfQZybLVIBMXcve/r0KYdYTAJPFR17AoGBAOz+x/S8M13RiW9M1FMl3CTsp6PxcF/q+AtlG4Xsu3gDcIY+/5zbn02UzvHKy2+0O7zDiVxFphWoL5d4kcpzyd0SQjw8mNPGr/ccscea54ZvThXTz3q6QefjiCjMRKME9tk+DVsPL7CjOaUQztzDlwVqScJIwT/PnJ17xKGZRC8hAoGACyg/P4f9kaxlZo7A/xyIxfyfGapxl+9TpZWv5Zfh7UNqzySPm6SJ8arrYFluE/5TPYGqKBBAHk70oGxj1taFoxPfmtJPI7uEUlNMgpWNNXZy5nMucOo9M6A2cE3wNxGNi4npr2Cy12+NoSyHY8u4n5sqVJO4BlUJaAFhRmGxRu0CgYBfrXRYT2qFY8SSVHgboVtA5PHA9AYkEx5Uq1rzNGFy0CCrcd+MGfY0QfFSGEcNL7w2NtLLl6q3b5DXG+vvydMjFu36l5QzWzFLGCCFrvntgh4KHdrTd0KINYmQvvauwaBOkAigTH86Vos9Io4A/k2H+CMS9oBeHJjj00XM361xQQKBgADDaRQ7bJOQzXET0xf2QmdRmt6BkJ4UAe36Zf+xokpHfXRwdyJGoZMyjo1qHwJDznpy6na+GMIX9nfMxfDVFU08jmhoXDcA9iY2bjRq0a6yW/Q4UjTAJGFVPpcKqrYifZ+19gcKmXU2KwD4tqU8D4JH20fSvZbg42sz2YoHWLDw',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];