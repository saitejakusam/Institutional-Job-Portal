<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>

#sss {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
  position: -webkit-sticky; 
  position: sticky;
  top: 0;
}

#ss{
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}

.active {
  background-color: #4CAF50;
}
</style>
  <style>
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: 100%;
  }
  </style>
</head>
<body>

<ul id="sss">
  <li id="ss"><a class="active" href="index.php">Home</a></li>
  <li id="ss"><a href="AboutUs.php">About Us</a></li>
  <li id="ss"><a href="ContactUs.php">Contact Us</a></li>
</ul>

<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="xx.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3 style="color: black">Keep Learning</h3>
        <p style="color: orange">Every Professional is still a learner</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="yy.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3 style="color: red">Search for oppurtunities</h3>
        <p style="color: blue">In the middle of difficulty lies opportunity</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="zz.jfif" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3 style="color: red">Do what you like</h3>
        <p style="color: green">Choose a job you love, and you will never have to work a day in your life</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

 
<div class="container">
  <br><br>
  <h2>Focus on Your career</h2>
  <br>
  <h4 style="color: #ff0066">1 . Choose Your Occupation Wisely</h4>
  <br>
  <div class="card" style="width:400px">
    <img class="card-img-top" src="1.jpg" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title">Tip-1</h4>
      <p style="text-align: justify;: " class="card-text">Before you decide to pursue any career, ask yourself this question: "Can I see myself doing this all day, every day, for many years?" When you choose an occupation, make sure it's a good match for your personality, interests, aptitudes, and work-related values. Learn as much as you can about yourself by conducting a complete self-assessment. Do extensive career research about the occupation you are considering to learn about job duties, qualifications, earnings, and employment outlook.</p>
     
    </div>
  </div>
  <br>
  
  <h4 style="color:#ff0066 ">2. Don't Let Anyone Tell You What Choice Is Best for You</h4><br>
  <div class="card" style="width:400px">
      <img class="card-img-bottom" src="2.jpg" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title">Tip-2</h4>
      <p style="text-align: justify;: " class="card-text">Ignore those who say, "Pick this field because it has lots of opportunities right now," or "You will make loads of money so it doesn't matter if you hate your job," or "I like this career and therefore you will too." Although they may be well-meaning, these statements are among the many myths about career choice. All ignore one important thing: your career choice is a personal decision that will have a significant effect on your life for many years. Oh, and by the way, the relationship between earnings and job satisfaction is minimal.</p>

    </div>
  <br>

  </div>

  <div class="container">

  <br>
  <h4 style="color: #ff0066">3. Measure Your Own Success</h4>
  <br>
  <div class="card" style="width:400px">
    <img class="card-img-top" src="3.jpg" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title">Tip-3</h4>
      <p style="text-align: justify;: " class="card-text">How do you define success? Is it the size of your paycheck or having the corner office? Is it the feeling you get when you know you did a great job on a project (praise from the boss doesn't hurt) or the one you get when you know you helped someone? Perhaps you feel successful after putting in a day at work and coming home at a reasonable hour to spend time with your family. Since each of us measures success differently, you are the only one who can decide what it means to you. Your satisfaction with your career is strongly linked to whether you feel you have met your own goals, not someone else's.</p>

    </div>
  </div>
</div>

 <div class="container">

  <br>
  <h4 style="color: #ff0066">4. Don't Be Afraid to Ask for Help</h4>
  <br>
  <div class="card" style="width:400px">
    <img class="card-img-top" src="4.jpg" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title">Tip-4</h4>
      <p style="text-align: justify;: " class="card-text">As much as you think you know, you don't know it all. There are people with more experience than you, and with that experience comes knowledge. To get access to it, you need experienced colleagues, in addition to your peers, in your network. Establish a relationship with a mentor who can guide you through your career. In addition to advising you on how to advance, a mentor can help you learn about an occupation you are considering, get the lowdown on an employer before a job interview, and solve problems at work.</p>

    </div>
  </div>
</div>

 <div class="container">

  <br>
  <h4 style="color: #ff0066">5. Always Acknowledge People Who Help You</h4>
  <br>
  <div class="card" style="width:400px">
    <img class="card-img-top" src="5.jpg" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title">Tip-5</h4>
      <p style="text-align: justify;: " class="card-text">It may sound simple to acknowledge those who offer assistance, but it's genuinely a significant gesture. Whether someone gives you five minutes of their time or introduces you to a potential employer, it's important to let that person know that it meant something to you. And when they or someone else needs help, return the favor. Consider it good karma.</p>

    </div>
  </div>
</div>

<div class="container">

  <br>
  <h4 style="color: #ff0066">6. Own Your Mistakes</h4>
  <br>
  <div class="card" style="width:400px">
    <img class="card-img-top" src="6.jpg" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title">Tip-6</h4>
      <p style="text-align: justify;: " class="card-text">Everybody makes mistakes. Even if you try hard not to, it will happen at some point. Of course, you will do what you can to avoid making a grave error, but sometimes they happen, despite your best efforts. While your instinct may be to run away and hide, that is the worst thing you can do. Admitting your error, finding a way to fix it, or at least taking an action that mitigates its effects, will help restore your reputation.</p>

    </div>
  </div>
</div>
<div class="container">

  <br>
  <h4 style="color: #ff0066">7. Be Your Own Cheerleader</h4>
  <br>
  <div class="card" style="width:400px">
    <img class="card-img-top" src="7.jpg" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title">Tip-7</h4>
      <p style="text-align: justify;: " class="card-text">Root for yourself. If you aren't your own biggest fan, who will be? Take note of and pride in all your successes and positive attributes. Don't wait for someone else to tell you "job well done!" Reflecting on your achievements will spur you on to accomplish even greater ones.</p>

    </div>
  </div>
</div>
<div class="container">

  <br>
  <h4 style="color: #ff0066">8. Don't Beat Yourself Up</h4>
  <br>
  <div class="card" style="width:400px">
    <img class="card-img-top" src="8.jpg" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title">Tip-8</h4>
      <p style="text-align: justify;: " class="card-text">From time to time a little voice inside your head will whisper (hopefully not shout) that you aren't good enough or smart enough. That's the voice you need to shut out. Unfortunately, there will be plenty of people quite willing to bring you down. Don't do it to yourself, too. When you make a mistake, admit it, fix it, and move on. If you are missing a skill or have some other shortcoming, take the necessary measures to improve.</p>

    </div>
  </div>
</div>
<div class="container">

  <br>
  <h4 style="color: #ff0066">9. Never Feel Like You Are Stuck</h4>
  <br>
  <div class="card" style="width:400px">
    <img class="card-img-top" src="9.jpg" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title">Tip-9</h4>
      <p style="text-align: justify;: " class="card-text">No matter how careful you are about choosing the "right" career or job, someday you may want to make a change. You will probably be able to come up with a bunch of reasons not to do it (change is scary) but consider it anyway. Take this saying to heart: "If you don't like where you are, move. You are not a tree."</p>

    </div>
  </div>
</div>
<div class="container">

  <br>
  <h4 style="color: #ff0066">10. Lose the Negative Attitude</h4>
  <br>
  <div class="card" style="width:400px">
    <img class="card-img-top" src="10.jpg" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title">Tip-10</h4>
      <p style="text-align: justify;: " class="card-text">Some people see only the negative side of things and always find something about which to complain. Don't be that person. You will bring yourself and everyone else down. A negative attitude saps your energy. Don't ignore problems, but instead of just complaining, look for ways to fix them.</p>

    </div>
  </div>
</div>
<div class="container">

  <br>
  <h4 style="color: #ff0066">11. Listen More Than You Speak</h4>
  <br>
  <div class="card" style="width:400px">
    <img class="card-img-top" src="11.jpg" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title">Tip-11</h4>
      <p style="text-align: justify;: " class="card-text">You can learn a lot by listening, and you could miss a lot if you don't. Whether your boss is explaining a project to you or telling you about his weekend, it's important to understand what he is saying. Careful listening will prevent misunderstanding and help you build rapport with others.

In many ways, having a successful career is less about what you choose to do, and more about how you do it. These tips are easy for anyone to apply in any field. Practicing these habits will set you up for success, regardless of your career path.</p>

    </div>
  </div>
</div>


</body>
</html>
