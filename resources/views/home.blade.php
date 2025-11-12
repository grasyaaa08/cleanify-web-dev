<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Cleanify Homepage</title>
<style>
body { font-family: Arial, sans-serif; margin:0; padding:0; background:#f5f5f5; }
header {
    display: flex;
    justify-content: space-between; /* keeps logo left, icons right */
    align-items: center;
    padding: 10px 20px;
    background: white;
    box-shadow: 0 1px 5px rgba(0,0,0,0.1);
}

.logo {
    font-weight: bold;
    font-size: 1.5rem;
    color: #4CAF50; /* green */
    text-align: left; /* make sure it's aligned left */
}

.header-icon, .icon-btn { background:none; border:none; cursor:pointer; font-size:1.2rem; color:#000; }
.icon-btn { font-weight: bold; }
main { padding:20px; max-width:800px; margin:0 auto; }
main h2 { margin-bottom:0.5rem; }
main p { margin-bottom:1rem; }
input[type=text] { width:100%; padding:10px; margin-bottom:20px; border-radius:6px; border:1px solid #ccc; }
.listing-card { background:white; padding:15px; margin-bottom:15px; border-radius:8px; display:flex; justify-content:space-between; align-items:center; box-shadow:0 1px 5px rgba(0,0,0,0.1); }
.select-book { padding:6px 12px; background:#F5A623; color:white; border:none; border-radius:6px; cursor:pointer; }
.modal { display:none; position:fixed; top:0; left:0; width:100%; height:100%; background:rgba(0,0,0,0.5); justify-content:center; align-items:center; }
.modal-content { background:white; padding:20px; border-radius:10px; width:300px; }
</style>
<script>
function showBookingModal(name,type,price){
    document.getElementById('modalServiceName').innerText = "Service: " + name;
    document.getElementById('modalServiceType').innerText = "Type: " + type;
    document.getElementById('modalBaseRate').innerText = price;
    document.getElementById('modalFee').innerText = (price*0.1).toFixed(2);
    document.getElementById('modalTotal').innerText = (price*1.1).toFixed(2);
    document.getElementById('bookingModal').style.display='flex';
}
function closeBookingModal(){ document.getElementById('bookingModal').style.display='none'; }
function confirmBooking(){ alert("Booking confirmed!"); closeBookingModal(); }
</script>
</head>
<body>
<header>
    <div class="logo">CLEANIFY</div>
     <div class="logo" style="color:#4CAF50;">CLEANIFY</div>
    <div class="header-right">
        <div class="header-icon">🔍</div>
        <div class="header-icon">👤</div>
        <div class="header-icon">⚙️</div>
        <div class="header-icon">❓</div>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="icon-btn">Log Out</button>
        </form>
    </div>
</header>

<main>
    <h2>Find Your Trustworthy Service Today</h2>
    <p>Verified providers, transparent pricing, and fast booking.</p>
    <input type="text" placeholder="Enter City (e.g., Makati)">

    @php
        $listings = [
            ['EC','EcoSpark Cleaners','Residential Cleaning','Quezon City',4.2,45,780],
            ['RH','Reliable Hands Maint.','Office Maintenance','Makati',4.9,210,690],
            ['SC','SwiftClean Pro','Residential Cleaning','Makati',4.8,150,750],
            ['TG','The Green Sweep Co.','Deep Cleaning','Taguig',4.5,92,820]
        ];
    @endphp

    @foreach($listings as $l)
    <div class="listing-card">
        <div>
            <strong>{{ $l[0] }} - {{ $l[1] }}</strong><br>
            Service: {{ $l[2] }} | Location: {{ $l[3] }}<br>
            ★★★★☆ ({{ $l[4] }}) | {{ $l[5] }} jobs<br>
            ₱ {{ $l[6] }}
        </div>
        <button class="select-book" onclick="showBookingModal('{{ $l[1] }}','{{ $l[2] }}',{{ $l[6] }})">Select and Book</button>
    </div>
    @endforeach
</main>

<!-- Booking Modal -->
<div class="modal" id="bookingModal">
    <div class="modal-content">
        <h3>Booking Summary</h3>
        <p>You are about to book:</p>
        <p id="modalServiceName"></p>
        <p id="modalServiceType"></p>
        <p>Date and Time:</p>
        <p>dd/mm/yyyy --:-- --</p>
        <p>Cost Details</p>
        <p>Base Rate: ₱<span id="modalBaseRate"></span></p>
        <p>Cleanify Service Fee (10%): ₱<span id="modalFee"></span></p>
        <p>Estimated Total Cost: ₱<span id="modalTotal"></span></p>
        <button onclick="closeBookingModal()" style="margin-right:10px; padding:6px 12px; border-radius:6px; background:#ccc; border:none;">Cancel</button>
        <button onclick="confirmBooking()" style="background:#F5A623; color:white; border:none; padding:8px 16px; border-radius:6px;">Confirm and Submit</button>
    </div>
</div>
</body>
</html>
