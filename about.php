<!DOCTYPE html>
<html lang='en'>

  <head>
    <meta charset='UTF-8'/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Forever Portfolio</title>
    <link rel="shortcut icon" href="astro.ico" />

    <link rel='stylesheet' href='styles/about_style.css'/>
    <link href="https://fonts.googleapis.com/css?family=Nunito|Nunito+Sans" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>



  </head>
<body>
  <div class="menu_cont">
    <?php include("menu_bar.php")?>
  </div>
  <div class="main_cont">

    <!--  -->

    <div class="presentation_cont">
      <div class="sub_pres_cont">
        <div class="people_cont">
          <img id="theo_img" src="images/theo.jpg"/>
          <p class="moto">
            "Subjectvity is subjective in itself"
          </p>
          <p class="person_bio">
            Theo has an extensive international/multicultural background:
            French citizen, born in Japan, living in New-York City and
            studying in Canada. He has an entrepreneurial mindset and is dedicated
            to solving problems. He is a team player with excellent communication
            interpersonal skills.

          </p>
        </div>
        <div class="people_cont">
          <img id="val_img" src="images/val.jpg"/>
          <p class="moto">
            "I listen, I build, I enlighten"
          </p>
          <p class="person_bio">
            Valentin has lived in 4 different countries for the past 5 years.
            Entrepreneurship is the way to go for him. He is a great listener
            and he demonstrates deep involvement in everything he does. As we
            say in French, <i>"Il décrochera la Lune"</i> for its clients.
          </p>
        </div>
      </div>
    </div>
    <div class="team_description__cont">

      <img id="te_img"    src="images/TE.png" />
      <img id="am_img" src="images/AM.png" />

      <div class="description__cont">
        <p>
          Forever is a web development and graphic design studio based out of Montreal. It is a small-sized team of young,
           creative professionals that have been exploring & designing digital beauty since 2015 and delivered projects for big and small clients.

        </p>
        <p>
          We have worked on numerous projects varying from landing pages to e-commerce sites. Our team can deliver everything from idea to final execution.

        </p>
        <p>
          Valentin and Theo met back in highschool where they started their first entrepreunarial project.
           Through their friendship and projects they both discovered their own passion for web developement.
            Valentin always has been the scientific one spending his time in the chemistry lab... while you would find Theo at museums.
        </p>
        <p>
          We're almost always disagreeing on everything which makes us challenge each other to bring the best out of work.
          We treat every project like it was ours.
        </p>
        <h4> Share your dream with us and let us make it ours too.</h4>

        <!-- image decoration for descrpiton -->
        <img id="plus_top_img"    src="images/top-plus.png" />
        <img id="plus_bottom_img" src="images/bottom-plus.png" />
      </div>
    </div>




  </div>




</body>
<div class="footer_cont">
  <?php include("footer.php")?>
</div>



</html>
