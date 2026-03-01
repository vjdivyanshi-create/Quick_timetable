
document.getElementById("timeTableForm").addEventListener("submit", function(e) {
  e.preventDefault();
  generateTimetable();
});

function generateTimetable() {
  let days = document.getElementById("days").value;
  let periods = document.getElementById("periods").value;
  let subjectsInput = document.getElementById("subjects").value;
  let classes = document.getElementById("classes").value;
  let teachers = document.getElementById("teachers").value;

  if (!days || !periods || !subjectsInput || !classes || !teachers) {
    alert("❗ Please fill all the fields before generating the timetable.");
    return;
  }

  days = parseInt(days);
  periods = parseInt(periods);
  classes = parseInt(classes);
  let subjects = subjectsInput.split(",").map(s => s.trim());

  let allTimetables = "";

  
  for (let c = 1; c <= classes; c++) {
    allTimetables += "<h3>Class " + c + " Timetable</h3>";
    allTimetables += "<table border='1'><tr><th>Day/Period</th>";
    
    for (let i = 1; i <= periods; i++) {
      allTimetables += "<th>Period " + i + "</th>";
    }
    allTimetables += "</tr>";

    for (let d = 1; d <= days; d++) {
      allTimetables += "<tr><td>Day " + d + "</td>";
      for (let p = 1; p <= periods; p++) {
        let randomSubject = subjects[Math.floor(Math.random() * subjects.length)];
        allTimetables += "<td>" + randomSubject + "</td>";
      }
      allTimetables += "</tr>";
    }

    allTimetables += "</table><br>";
  }

  document.getElementById("resultTable").innerHTML = allTimetables;
}

function resetTable() {
  document.getElementById("days").value = "";
  document.getElementById("periods").value = "";
  document.getElementById("subjects").value = "";
  document.getElementById("classes").value = "";
  document.getElementById("teachers").value = "";
  document.getElementById("resultTable").innerHTML = "";
}
