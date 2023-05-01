const URL_ROOT = "http://localhost/projectwego";

let received_requests = null;
let sent_requests = null;
let suggessions = null;

const fetchReceivedRequests = async() => {
    const response = await fetch('http://localhost/projectwego/D_ConnectionRequests/getReceivedRequests');
    if(response.status == 200){
        received_requests = await response.json();
        loadReceivedRequests(received_requests);
    }
}

const fetchSentRequests = async() => {
    const response = await fetch('http://localhost/projectwego/D_ConnectionRequests/getSentRequests');
    if(response.status == 200){
        sent_requests = await response.json();
        loadSentRequests(sent_requests);
    }
}

const fetchSuggestedVehicleSuppliers = async() => {
    console.log("Button Clicked!");
    const response = await fetch('http://localhost/projectwego/D_ConnectionRequests/getSuggessions');
    if(response.status == 200){
        suggessions = await response.json();
        loadSuggestedVehicleSuppliers(suggessions);
    }
}

const loadReceivedRequests = (requests) => {
    let result = "";

    if(requests != null){
        requests.forEach(req => {
            
            let card = 
            `<div class="left-request col-6">
                <div class="left-request-container col-6">
                    <div class="title-container col-12">
                        <h3>${req.fromWhom}</h3>
                    </div>
                <div class="div-bottom col-12">
                    <div class="image-wrapper col-4">
                        <img src="../img/3.jpg" class="profile-picture" alt="profile picture">
                    </div>
                    <div class="btn-container col-12">
                        <button class="button"><a class="link" href="${URL_ROOT}/D_ConnectionRequests/accept/${req.request_id}">Accept</a></button>
                        <button class="button"><a class="link" href="${URL_ROOT}/D_ConnectionRequests/decline/${req.request_id}">Declline</a></button>
                    </div>
                </div>
            </div>
        </div>`;

            result += card;

        });
        receivedRequests.innerHTML = result;
    }
    else{
        result = "No Pending Requests";
    }
}

const loadSentRequests = (requests) => {
    let result = "";

    if(requests != null){
        requests.forEach(req => {
            
            let card = 
            `<div class="left-request col-6">
                <div class="left-request-container col-6">
                    <div class="title-container col-12">
                        <h3>${req.toWhom}</h3>
                    </div>
                <div class="div-bottom col-12">
                    <div class="image-wrapper col-4">
                        <img src="../img/3.jpg" class="profile-picture" alt="profile picture">
                    </div>
                    <div class="btn-container col-12">
                        <button class="button"><a class="link" href="${URL_ROOT}/D_ConnectionRequests/delete/${req.request_id}">Delete Request</a></button>
                    </div>
                </div>
            </div>
        </div>`;

            result += card;
        });
        receivedRequests.innerHTML = result;
    }
    else{
        result = "No Sent Requests";
    }
}

const loadSuggestedVehicleSuppliers = (requests) => {
    let result = "";

    if(requests != null){
        requests.forEach(req => {
            
            let card = 
            `<div class="left-request col-6">
                <div class="left-request-container col-6">
                    <div class="title-container col-12">
                        <h3>${req.name}</h3>
                    </div>
                <div class="div-bottom col-12">
                    <div class="image-wrapper col-4">
                        <img src="../img/3.jpg" class="profile-picture" alt="profile picture">
                    </div>
                    <div class="btn-container col-12">
                        <button class="button"><a class="link" href="http://localhost/projectwego/D_ConnectionRequests/accept/${req.supplier_id}">
                        Send Request</a></button>
                    </div>
                </div>
            </div>
        </div>`;

            result += card;
        });
        receivedRequests.innerHTML = result;
    }
    else{
        result = "No Suggessions";
    }
}

document.addEventListener("DOMContentLoaded", () => fetchReceivedRequests());

const receivedRequests = document.querySelector("#requests");
const sentRequests = document.querySelector("#requests");
const suggestedVehicleSuppliers = document.querySelector("#requests");

const btnReceivedRequests = document.querySelector("#received-requests");
const btnSentRequests = document.querySelector("#sent-requests");
const btnSuggessions = document.querySelector("#suggessions");

btnSentRequests.addEventListener('click', () => fetchSentRequests());
btnReceivedRequests.addEventListener('click', () => loadReceivedRequests());

btnSentRequests.addEventListener("click", () => {
    fetchSentRequests();
    btnReceivedRequests.classList.remove('active-link');
    btnSuggessions.classList.remove('active-link');
    btnSentRequests.classList.remove('inactive-link');
    btnSentRequests.classList.add('active-link');
    btnReceivedRequests.classList.add('inactive-link');
    btnSuggessions.classList.add('inactive-link');
});

btnReceivedRequests.addEventListener("click", () => {
    loadReceivedRequests(received_requests);
    btnSentRequests.classList.remove('active-link');
    btnSuggessions.classList.remove('active-link');
    btnReceivedRequests.classList.remove('inactive-link');
    btnReceivedRequests.classList.add('active-link');
    btnSentRequests.classList.add('inactive-link');
    btnSuggessions.classList.add('inactive-link');
});

btnSuggessions.addEventListener("click", () => {
    loadSuggestedVehicleSuppliers();
    btnSentRequests.classList.remove('active-link');
    btnReceivedRequests.classList.remove('active-link');
    btnSuggessions.classList.remove('inactive-link');
    btnSuggessions.classList.add('active-link');
    btnReceivedRequests.classList.add('inactive-link');
    btnSentRequests.classList.add('inactive-link');
});
