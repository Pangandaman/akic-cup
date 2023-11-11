<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Participants</title>
<style>
    body {
    font-family: Mark, sans-serif;
    background-color: #f2f2f2;
}

.container {
        display: flex;
        flex-direction: column; /* Stack elements vertically */
        max-width: 800px;
        margin: 0 auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
    }

.table {
    font-family: 'FF Mark W05', sans-serif;
font-weight: bolder;
    flex: 1;
    padding: 10px;
}
.table h2 {
    color: #555;
}
ul {
    list-style: none;
    padding: 0;
}
li {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 5px 0;

}
input[type="text"] {
    width: 70%;
    padding: 5px;
}
button {
    background-color: #007BFF;
    color: #fff;
    border: none;
    padding: 5px 10px;
    cursor: pointer;
}
button:hover {
    background-color: #0056b3;
}
.remove-button {
margin: 5px;
    background-color: #dc3545;
    color: #fff;
    border: none;

    border-radius: 4px;
    cursor: pointer;
}

.remove-button:hover {
    background-color: #c82333;
}

.participants-table {
    text-align: center;
    font-size: 10px;
    width: 100%;
}

.participants-table th {
    background-color: #343a40;
    color: #fff;
    padding: 5px;
}

.participants-table th:last-child {
    width: 60px; /* Adjust the width as needed */
}

</style>
    
</head>
<body>
<header class="hero">
    <div class="hero-wrap">
        <p class="intro" id="intro">Participants of</p>
        <h1 id="headline">Quran Reading</h1>
        <a style="color: white;" href="javascript:history.back()">← Go Back</a>
    </div>
</header>
<div class="container">
<div class="table">
        <h2>Participants List </h2>
        <table class="participants-table">
            <thead>
                <tr>
                <th scope="col">#</th>
                    <th scope="col">Participant</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody id="participantsList">
                <!-- List of participants will be populated here -->
            </tbody>
            
        </table>
        <div style="margin-top: 25%;">
        <a class="btn btn-danger" href="http://akic-cup.com/index.php?c=Content&m=view_islamic_event">Cancel</a>
            <button class="Btn btn-success" onclick="saveParticipants()">Save</button>
        <hr style="border: 2px solid black;">
    <div class="table">
        <h2>Al-Khayyam Members</h2>
        <div class="input-group mt-2">
            <input type="text" id="searchInput" class="form-control" placeholder="Search..." oninput="searchStudents()">
            <button class="Btn btn-primary" onclick="addSelectedStudents()">Add Selected</button>
        </div>
        <table class="participants-table" style="text-align: center; font-size: 10px;">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">ID No.</th>
                    <th scope="col">Name</th>
                    <th scope="col">Select</th>
                </tr>
            </thead>
            <tbody id="studentList">
                <!-- Student rows will be populated here -->
            </tbody>
        </table>
    </div>
    
      
     
            
        </div>
    </div>

