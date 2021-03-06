<?php

return [
    "author"        => "ArtisticPhoenix",
    "description"   => "Exception handler",
    "package"       => "Evo",
    "buildpath"     => __DIR__.'/src/',
    "support"       => "https://github.com/ArtisticPhoenix/{project}/issues",
    "version"       => "1.0.0",
    "_reserved"       => [
        [1,1000] //some of these will be used in the future
    ],
    "namespaces"     => [  
        "evo\\exception"  => [
            "subpackage"    => "Evo",
            "buildpath"     =>  ["psr"=>4],
            "interfaces"    => [
                "EvoExceptionInterface"
            ],
            "implements" => ["\\evo\\exception\\EvoExceptionInterface"],
            "exceptions" => [
                //general errors 1000-2000
                "1000"  => "InvalidArgument",
                //shutdown errors 2000-3000
                "2000"   => [
                    "name"      => "ShutdownError",
                    "extends"   => "\ErrorException"
                 ],
                "2001"   => [
                    "name"      => "RuntimeError",
                    "extends"   => "\ErrorException"
                ],
            ]
        ]
    ]
];

