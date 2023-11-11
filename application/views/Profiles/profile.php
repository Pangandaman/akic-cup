<!DOCTYPE html>
<html lang="en">

<head>
    <title>Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <style>
        body {
            background-color: #f1f1f3;
        }

        .card-header {
            background-color: #007bff;
            color: white;
        }

        /* Center the QR code container */
        #qrcode-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 500px; /* Set a fixed height to ensure the QR code stays centered */
            margin-bottom: 20px;
        }

        /* Define round profile picture styles */
        .profile-picture-container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 20px;
        }

        .profile-picture {
            width: 150px;
            height: 150px;
            border-radius: 50%; /* Make it round */
            object-fit: cover; /* Preserve the aspect ratio */
            border: 2px solid black;
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.4);
        }

        /* Modal content */
        .modal-content {
            background-color: #f4f4f4;
            margin: 15% auto;
            padding: 20px;
            border: 2px solid #007bff; /* Add border and customize the color */
            border-radius: 5px;
            max-width: 400px;
            position: relative;
            transition: 0.3s; /* Add animation to modal content */
        }

        /* Animation effect for the modal content */
        .modal-content.open {
            transform: scale(1);
        }

        /* Close button style */
        .close {
            position: absolute;
            top: 0;
            right: 0;
            margin: 10px;
            font-size: 20px;
            cursor: pointer;
        }
        .password-input-container {
    position: relative;
}


.toggle-password {
    position: absolute;
    right: 15px;
    top: 50%;
    transform: translateY(-50%);
    cursor: pointer;
    margin: -8px -10px;
}

/* Add a class to style the eye icon when the password is visible */
.password-visible .toggle-password {
    color: #007bff; /* Change the color to your preference */
}


    </style>
</head>

<body>

<header class="hero">
    <div class="hero-wrap">
    <p class="intro" id="intro">Profile</p>
        <h1 id="headline">Page</h1>
        <a style="color: white;" href="javascript:history.back()">← Go Back</a>
    </div>
</header>