</div>
<script>
    const mockStudents = [
        "Padate, Mohammad Ryan", "Dalupang, Ismael", "Malang, Wasef",
        "Pangandaman, Mohammad Amr", "Gomez, Maria", "Lopez, Juan",
        "Santos, Ana", "Rodriguez, Carlos", "Lim, Grace", "Tan, Luis",
        "Chen, Wei", "Liu, Hui", "Garcia, Miguel", "Smith, Emily",
        "Gonzalez, Jose", "Martinez, Maria", "Rodriguez, David", "Perez, Ana",
        "Hernandez, Carlos", "Lopez, Laura"
    ];

    let studentList = [...mockStudents];
    const participantList = [];

    function initStudentList() {
    const studentListTable = document.getElementById("studentList");
    studentListTable.innerHTML = "";

    studentList.forEach((student, index) => {
        if (!participantList.includes(student)) {
            const tr = document.createElement("tr");
            tr.innerHTML = `
                <td>${index + 1}</td>
                <td>2018-01-${index + 1}</td>
                <td>${student}</td>
                <td><input type="checkbox"></td>
            `;
            studentListTable.appendChild(tr);
        }
    });
}

    function updateParticipantsList() {
        const participantsList = document.getElementById("participantsList");
        participantsList.innerHTML = "";
        for (let i = 0; i < participantList.length; i++) {
            const li = document.createElement("li");
            li.textContent = `${i + 1}. ${participantList[i]}`;
            participantsList.appendChild(li);
        }
    }

    function addSelectedStudents() {
        const studentCheckboxes = document.querySelectorAll("input[type='checkbox']:checked");
        studentCheckboxes.forEach(checkbox => {
            const studentName = checkbox.parentElement.previousElementSibling.textContent;
            addParticipant(studentName);
            checkbox.checked = false;
        });
    }

    function addParticipant(studentName) {
        if (participantList.length < 12 && !participantList.includes(studentName)) {
            participantList.push(studentName);
            updateParticipantsList();
        }
    }

    function addStudent() {
        const studentNameInput = document.getElementById("student-name");
        const studentName = studentNameInput.value.trim();
        if (studentName === "") return;

        if (!studentList.includes(studentName)) {
            studentList.push(studentName);
            const studentListTable = document.getElementById("studentList");
            const tr = document.createElement("tr");
            tr.innerHTML = `
                <td>${studentList.length}</td>
                <td>2018-01-${studentList.length}</td>
                <td>${studentName}</td>
                <td><input type="checkbox"></td>
            `;
            studentListTable.appendChild(tr);
            studentNameInput.value = "";
        }
    }

    function searchStudents() {
    const searchInput = document.getElementById("searchInput");
    const searchValue = searchInput.value.toLowerCase();

    const filteredStudents = mockStudents.filter(student =>
        student.toLowerCase().includes(searchValue) ||
        student.toLowerCase().includes(`2018-01-${searchValue}`)
    );

    studentList = filteredStudents;
    const studentListTable = document.getElementById("studentList");
    studentListTable.innerHTML = "";

    filteredStudents.forEach((student, index) => {
        const tr = document.createElement("tr");
        tr.innerHTML = `
            <td>${index + 1}</td>
            <td>2018-01-${index + 1}</td>
            <td>${student}</td>
            <td><input type="checkbox"></td>
        `;
        studentListTable.appendChild(tr);
    });
}

    initStudentList();

    function addSelectedStudents() {
        const studentCheckboxes = document.querySelectorAll("input[type='checkbox']:checked");
        studentCheckboxes.forEach(checkbox => {
            const studentName = checkbox.parentElement.previousElementSibling.textContent;
            if (participantList.length < 12) {
                addParticipant(studentName);
                checkbox.checked = false;
                if (participantList.length === 12) {
                    document.getElementById("saveButton").style.display = "inline";
                    Swal.fire({
                        title: 'Maximum Participants Reached',
                        text: 'You have reached the limit of 12 participants.',
                        icon: 'warning'
                    });
                }
            } else {
                Swal.fire({
                    title: 'Maximum Participants Reached',
                    text: 'You have already selected the maximum of 12 participants.',
                    icon: 'warning'
                });
            }
        });
    }

    function addParticipant(studentName) {
        if (participantList.length < 12 && !participantList.includes(studentName)) {
            participantList.push(studentName);
            updateParticipantsList();
        }
    }

    function removeParticipant(participantName) {
        const participantIndex = participantList.indexOf(participantName);
        if (participantIndex !== -1) {
            participantList.splice(participantIndex, 1);
            updateParticipantsList();
        }
    }

    function saveParticipants() {
    if (participantList.length === 0) {
        // Show a warning if there are no participants selected
        Swal.fire({
            title: 'No Participants',
            text: 'You must select at least one participant to save.',
            icon: 'warning'
        });
    } else if (participantList.length < 12) {
        // Show a warning if there are incomplete participants
        Swal.fire({
            title: 'Incomplete Participants',
            text: 'You have not selected the maximum of 12 participants. Complete the list or confirm with the current selection.',
            icon: 'warning'
        });
    } else {
        // Show a success message with an "OK" button
        Swal.fire({
            title: 'Participants Saved',
            text: 'The participant list has been saved.',
            icon: 'success',
            confirmButtonText: 'OK'
        }).then((result) => {
            if (result.isConfirmed) {
                // Redirect after a delay of 1.5 seconds (adjust as needed)
                setTimeout(function() {
                    window.location.href = 'http://akic-cup.com/index.php?c=Content&m=view_islamic_event';
                }, 1500);
            }
        });
    }
}



    function updateParticipantsList() {
        const participantsList = document.querySelector("#participantsList");
        participantsList.innerHTML = "";
        for (let i = 0; i < participantList.length; i++) {
            const li = document.createElement("li");
            li.textContent = `${i + 1}. ${participantList[i]}`;
            li.onclick = () => {
                removeParticipant(participantList[i]);
            };
            participantsList.appendChild(li);
        }
    }
    function updateParticipantsList() {
    const participantsList = document.getElementById("participantsList");
    participantsList.innerHTML = "";
    for (let i = 0; i < participantList.length; i++) {
        const row = document.createElement("tr");

                
        // Add a cell for the participant number
        const numberCell = row.insertCell(0);
        numberCell.textContent = i + 1;


        // Participant column
        const participantCell = document.createElement("td");
        participantCell.textContent = participantList[i];
        row.appendChild(participantCell);

        // Actions column
        const actionsCell = document.createElement("td");
        const removeButton = document.createElement("button");
        removeButton.innerText = "Remove";
        removeButton.className = "remove-button";
        removeButton.onclick = () => {
            removeParticipant(participantList[i]);
        };
        actionsCell.appendChild(removeButton);
        row.appendChild(actionsCell);

        participantsList.appendChild(row);
    }
}
</script>
</body>
</html>
