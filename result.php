<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/result.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
  </head>
  <body>


   <!------------ Hedaer -------------------->

   <Header Class="Site-Header">
        <Div Class="Site-Identity">
            <h1 style="background: #e3f2fd; padding: 0px 10px;">Quiz World</h1>
        </Div>
    </Header>


    <section>
      <button class="show-modal">Show Results</button>
      <span class="overlay"></span>

      <div class="modal-box">
        <i class="fa-sharp fa-solid fa-face-smile" style="color: rgb(110, 244, 110);"></i>
        <h2>Congratulations &#127881 </h2>

        <?php
        $answer1 = $_POST['question-1-answers'];
        $answer2 = $_POST['question-2-answers'];
        $answer3 = $_POST['question-3-answers'];
        $answer4 = $_POST['question-4-answers'];
        $answer5 = $_POST['question-5-answers'];
    
        $totalCorrect = 0;
        
        if ($answer1 == "A") { $totalCorrect++; }
        if ($answer2 == "A") { $totalCorrect++; }
        if ($answer3 == "A") { $totalCorrect++; }
        if ($answer4 == "B") { $totalCorrect++; }
        if ($answer5 == "A") { $totalCorrect++; }
        
        echo "<div id='results'>$totalCorrect / 5 correct</div>";
        
    ?>

     <a href="login.php" id="back">Restart Test</a>
    
      </div>
    </section>

    <script>
      const section = document.querySelector("section"),
        overlay = document.querySelector(".overlay"),
        showBtn = document.querySelector(".show-modal"),
        closeBtn = document.querySelector(".close-btn");

      showBtn.addEventListener("click", () => section.classList.add("active"));

      overlay.addEventListener("click", () =>
        section.classList.remove("active")
      );

      closeBtn.addEventListener("click", () =>
        section.classList.remove("active")
      );
    </script>

  </body>
</html>