<div class="container mt-4">
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-header text-center" style="background-color: #313638;">
                    Information
                </div>
                <div class="card-body">
                    <div class="profile-picture-container">
                        <img src="./assets/img/profile.jpg" alt="User Profile Picture" class="profile-picture">
                    </div>
                    <!-- Update Profile Button -->
                    <div class="text-center">
                    <button class="btn btn-primary" style="margin-bottom: 20px" id="openUpdateModalButton">Update Account</button>

                    </div>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col" class="text-center" style="background-color: #313638; color: white;">Attribute</th>
                                <th scope="col" class="text-center" style="background-color: #313638; color: white;">Value</th>
                            </tr>
                        </thead>
                        <?php
                        if ($this->session->userdata('type') == 'student') {
                        ?>
                        <tbody>
                            <tr>
                                <th scope="row" class="text-center" style="background-color: #313638; color: white;">Name</th>
                                <td>Mohammad Amr P. Pangandaman</td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-center" style="background-color: #313638; color: white;">Phone</th>
                                <td>0929 6400 143</td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-center" style="background-color: #313638; color: white;">Course</th>
                                <td>BS-IT</td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-center" style="background-color: #313638; color: white;">Gender</th>
                                <td>Male</td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-center" style="background-color: #313638; color: white;">House</th>
                                <td>Al-Khayyam</td>
                            </tr>
                        </tbody>
                        <?php
                        } elseif ($this->session->userdata('type') == 'management' || $this->session->userdata('type') == 'event coordinator' || $this->session->userdata('type') == 'adviser' || $this->session->userdata('type') == 'ssc') {
                        ?>
                        <tbody>
                            <tr>
                                <th scope="row" class="text-center" style="background-color: #313638; color: white;">Name</th>
                                <td>Tyler B. Durden</td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-center" style="background-color: #313638; color: white;">Position</th>
                                <td>Instructor</td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-center" style="background-color: #313638; color: white;">Designation</th>
                                <td>Management</td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-center" style="background-color: #313638; color: white;">Department</th>
                                <td>Computer Studies</td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-center" style="background-color: #313638; color: white;">Contact Details</th>
                                <td>0901321934</td>
                            </tr>
                        </tbody>
                        <?php
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center" style="background-color: #313638;">
                    QR Code
                </div>
                <div class="card-body text-center">
                    <div id="qrcode-container"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Update Account Modal -->
<div id="updateAccountModal" class="modal">
    <div class="row justify-content-center align-items-center h-100">
        <div class="col-12 col-lg-9 col-xl-7">
            <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                <div class="card-body p-4 p-md-5">
                    <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Update Account</h3>
                    <form>
                        <div class="row mb-4">
                            <div class="col-12 col-md-4">
                                <div class="form-outline">
                                    <input type="text" id="firstName" class="form-control form-control-lg" value="Mohammad Amr" disabled />
                                    <label class="form-label" for="firstName">First Name</label>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-outline">
                                    <input type="text" id="lastName" class="form-control form-control-lg" value="Pangandaman" disabled />
                                    <label class="form-label" for="lastName">Last Name</label>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-outline">
                                    <input type="text" id="middleName" class="form-control form-control-lg" value="P." disabled />
                                    <label class="form-label" for="middleName">Middle Initials</label>
                                </div>
                            </div>
                        </div>

                        <!-- Username -->
                        <div class="mb-4">
                            <div class="form-outline">
                                <input type="text" id="username" class="form-control form-control-lg" placeholder="Username" value="r3w42u2f" />
                                <label class="form-label" for="username">Username</label>
                            </div>
                        </div>


                  <!-- Password -->
<div class="mb-4">
    <div class="password-input-container">
        <input type="password" id="password" class="form-control form-control-lg" placeholder="Password" value="default123" />
        <i class="toggle-password fa fa-eye"></i>
        <label class="form-label" for="password">Password</label>
    </div>
</div>

<!-- Confirm Password -->
<div class="mb-4">
    <div class="password-input-container">
        <input type="password" id="confirmPassword" class="form-control form-control-lg" placeholder="Confirm Password" />
        <i class="toggle-password fa fa-eye"></i>
        <span id="passwordMatchMessage"></span>
        <label class="form-label" for="confirmPassword">Confirm Password</label>
    </div>
</div>


                        <!-- Profile Picture Upload -->
                        <div class="mb-4">
                            <div class="form-outline">
                                
                                <input type="file" id="profilePicture" class="form-control form-control-lg" />
<br><br>
                                <label class="form-label" for="profilePicture">Upload Profile Picture</label>
                            </div>
                        </div>

                 

                        <div class="mt-4" style="float: right;">
                            <a class="btn btn-danger btn-lg" href="http://akic-cup.com/index.php?c=Content&m=view_profile">Cancel</a>
                            <a class="btn btn-success btn-lg" onclick="confirmAdd()">Save</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<div style="padding:20px;">
<footer>
    <p>&copy; 2023 Al-Khwarizmi Automated System. All rights reserved.</p>
  </footer>
</div>
</body>
                    </html>     
<!-- Place this script at the end of the body -->
<script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>
<?php
// Define user data based on user type
if ($this->session->userdata('type') == 'student') {
    $userData = array(
        "ID-Number" => "2018-01-0032",
        "Name" => "Mohammad Amr P. Pangandaman",
        "Department" => "BS-IT"
    );
} elseif ($this->session->userdata('type') == 'management' || $this->session->userdata('type') == 'event coordinator' || $this->session->userdata('type') == 'adviser' || $this->session->userdata('type') == 'ssc') {
    $userData = array(
        "ID-Number" => "2018-01-0033",
        "Name" => "Tyler B. Durden",
        "Position" => "Instructor",
        "Department" => "Computer Studies",
        "Contact Details" => "0949 6440 143"
    );
}

// Convert the user data to JSON
$userData = json_encode($userData);
?>

<!-- Place this script at the end of the body -->
<script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>
<script>
    // Create a QR code instance with a larger size
    const qrcodeContainer = document.getElementById("qrcode-container");
    const qrcode = new QRCode(qrcodeContainer, {
        text: <?php echo $userData; ?>,
        width: 300, // Increase the width (adjust as needed)
        height: 300, // Increase the height (adjust as needed)
        padding: 20
    });

    // Set a fixed height for the QR code container
    const qrCodeImage = qrcodeContainer.getElementsByTagName("img")[0];
    qrCodeImage.style.height = "300px"; // Match the QR code height to its width
</script>
<script>
    // Get the modal and buttons
    const updateAccountModal = document.getElementById("updateAccountModal");
    const openUpdateModalButton = document.getElementById("openUpdateModalButton");
    const closeUpdateModalButton = document.getElementById("closeUpdateModalButton");

    // Open the modal when the button is clicked
    openUpdateModalButton.addEventListener("click", () => {
        updateAccountModal.style.display = "block";
    });

    // Close the modal when the close button is clicked
    closeUpdateModalButton.addEventListener("click", () => {
        updateAccountModal.style.display = "none";
    });

    // Close the modal if the user clicks outside of it
    window.addEventListener("click", (event) => {
        if (event.target === updateAccountModal) {
            updateAccountModal.style.display = "none";
        }
    });

    // Submit the form when Save Changes is clicked
    const updateForm = document.getElementById("updateForm");
    updateForm.addEventListener("submit", (event) => {
        event.preventDefault();
        // Your form submission and validation logic here
        // Ensure that the new password and confirm password match
        // Handle image uploads for the profile picture
        // Display success/error messages
        updateAccountModal.style.display = "none"; // Close the modal
    });
</script>

<script>
// Toggle password visibility
const togglePassword = (inputField, toggleButton) => {
    toggleButton.addEventListener('click', () => {
        if (inputField.type === 'password') {
            inputField.type = 'text';
            toggleButton.classList.add('password-visible');
        } else {
            inputField.type = 'password';
            toggleButton.classList.remove('password-visible');
        }
    });
};

const passwordInput = document.getElementById('password');
const confirmPasswordInput = document.getElementById('confirmPassword');
const togglePasswordIcons = document.querySelectorAll('.toggle-password');
const passwordMatchMessage = document.getElementById('passwordMatchMessage');

togglePasswordIcons.forEach((icon) => {
    togglePassword(passwordInput, icon);
    togglePassword(confirmPasswordInput, icon);
});

confirmPasswordInput.addEventListener('input', () => {
    if (passwordInput.value === confirmPasswordInput.value) {
        passwordMatchMessage.textContent = 'Passwords match ✔';
        passwordMatchMessage.style.color = 'green';
    } else {
        passwordMatchMessage.textContent = 'Passwords do not match';
        passwordMatchMessage.style.color = 'red';
    }
});

</script>
<script>
    // Function to open the Swal confirmation dialog
function confirmAdd() {
    // Get the updated username and password from the input fields
    const updatedUsername = document.getElementById('username').value;
    const updatedPassword = document.getElementById('password').value;

    Swal.fire({
        title: 'Confirm Update',
        html:
            `<p>New Username: ${updatedUsername}</p>` +
            `<p>New Password: ${updatedPassword}</p>`,
        showCancelButton: true,
        confirmButtonText: 'Confirm',
        cancelButtonText: 'Cancel',
        showLoaderOnConfirm: true,
        preConfirm: () => {
            return new Promise((resolve) => {
                // You can send the updated data to your server for processing here
                // For demonstration purposes, let's simulate a server request delay
                setTimeout(() => {
                    resolve();
                }, 2000);
            });
        },
    }).then((result) => {
        if (result.isConfirmed) {
            // Display a success message with a "View Profile" button
            Swal.fire({
                title: 'Success',
                text: 'Account updated successfully!',
                icon: 'success',
                showCancelButton: false,
                confirmButtonText: 'OK',
              
            }).then((result) => {
                if (result.isConfirmed) {
                    // User clicked "View Profile"
                    window.location.href = 'http://akic-cup.com/index.php?c=Content&m=view_profile';
                }
            });
        }
    });
}






    </script>
<!-- Bootstrap JS and jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min
