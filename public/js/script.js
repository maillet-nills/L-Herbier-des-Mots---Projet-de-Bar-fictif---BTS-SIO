const inputList = [
  "george-orwell",
  "isaac-asimov",
  "jk-rowling",
  "autrichienne",
  "hongroise",
  "allemande",
  "aragorn",
  "frodon-sacquet",
  "legolas",
  "sam-gamegie",
  "85",
  "28",
  "65",
  "orient-express",
  "dracula",
  "une-etude-en-rouge",
  "jean-valjean",
  "meursault",
  "emile-zola",
  "moliere",
  "jean-paul-sartre",
  "roman",
  "poesie",
  "nouvelle",
  "jules-vernes-1",
  "alexandre-dumas",
  "albert-camus",
  "victor-hugo",
  "antoine-saint-exupery",
  "jules-vernes-2",
  "choice",
  "send",
];
const correctLabels = [
  "correct-label-q1",
  "correct-label-q2",
  "correct-label-q3-1",
  "correct-label-q3-2",
  "correct-label-q4",
  "correct-label-q5",
  "correct-label-q6",
  "correct-label-q7",
  "correct-label-q8-1",
  "correct-label-q8-2",
  "correct-label-q9",
  "correct-label-q10",
];
const wrongLabels = [
  "wrong-label-q1a",
  "wrong-label-q1b",
  "wrong-label-q2a",
  "wrong-label-q2b",
  "wrong-label-q3a",
  "wrong-label-q3b",
  "wrong-label-q4a",
  "wrong-label-q4b",
  "wrong-label-q5a",
  "wrong-label-q5b",
  "wrong-label-q6a",
  "wrong-label-q6b",
  "wrong-label-q7a",
  "wrong-label-q7b",
  "wrong-label-q8a",
  "wrong-label-q9a",
  "wrong-label-q9b",
  "wrong-label-q10a",
  "wrong-label-q10b",
];
const userInformations = ["name", "forename", "email", "tel"];

function darkMode() {
  document.body.style.backgroundColor = "#1b1b1a";
  document.body.style.color = "white";
  document.getElementById("dark-button").style.display = "none";
  document.getElementById("bright-button").style.display = "inline-block";
}
function brightMode() {
  document.body.style.backgroundColor = "white";
  document.body.style.color = "black";
  document.getElementById("dark-button").style.display = "inline-block";
  document.getElementById("bright-button").style.display = "none";
}

function validateEmail(email) {
  const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

  return emailPattern.test(email);
}

function validateTel() {}

function submitQuizz() {
  var name = document.getElementById("name").value;
  var forename = document.getElementById("forename").value;
  var email = document.getElementById("email").value;
  var tel = document.getElementById("tel").value;

  if (
    name == null ||
    name == "" ||
    forename == null ||
    forename == "" ||
    validateEmail(email) == false ||
    email == "" ||
    tel == false ||
    tel == ""
  ) {
    alert("Saisies manquantes ou incorrectes !");
  } else {
    var choice = prompt(
      "Êtes-vous sûr de vouloir continuer ? Écrivez OUI pour valider :",
    );
    if (choice == "OUI") {
      alert("Voici les réponses au quizz !");
    }
    inputList.forEach((input) => {
      document.getElementById(input).disabled = true;
    });
    userInformations.forEach((element) => {
      document.getElementById(element).disabled = true;
    });
    correctLabels.forEach((correct) => {
      document.getElementById(correct).style.color = "green";
      document.getElementById(correct).style.fontWeight = "900";
    });
    wrongLabels.forEach((wrong) => {
      document.getElementById(wrong).style.color = "red";
      document.getElementById(wrong).style.fontWeight = "600";
    });

    var correctQ1 = document.getElementById("george-orwell");
    var correctQ2 = document.getElementById("autrichienne");
    var correctQ3a = document.getElementById("frodon-sacquet");
    var correctQ3b = document.getElementById("sam-gamegie");
    var correctQ4 = document.getElementById("65");
    var correctQ5 = document.getElementById("une-etude-en-rouge");
    var correctQ6 = document.getElementById("d-artagnan");
    var correctQ7 = document.getElementById("emile-zola");
    var correctQ8a = document.getElementById("roman");
    var correctQ8b = document.getElementById("nouvelle");
    var correctQ9 = document.getElementById("jules-vernes-1");
    var correctQ10 = document.getElementById("antoine-saint-exupery");

    var onePoint = [
      correctQ1,
      correctQ2,
      correctQ4,
      correctQ5,
      correctQ6,
      correctQ7,
      correctQ9,
      correctQ10,
    ];
    var halfPoint = [correctQ3a, correctQ3b, correctQ8a, correctQ8b];

    var score = 0;
    onePoint.forEach((element) => {
      if (element.checked) {
        score += 1;
      }
    });
    halfPoint.forEach((element) => {
      if (element.checked) {
        score += 0.5;
      }
    });
    alert("Tu as " + score + " /10 !!");
  }
}

function submitImgQuizz() {
  var authorName = document.getElementById("author-name").value;
  var imgGuessRadios = document.getElementsByName("img-guess");
  if (imgGuessRadios[3].checked && authorName == "Ray Bradbury") {
    alert("Bravo tu as réussi à deviner les bonnes réponses !!");
  } else if (
    imgGuessRadios[3].checked != true &&
    authorName == "Ray Bradbury"
  ) {
    alert("Tu t'es trompé d'image mais le nom est le bon !");
  } else if (imgGuessRadios[3].checked && authorName != "Ray Bradbury") {
    alert("Tu as la bonne image mais ce n'est pas le bon nom !");
  } else {
    alert("Aïe ! Rien n'est bon !");
  }
}
function stepOne() {
  document.getElementById("first-step").style.display = "none";
  document.getElementById("second-step").style.display = "inline-block";
}
function stepTwo() {
  document.getElementById("second-step").style.display = "none";
  document.getElementById("third-step").style.display = "inline-block";
}
function stepThree() {
  document.getElementById("third-step").style.display = "none";
  document.getElementById("secret-img").style.display = "block";
  document.getElementById("secret-fieldset").style.display = "block";
}
function easyGuess() {
  var gandalf = document.getElementById("gandalf-field").value;
  if (gandalf == "Gandalf" || gandalf == "gandalf") {
    document.getElementById("gandalf-img").style.display = "block";
    document.getElementById("secret-gandalf-fieldset").style.display = "block";
  } else {
    alert("Mauvaise réponse.");
  }
}
