<html lang="en">
<!-- https://www.bootdey.com/snippets/view/team-user-resume#html -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />

<?php

$data = array(
  array(
      "image"=>"https://bootdey.com/img/Content/avatar/avatar1.png",
      "position"=>"Founder & CEO",
      "company"=>"Facebook",
      "email"=>"saifalnuaimi@mail.com",
      "bio"=>"I am a Front End developer with industry experience building websites and web applications. I specialize in HTML, CSS, SCSS, Bootstrap and jQuery. I am passionate, resourceful and always love to learn new things. I love shaping new ideas into meaningful chunks.",
      "qoute"=>"Many people take no care of their money till they come nearly to the end of it, and others do just the same with their time.",
      "stat1"=>85,
      "stat2"=> 90,
      "stat3"=> 80,
      "message" => "It is truly amazing the damage that we, as parents, can inflict on our children. So why do we do it? For the most part, we don’t do it intentionally or with malice. In the majority of cases, the cause is a well-meaning but unskilled or un-thinking parent, who says the wrong thing at the wrong time, and the message sticks – as simple as that!"
  ),
  array(
    "image"=>"https://bootdey.com/img/Content/avatar/avatar7.png",
    "position"=>"CEO",
    "company"=>"Google",
    "email"=>"Nazrul.Islam@mail.com",
    "bio"=>"I’m a software engineer in Santa Barbara, CA with a passion for computer science, electrical engineering and embedded systems technology.",
    "qoute"=>"Wealth consists not in having great possessions, but in having few wants",
    "stat1"=>75,
    "stat2"=> 95,
    "stat3"=> 85,
    "message" => "Though less common than earthquakes, the moon actually has moonquakes, too. That's right. Moonquakes. Pretty much everyone is interested in space, so this is always a good fact to pull out."
),
array(
  "image"=>"https://bootdey.com/img/Content/avatar/avatar6.png",
  "position"=>"Engineer",
  "company"=>"NASA",
  "email"=>"Riyadh.Khan@mail.com",
  "bio"=>"I’m a web developer. I spend my whole day, practically every day, experimenting with HTML, CSS, and JavaScript; dabbling with Python and Ruby; and inhaling a wide variety of potentially useless information through a few hundred RSS feeds. I build websites that delight and inform. I do it well.",
  "qoute"=>"A software development quotation is a project cost estimate, usually sent with a software development proposal before you start the job.",
  "stat1"=>90,
  "stat2"=> 95,
  "stat3"=> 100,
  "message" => "In the USA, there are more Chinese restaurants than all the McDonald’s, KFCs, Burger Kings and Wendy’s put together."
),
array(
  "image"=>"https://bootdey.com/img/Content/avatar/avatar2.png",
  "position"=>"CTO",
  "company"=>"Facebook",
  "email"=>"Niloy.Islam@mail.com",
  "bio"=>"I’m a software engineer in Santa Barbara, CA with a passion for computer science, electrical engineering and embedded systems technology.",
  "qoute"=>"Wealth consists not in having great possessions, but in having few wants",
  "stat1"=>85,
  "stat2"=> 95,
  "stat3"=> 85,
  "message" => "Though less common than earthquakes, the moon actually has moonquakes, too. That's right. Moonquakes. Pretty much everyone is interested in space, so this is always a good fact to pull out."
)
  
);
  
  $user = $_GET['user'] ?? '';
  $index = -1;
  if ($user != '') {
    if ($user == '"Saif Alnuaimi Alnuaimi"') {
      $index = 0;
    } elseif ($user == '"Nazrul Islam"') {
      $index = 1;
    } elseif ($user == '"Riyadh Khan"') {
      $index = 2;
    } elseif ($user == '"Niloy Islam"') {
      $index = 3;
    }
  }
?>

<body>
  <link rel="stylesheet" href="assets/css/detail.css" />
  <title><?php echo "Saif Alnuaimi Alnuaimi"; ?></title>
  <div class="container text-center mb-5">
    <h1><?php echo "This is ASE 230 - Saif Alnuaimi Alnuaimi"; ?></h1>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-5 col-md-6">
        <div class="mb-2">
          <img class='w-100' src='<?php echo $data[$index]['image'];?>' alt=''>
        </div>
        <div class="mb-2 d-flex">
          <h4 class="font-weight-normal"><?php echo "$user"; ?></h4>
          <div class="social d-flex ml-auto">
            <p class="pr-2 font-weight-normal">Follow on:</p>
            <a href="#" class="text-muted mr-1">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="text-muted mr-1">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="text-muted mr-1">
              <i class="fab fa-instagram"></i>
            </a>
            <a href="#" class="text-muted">
              <i class="fab fa-linkedin"></i>
            </a>
          </div>
        </div>
        <div class="mb-2">
          <ul class="list-unstyled">
            <li class="media">
              <span class="w-25 text-black font-weight-normal"><?php echo "Dream profession:"; ?></span>
              <label class="media-body"><?php echo $data[$index]['position'];?></label>
            </li>
            <li class="media">
              <span class="w-25 text-black font-weight-normal"><?php echo "Dream company:"; ?></span>
              <label class="media-body"><?php echo $data[$index]['company'];?></label>
            </li>
            <li class="media">
              <span class="w-25 text-black font-weight-normal">Email: </span>
              <label class="media-body"><?php echo $data[$index]['email'];?></label>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-lg-7 col-md-6 pl-xl-3">
        <h5 class="font-weight-normal"><?php echo "Short intro"; ?></h5>
        <p>
        <?php echo $data[$index]['bio'];?>
        </p>
        <div class="my-2 bg-light p-2">
          <p class="font-italic mb-0">
          <?php echo $data[$index]['qoute'];?>
          <p>
        </div>
        <div class="mb-2 mt-2 pt-1">
          <h5 class="font-weight-normal"><?php echo "Top skills"; ?></h5>
        </div>
        <div class="py-1">
          <div class="progress">
            <div class="progress-bar" role="progressbar" style=<?php echo "width:".$data[$index]['stat1']."%"; ?> aria-valuenow=<?php echo $data[$index]['stat1'];?> aria-valuemin="0" aria-valuemax="100">
              <div class="progress-bar-title"><?php echo "Finance"; ?></div>
              <span class="progress-bar-number"><?php echo $data[$index]['stat1']."%";?></span>
            </div>
          </div>
        </div>
        <div class="py-1">
          <div class="progress">
            <div class="progress-bar" role="progressbar" style=<?php echo "width:".$data[$index]['stat2']."%"; ?> aria-valuenow=<?php echo $data[$index]['stat2'];?> aria-valuemin="0" aria-valuemax="100">
              <div class="progress-bar-title"><?php echo "Information Technologies"; ?></div>
              <span class="progress-bar-number"><?php echo $data[$index]['stat2']."%";?></span>
            </div>
          </div>
        </div>
        <div class="py-1">
          <div class="progress">
            <div class="progress-bar" role="progressbar" style=<?php echo "width:".$data[$index]['stat3']."%"; ?> aria-valuenow=<?php echo $data[$index]['stat3'];?> aria-valuemin="0" aria-valuemax="100">
              <div class="progress-bar-title"><?php echo "Education"; ?></div>
              <span class="progress-bar-number"><?php echo $data[$index]['stat3']."%";?></span>
            </div>
          </div>
        </div>
        <h5 class="font-weight-normal"><?php echo "Fun Facts"; ?></h5>
        <p><?php echo $data[$index]['message'];?></p>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>