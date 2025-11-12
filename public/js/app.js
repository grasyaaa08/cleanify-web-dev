console.log("Cleanify site loaded successfully!");

// Welcome modal show/hide
function showWelcomeModal() {
    const modal = document.getElementById('welcomeModal');
    if(modal){ modal.style.display = 'flex'; }
}
function closeWelcomeModal() {
    const modal = document.getElementById('welcomeModal');
    if(modal){ 
        modal.style.display = 'none'; 
        // show homepage content after closing modal
        const home = document.getElementById('homeContent');
        if(home){ home.style.display = 'block'; }
    }
}

// Booking modal
function showBookingModal(serviceName, serviceType, baseRate) {
    const modal = document.getElementById('bookingModal');
    if(modal){
        modal.style.display = 'flex';
        document.getElementById('modalServiceName').textContent = serviceName;
        document.getElementById('modalServiceType').textContent = serviceType;
        document.getElementById('modalBaseRate').textContent = baseRate;
        document.getElementById('modalFee').textContent = (baseRate*0.1).toFixed(2);
        document.getElementById('modalTotal').textContent = (baseRate*1.1).toFixed(2);
    }
}
function closeBookingModal() {
    const modal = document.getElementById('bookingModal');
    if(modal){ modal.style.display = 'none'; }
}
function confirmBooking() {
    alert("Booking confirmed!");
    closeBookingModal();
}

// Run on page load
window.onload = function(){
    if(document.getElementById('welcomeModal')){
        showWelcomeModal();
        // hide home content initially
        const home = document.getElementById('homeContent');
        if(home){ home.style.display = 'none'; }
    }
}