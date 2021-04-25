<?php
echo '<br>Task 1 : ';
function fact($num)
{
    return($num < 2 ? 1 : $num * fact($num-1));
}

echo fact(8);
echo '<br>Task 2 : ';
function recurse($itemslist)
{
    $markup = " ";
    foreach ($itemslist as $id => $twig) {
        $markup .= "<li>" . ((is_array($twig)) ? $branch . recurse($twig) : $twig) . "</li>";
    }

    return "<ul>" . $markup . "</ul>";
}


$itemslist = [
    "id"    => 1,
    "name"  => "heading",
    "items" => [
        [
            "id"    => 2,
            "name"  => "content",
            "items" => ["foreword"],
        ],
        [
            "id"    => 3,
            "name"  => "first chapter",
            "items" => ["free market protection services"],
        ],
        [
            "id"    => 4,
            "name"  => "second chapter",
            "items" => [
                [
                    "id"    => 5,
                    "name"  => "market intervention principles",
                    "items" => ["types of intervention"],
                ],
                [
                    "id"    => 6,
                    "name"  => "direct consequences of government intervention",
                    "items" => ["intervention and conflict"],
                ],
            ],
        ],
    ]
];



echo recurse($itemslist);
