function convertToPassword() {
    event.preventDefault(); 
    let input = document.getElementById("passwordID");
    if (input) {
        input.type = (input.type === "password") ? "text" : "password";
    }
}


function delay(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
}

async function checkValidation(event) {
    event.preventDefault(); 

    const team = document.getElementById('team');
    const pass = document.getElementById('passwordID');

    const teamValue = team.value.trim();
    const passValue = pass.value.trim();

    const credentials = {
        teamname: 'testTeam',
        teampass: 'testpass'
    };

    if (teamValue === credentials.teamname) {
        if (passValue === credentials.teampass) {
            location.href = '/UserDashboard/index.html'; 
        } else {
            let loginFailed = document.getElementById('login-failed');
            if (loginFailed) {
                loginFailed.classList.add("login-failed-wrapper-alert");
                await delay(3000);
                loginFailed.classList.remove("login-failed-wrapper-alert");
            }
        }
    } else {
        let loginFailed = document.getElementById('login-failed');
        if (loginFailed) {
            loginFailed.classList.add("login-failed-wrapper-alert");
            await delay(3000);
            loginFailed.classList.remove("login-failed-wrapper-alert");
        }
    }
}