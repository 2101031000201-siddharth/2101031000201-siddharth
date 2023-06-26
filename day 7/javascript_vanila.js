function demoExternalAlert() {
            alert("external alert");
        }

function demoExternalConfirm() {
            if (confirm("Are you sure..??")) {
                alert("Yesss");
            }
            else {
                alert("Noooo");
            }
        }
function demoExternalPrompt() {
            var fName = prompt("Enter First Name Here");
            var lname = prompt("enter the last name here");
            alert(fName+ " " +lName);
        }