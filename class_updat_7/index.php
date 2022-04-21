<?php
$our_teams = [
    ["name"=>"sohag","skile"=>"Web developer",'img'=>"img/img1.jpg"],
    ["name"=>"Tom Cruise","skile"=>"Full Stact Developer",'img'=>"img/img2.jpg"],
    ["name"=>"David Corner","skile"=>"Front End Developer",'img'=>"img/img3.jpg"],
    ["name"=>"Vin Diesel","skile"=>"Senior App Developer",'img'=>"img/img4.jpg"]
];




// $newArrays = array_rand($questionSet,9);


// $results = $questionSet[$newArray[1]];
// foreach ($questionSet as $result) {
//     echo $result['question']."<br>";
//     foreach ($result as $val) {
//       echo $val[0]."<br>";
//       echo $val[1];
//     }
// }
// echo "<pre>";
// print_r($newArray);
// echo "<pre>";
// print_r($questionSet);

// foreach ($questionSet as $questions) {
//     echo $questions['question1']."<br>";
//     foreach ($questions as $question){
//         echo $question[0];
//     }
// }
$qusetionSet = [

    [

        'question' => 'What is loream ipsum1',

        'options' => [

            'ans1', 'ans2', 'ans3', 'ans4'

        ]

    ],



    [

        'question' => 'What is loream ipsum?2',

        'options3' => [

            'ans1', 'ans2', 'ans3', 'ans4'
        ]
    ],
    [

        'question' => 'What is loream ipsum?3',

        'options' => [

            'ans1', 'ans2', 'ans3', 'ans4'

        ]

    ]

];




?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>assignment 7</title>
</head>

<body>
    <section class="team">
        <div class="service-section pt-5">
            <h1 class="spantext">Our <span>Team Member</span> </h1>
        </div>
        <!-- cade section start -->
        <div class="container pt-5">
            <div class="row">
                <?php
                 foreach ($our_teams as $our_team) {
                ?>
                <div class="col-lg-3 col-md-4 col-sm-3">
                    <div
                        class="shadow-lg d-flex justify-conent-center align-items-center p-3 bg-dark rounded-lg flex-column">
                        <div class="parson-img ">
                            <img src="<?php echo $our_team['img']?>" class="img-fluid rounded-circle" alt="">

                        </div>
                        <div class="parson-name my-2">
                            <h3 class="text-white"> <?php echo $our_team['name']?></h3>

                        </div>
                        <div class="info">
                            <h6 class="text-white">
                                <?php echo $our_team['skile'] ?>
                            </h6>
                        </div>
                    </div>

                </div>
                <?php  }?>

            </div>
        </div>
    </section>

    <!-- cade section end -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>